@extends('layouts.app')

@section('content')
	<div class="container mt-2">
		<h1>Statistics</h1>
    <h5>The statistics screen allows the user to quickly see some commonly-used statistics regarding boarding information.</h5>
    
	
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