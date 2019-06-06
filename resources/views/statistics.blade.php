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