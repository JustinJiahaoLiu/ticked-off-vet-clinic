@extends('layouts.app')

@section('content')
	<div class="container mt-2">
		<h1>{{ $modify == 1 ? "Edit Pet" : "Add New Pet" }}</h1>
    
     <form action="{{ $modify == 1? route('update_pet', ['petId'=> $pet->petId]) : route('store_pet') }}" method="POST">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="petName">Pet Name</label>
          <input type="text" class="form-control" id="petName" placeholder="Pet Name" name="petName" value="{{ $modify == 1? $pet->petName: old('petName') }}">
          <small class="text-danger">{{ $errors->first('petName') }}</small>
        </div>
        <div class="form-group col-md-6">
          <label for="species">Species</label>
          <select class="form-control" id="species" name="species">
          <option disabled selected value> -- Select Species -- </option>
          @foreach($species as $species)
          <option value="{{ $species->species }}" {{ $modify == 1 ? ($pet->species == $species->species?'selected':''):(old('species')==$species->species?'selected':'') }}>{{ $species->species }}</option>
          @endforeach
          </select>
          <small class="text-danger">{{ $errors->first('species') }}</small>
        </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-6">
        <label for="breed">Breed</label>
        <input type="text" class="form-control" id="breed" placeholder="Breed" name="breed" value="{{ $modify == 1? $pet->breed: old('breed') }}">
        <small class="text-danger">{{ $errors->first('breed') }}</small>
      </div>
      <div class="form-group col-md-6">
        <label for="DOB">DOB</label>
        <input type="text" class="form-control" id="DOB" placeholder="Date Of Birth" name="DOB" value="{{ $modify == 1? $pet->DOB: old('DOB') }}">
        <small class="text-danger">{{ $errors->first('DOB') }}</small>
      </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="gender">Gender</label>
          <select class="form-control" id="gender" name="gender">
            <option disabled selected value> -- Select Gender -- </option>
            <option value="M" {{ $modify == 1? ($pet->gender == 'M'? 'selected':''):(old('gender')=='M')?'selected':'' }}>M</option>
            <option value="F" {{ $modify == 1? ($pet->gender == 'F'? 'selected':''):(old('gender')=='F')?'selected':'' }}>F</option>
            <option value="U" {{ $modify == 1? ($pet->gender == 'U'? 'selected':''):(old('gender')=='U')?'selected':'' }}>U</option>
          </select>
          <small class="text-danger">{{ $errors->first('gender') }}</small>
        </div>
         <div class="form-group col-md-6">
          <label for="weight">Weight</label>
          <input type="number" step="0.01" class="form-control" id="weight" placeholder="Weight" name="weight" value="{{ $modify == 1? $pet->weight: old('weight') }}">
          <small class="text-danger">{{ $errors->first('weight') }}</small>
        </div>
        <div class="form-group col-md-6">
          <label for="owner">Owner</label>
          <select class="form-control" id="owner" name="owner">
            <option disabled selected value> -- Select Customer -- </option>
            @foreach($customer as $customer)
            <option value="{{ $customer->lastName.','.$customer->firstName }}" {{ $modify == 1? ($customer->customerId == $pet->customerId?'selected':''):(old('owner')==$customer->lastName.','.$customer->firstName?'selected':'')}}>{{ $customer->lastName.','.$customer->firstName }}</option>
            @endforeach
          </select>
          <small class="text-danger">{{ $errors->first('owner') }}</small>
        </div>
      </div>
      
      <button type="submit" class="btn btn-success">Save</button>
      <a class="btn btn-primary float-right" href="{{ route('pets') }}">Cancel</a>
    </form>
	
	</div>	{{-- container --}}

  <script>
    {{--Current Date--}}
    const now = new Date(),
    month = now.getMonth();
    day = now.getDate();
    year = now.getFullYear();

    {{--Datepicker--}}
    const picker = datepicker('#DOB',{
      formatter: (input, date, instance) => {
        const value = date.toLocaleDateString();
        m = (date.getMonth() + 1) ;
        d = date.getDate().toString();
        y = date.getFullYear().toString();
        arr = [y,m,d];
        time = arr.join('-');
        input.value = time;
      },
      maxDate: new Date(year, month, day),
    });
    {{--Sweet Alert--}}
     @if (session('error_alert'))
      swal("{{ session('error_alert') }}" , {
            icon: "error", 
          });
    @endif
  </script>
@endsection