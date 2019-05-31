<?php

namespace App\Http\Controllers;

use App\Model\Pet;
use Illuminate\Http\Request;
use App\Model\Customer;

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
        return view('forms/pet_form', [ 'modify' => 0 ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // customerName = 'lastName,firstName'  
        $customerName = explode(',', $request->input('owner'));
        $customerId = Customer::where([ ['lastName','=', $customerName[0]], ['firstName','=', $customerName[1]] ])->get();

        $pet = new Pet();
        $pet->petName = $request->input('petName');
        $pet->species = $request->input('species');
        $pet->breed = $request->input('breed');
        $pet->DOB = $request->input('DOB');
        $pet->gender = $request->input('gender');
        $pet->weight = $request->input('weight');
        $pet->customerId = $customerId[0]->customerId;

        $pet->save();
        redirect('pets');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {   
        $pet = Pet::where('petId', $request->petId)->get();
        $customer = Customer::where('customerId', $pet[0]->customerId )->get();

        return view('forms/pet_form', [ 'modify' => 1, 'pet' => $pet, 'customer' => $customer ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        //
    }
}
