<?php

namespace App\Http\Controllers;

use App\Model\Pet;
use App\Model\Stay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Customer;
use Validator;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        if(isset($_GET['key'])&&isset($_GET['order'])){
            $key = $request->query('key');
            $order = $request->query('order')=='Ascending'?'asc':'desc';
            return view('pets', ['pet'=>Pet::orderBy($key, $order)->get(), 'order'=>$request->query('order')]);
        }else{
            return view('pets',['pet'=>Pet::all()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $species = DB::table('pets')->select('species')->distinct()->get();
        $customer = Customer::all();
        return view('forms/pet_form', [ 'modify' => 0, 'customer' => $customer, 'species' => $species ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'petName' => 'required|max:80',
            'species' => 'required',
            'breed' => 'required|max:50',
            'DOB' => 'required',
            'gender' => 'required',
            'weight' => ['required', 'regex:/^(?:[1-9]\d*|0)?(?:\.\d+)?$/u'],
            'owner' => 'required',
        ]);

       if ($validator->fails()) {
            return redirect(route('create_pet'))->with('error_alert', "Oops!Something is wrong!")->withErrors($validator)->withInput();
        }

        // customerName = 'lastName,firstName'  
        $customerName = explode(',', $request->input('owner'));
        $customer = Customer::where([ ['lastName','=', $customerName[0]], ['firstName','=', $customerName[1]] ])->first();

        $pet = new Pet();
        $pet->petName = $request->input('petName');
        $pet->species = $request->input('species');
        $pet->breed = $request->input('breed');
        $pet->DOB = $request->input('DOB');
        $pet->gender = $request->input('gender');
        $pet->weight = $request->input('weight');
        $pet->customerId = $customer->customerId;

        $pet->save();
        return redirect(route('pets'))->with('success_alert', 'A New Pet Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {   
        $species = DB::table('pets')->select('species')->distinct()->get();
        $pet = Pet::where('petId', $request->petId)->first();
        $customer = Customer::all();

        return view('forms/pet_form', [ 'modify' => 1, 'pet' => $pet, 'customer'=> $customer, 'species' => $species ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $pet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pet)
    {
        $validator = Validator::make($request->all(), [
            'petName' => 'required|max:80',
            'species' => 'required',
            'breed' => 'required|max:50',
            'DOB' => 'required',
            'gender' => 'required',
            'weight' => ['required', 'regex:/^(?:[1-9]\d*|0)?(?:\.\d+)?$/u'],
            'owner' => 'required',
        ]);

       if ($validator->fails()) {
            return redirect(route('edit_pet', ['petId'=> $request->petId]))->with('error_alert', "Oops!Something is wrong!")->withErrors($validator)->withInput();
        }

        // customerName = 'lastName,firstName'  
        $customerName = explode(',', $request->input('owner'));
        $customerId = Customer::where([ ['lastName','=', $customerName[0]], ['firstName','=', $customerName[1]] ])->get();

        $pet = Pet::where('petId',$request->petId)->first();
        $pet->petName = $request->input('petName');
        $pet->species = $request->input('species');
        $pet->breed = $request->input('breed');
        $pet->DOB = $request->input('DOB');
        $pet->gender = $request->input('gender');
        $pet->weight = $request->input('weight');
        $pet->customerId = $customerId[0]->customerId;

        $pet->save();
        return redirect('pets')->with('success_alert', 'A Pet Record Has Been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Pet $pet)
    {   
        $pet = Pet::where('petId',$request->petId)->first();
        $pet->delete();
        return redirect('pets');
    }

    /**
     * Display calculator
     *
     * @return \Illuminate\Http\Response
     */
    public function calculator()
    {   
        $species = DB::table('pets')->select('species')->distinct()->get();
        return view('calculator', ['species' => $species]);
    }

    /**
     * Calculate how much it will cost to have a pet board at the vet.
     *
     * @return \Illuminate\Http\Response
     */
    public function calculate(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'species' => 'required',
            'weight' => ['required', 'regex:/^(?:[1-9]\d*|0)?(?:\.\d+)?$/u'],
            'stay' => ['required', 'regex:/^(0|[1-9][0-9]*)$/u', 'not_in:0'],
        ]);

        if ($validator->fails()) {
            return redirect(route('calculator'))->with('error_alert', "Oops!Something is wrong!")->withErrors($validator)->withInput();
        }

        // Calculate the cost for boarding
        $base_rate = 20;

        switch ($request->input('species')) {
            case 'Cat':
                $species_rate = 5;
                break;
            case 'Dog':
                $species_rate = 5;
                break;
            case 'Ferret':
                $species_rate = 5;
                break;
            case 'Goat':
                $species_rate = 12;
                break;
            case 'Guinea pig':
                $species_rate = 0;
                break;
            case 'Horse':
                $species_rate = 22;
                break;
            case 'Koala':
                $species_rate = 20;
                break;
            case 'Mouse':
                $species_rate = 0;
                break;
            case 'Rabbit':
                $species_rate = 3;
                break;
            case 'Rat':
                $species_rate = 0;
                break;
            case 'Snake':
                $species_rate = 15;
                break;
            case 'Tortoise':
                $species_rate = 0;
                break;
            case 'Yak':
                $species_rate = 108;
                break;
        }

        if($request->input('weight') >= 12){
            $fatty_rate = ($request->input('weight')-12)*1.5;   //fatty factor
        }else{
            $fatty_rate = 0;
        }

        if($request->input('stay') > 10){
            $final_price = 0.9*($request->input('stay')*($base_rate+$species_rate+$fatty_rate));      //10% discount
        }else{
            $final_price = $request->input('stay')*($base_rate+$species_rate+$fatty_rate);
        }

        return redirect(route('calculator'))->with('final_price', $final_price)->withInput();
    }

    /**
     * Display statistics
     *
     * @return \Illuminate\Http\Response
     */
    public function statistics()
    {   
        $short_stay = DB::table('stays')->select(DB::raw('DATEDIFF(stayEndDate,stayStartDate) AS days'))
                                        ->orderBy('Days','asc')
                                        ->first();
        $long_stay = DB::table('stays')->select(DB::raw('DATEDIFF(stayEndDate,stayStartDate) AS days'))
                                        ->orderBy('Days','desc')
                                        ->first();
        $avg_stay = DB::table('stays')->select(DB::raw('AVG(DATEDIFF(stayEndDate,stayStartDate)) AS days'))
                                        ->first();
        $low_cost = Stay::orderBy('stayCost', 'asc')->first('stayCost');
        $high_cost = Stay::orderBy('stayCost', 'desc')->first('stayCost');
        $avg_cost = DB::table('stays')->select(DB::raw('AVG(stayCost) AS stayCost'))
                                      ->first();
        $species = DB::table('pets')->select('species')->distinct()->get();

        return view('statistics',['short_stay'=>$short_stay,'long_stay'=>$long_stay, 'avg_stay'=>$avg_stay,'low_cost'=>$low_cost, 'high_cost'=>$high_cost, 'avg_cost'=>$avg_cost, 'species'=>$species] );                         
    }

    /**
     * Calculate how much it will cost to have a pet board at the vet.
     *
     * @return \Illuminate\Http\Response
     */
    public function statisticsCal(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'species' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect(route('statistics'))->with('error_alert', "Oops!Something is wrong!")->withErrors($validator);
        }

        // Get stay info
        $total_stay;
        $total_cost;
        $species = $request->input('species');
        $pet = Pet::where('species',$species)->get();
        foreach ($pet as $pet) {
           $stay = $pet->stay;
           foreach ($stay as $stay) {
            $total_cost += ($stay->stayEndDate - $stay->stayStartDate);
            $total_cost += $stay->stayCost;
           }
        }
        

        return redirect(route('statistics'))->with(['species' => $species]);
    }

}
