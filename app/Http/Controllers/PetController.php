<?php

namespace App\Http\Controllers;

use App\Model\Pet;
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
    public function index()
    {   
        return view('pets',['pet'=>Pet::all()]);
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
}
