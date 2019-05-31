@extends('layouts.app')

@section('content')
	<div class="container mt-2">
		<h1>Management Pet Info</h1>
    <a href="{{ route('create_pet') }}" class="btn btn-outline-success mt-3 mb-3">ADD NEW PET</a>

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
                <td><a href="{{ route('edit_pet', ['petId' => $pet->petId]) }}" class="btn btn-warning">EDIT</a></td>
              </tr>
              @endforeach
              @endif
          </tbody>
        </table>
      </div>
	
	</div>	{{-- container --}}
@endsection