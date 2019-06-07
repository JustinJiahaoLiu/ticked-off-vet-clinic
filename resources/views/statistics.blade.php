@extends('layouts.app')

@section('content')
	<div class="container mt-2">
		<h1>Statistics</h1>
    <h5>The statistics screen allows the user to quickly see some commonly-used statistics regarding boarding information.</h5>
    
    <table class="table table-striped table-sm table-light col-6">
      <thead>
        <tr>
          <th>Item</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <td>Shortest stay</td>
            <td>{{ $short_stay->days }}</td>
          </tr>
          <tr>
            <td>Longest stay</td>
            <td>{{ $long_stay->days }}</td>
          </tr>
          <tr>
            <td>Average stay</td>
            <td>{{ $avg_stay->days }}</td>
          </tr>
          <tr>
            <td>Lowest boarding cost</td>
            <td>{{ $low_cost->stayCost }}</td>
          </tr>
          <tr>
            <td>Highest boarding cost</td>
            <td>{{ $high_cost->stayCost }}</td>
          </tr>
          <tr>
            <td>Average boarding cost</td>
            <td>{{ $avg_cost->stayCost }}</td>
          </tr>
      </tbody>
    </table>
    <form class="mt-5" action="{{ route('statisticsCal') }}" method="POST">
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

      @if(session('total_stay'))
      <div class="form-group form-row">
          <label for="stay" class="col-md-2 col-form-label"><p>NO. of stays:</p></label>
          
          <p class="col-md-3 align-self-center" id="stay" name="stay">{{ session('total_stay') }}</p>     
      </div>
      @endif

      @if(session('total_cost'))
      <div class="form-group form-row">
          <label for="amount" class="col-md-2 col-form-label"><p>Total amount paid:</p></label>
          
          <p class="col-md-3 align-self-center" id="amount" name="amount">${{ session('total_cost') }}</p>
      </div>
      @endif
      
      <button type="submit" class="btn btn-success mb-2">Calculate</button>
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