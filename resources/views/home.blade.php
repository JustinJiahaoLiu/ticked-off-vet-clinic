@extends('layouts.app')

@section('content')
	<div class="container mt-2">
		<h1>Main Menu</h1>
		<div class="container text-center">
		<img src="/images/TickedOff_Logo.png">
		</div>
	<div class="card-deck mb-3 text-center">
		<div class="card mb-4 shadow-sm">
		  <div class="card-header">
		    <h4 class="my-0 font-weight-normal">Management</h4>
		  </div>
		  <div class="card-body">
		    <h1 class="card-title">Management Pet Info</h1>
		    <ul class="list-unstyled mt-3 mb-4">
		      <li>Create Pet Info</li>
		      <li>View Pet Info</li>
		      <li>Update Pet Info</li>		      
		      <li>Remove Pet Info</li>
		    </ul>
		    <a href="{{ route('pets') }}"><button type="button" class="btn btn-lg btn-block btn-primary">Get Started</button></a>
		  </div>
		</div>
		<div class="card mb-4 shadow-sm">
		  <div class="card-header">
		    <h4 class="my-0 font-weight-normal">Management</h4>
		  </div>
		  <div class="card-body">
		    <h1 class="card-title">Statistics</h1>
		    <ul class="list-unstyled mt-3 mb-4">
		      <li>Stay Statistics</li>
		      <li>Boarding Cost Statistics</li>
		      <li>Species Total Stay</li>
		      <li>Species Total Amount Paid</li>
		    </ul>
		    <a href="#"><button type="button" class="btn btn-lg btn-block btn-primary">Get started</button></a>
		  </div>
		</div>
		</div>
		<div class="card-deck mb-3 text-center">
		<div class="card mb-4 shadow-sm">
		  <div class="card-header">
		    <h4 class="my-0 font-weight-normal">Tool</h4>
		  </div>
		  <div class="card-body">
		    <h1 class="card-title">Boarding Cost Calculator</h1>
		    <ul class="list-unstyled mt-3 mb-4">
		      <li>Species</li>
		      <li>Weight</li>
		      <li>Stay Length</li>		      
		      <li>Total Cost</li>
		    </ul>
		    <a href="{{ route('calculator')}}"><button type="button" class="btn btn-lg btn-block btn-primary">Get Started</button></a>
		  </div>
		</div>
		<div class="card mb-4 shadow-sm">
		  <div class="card-header">
		    <h4 class="my-0 font-weight-normal">Tool</h4>
		  </div>
		  <div class="card-body">
		    <h1 class="card-title">Qick Export Pet Info</h1>
		    <ul class="list-unstyled mt-3 mb-4">
		      <li>All Pet Information</li>
		      <li>Save Dialog</li>
		      <li>Save To User's Local Storage</li>
		      <li>Owner Information Included</li>
		    </ul>
		    <a href="#"><button type="button" class="btn btn-lg btn-block btn-primary">Export to CSV</button></a>
		  </div>
		</div>
		</div>

	
		<button class="btn btn-lg btn-success btn-block mb-5" onclick="swal({title:'Coming soon...'});">Watch The New Promo Video</button>

	</div>
@endsection