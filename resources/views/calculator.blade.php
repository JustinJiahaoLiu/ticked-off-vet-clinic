@extends('layouts.app')

@section('content')
	<div class="container mt-2">
		<h1>Boarding Cost Calculator</h1>
    <h5>The Boarding Cost Calculator allows the user to quickly and easily calculate how much it will cost to have a pet board at the vet. The cost is based on the pet’s species, weight and the length of the stay.</h5>

    <form class="mt-5" action="{{ route('calculate') }}" method="POST">
      @csrf
      <div class="form-group form-row">
          <label for="species" class="col-md-1 col-form-label">Species</label>
          <select class="form-control col-md-6" id="species" name="species">
          <option disabled selected value> -- Select Species -- </option>
          @foreach($species as $species)
          <option value="{{ $species->species }}" {{ old('species')==$species->species?'selected':''}}>{{ $species->species }}</option>
          @endforeach
          </select>
          <small class="text-danger">{{ $errors->first('species') }}</small>
      </div>
      <div class="form-group form-row">
          <label for="weight" class="col-md-1 col-form-label">Pet Weight</label>
          <input type="number" step="0.01" class="form-control col-md-6" id="weight" placeholder="Weight" name="weight" value="{{ old('weight') }}">
          <small class="text-danger">{{ $errors->first('weight') }}</small>
      </div>

      <div class="form-group form-row">
          <label for="stay" class="col-md-1 col-form-label">Stay Length</label>
          <input type="number" step="1" class="form-control col-md-6" id="stay" placeholder="stay" name="stay" value="{{ old('stay') }}">
          <small class="text-danger">{{ $errors->first('stay') }}</small>
      </div>
      
      <button type="submit" class="btn btn-success mb-2">Calculate</button>
      @if(session('final_price'))
      <div class="form-group form-row">
          <label for="cost" class="col-md-2 col-form-label"><h3>Total Cost:</h3></label>
          <h3 class="col-md-3 align-self-center" id="cost" name="cost">${{ session('final_price')}}</h3>
      </div>
      @endif
    </form>

	
	</div>	{{-- container --}}
  <script>
    {{--Sweet Alert--}}
     @if (session('error_alert'))
      swal("{{ session('error_alert') }}" , {
            icon: "error", 
          });
    @endif
  </script>
@endsection