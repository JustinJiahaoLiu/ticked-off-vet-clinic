@extends('layouts.app')

@section('content')
	<div class="container mt-2">
		<h1>{{ $modify == 1 ? "Edit Pet" : "Add New Pet" }}</h1>
    
@dd($pet)
	<div class="table-responsive">
        <table class="table table-striped table-sm table-light">
          <thead>
            <tr>
              <th>Pet ID</th>
              <th>Pet Name</th>
              <th>Species</th>
              <th>Breed</th>
              <th>DOB</th>
              <th>Gender</th>
              <th>Weight</th>
              <th>Owner</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @if(isset($pet))
              @foreach($pet as $pet)
              <tr>
                <td>{{ $pet->petId }}</td>
                <td>{{ $pet->petName }}</td>
                <td>{{ $pet->species }}</td>
                <td>{{ $pet->breed }}</td>
                <td>{{ $pet->DOB }}</td>
                <td>{{ $pet->gender }}</td>
                <td>{{ $pet->weight }}</td>
                <td>placeholder</td>
                <td>placeholder</td>
              </tr>
              @endforeach
              @endif
          </tbody>
        </table>
      </div>
	
	</div>	{{-- container --}}
@endsection