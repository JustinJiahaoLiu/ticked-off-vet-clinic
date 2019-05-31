@extends('layouts.app')

@section('content')
	<div class="container mt-2">
		<h1>{{ $modify == 1 ? "Edit Pet" : "Add New Pet" }}</h1>
    
    @if(isset($pet) && isset($customer))
      @foreach($pet as $pet)
      @endforeach
      @foreach($customer as $customer)
      @endforeach
    @endif
    
     <form action="{{ $modify == 1? route('update_pet', ['petId'=> $pet->petId]) : route('store_pet') }}" method="POST">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="petName">Pet Name</label>
          <input type="text" class="form-control" id="petName" placeholder="Pet Name" name="petName" value="{{ $modify == 1? $pet->petName: '' }}">
        </div>
        <div class="form-group col-md-6">
          <label for="species">Species</label>
          <input type="text" class="form-control" id="species" placeholder="Species" name="species" value="{{ $modify == 1? $pet->species: '' }}">
        </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-6">
        <label for="breed">Breed</label>
        <input type="text" class="form-control" id="breed" placeholder="Breed" name="breed" value="{{ $modify == 1? $pet->breed: '' }}">
      </div>
      <div class="form-group col-md-6">
        <label for="DOB">DOB</label>
        <input type="text" class="form-control" id="DOB" placeholder="YYYY-MM-DD" name="DOB" value="{{ $modify == 1? $pet->DOB: '' }}">
      </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="gender">Gender</label>
          <input type="text" class="form-control" id="gender" placeholder="Gender" name="gender" value="{{ $modify == 1? $pet->gender: '' }}">
        </div>
         <div class="form-group col-md-6">
          <label for="weight">Weight</label>
          <input type="text" class="form-control" id="weight" placeholder="Weight" name="weight" value="{{ $modify == 1? $pet->weight: '' }}">
        </div>
        <div class="form-group col-md-6">
          <label for="owner">Owner</label>
          <input type="text" class="form-control" id="owner" placeholder="Lastname,FirstName" name="owner" value="{{ $modify == 1? $customer->lastName.','.$customer->firstName: '' }}">
        </div>
      </div>
      
      <button type="submit" class="btn btn-success">Save</button>
    </form>
	
	</div>	{{-- container --}}
@endsection