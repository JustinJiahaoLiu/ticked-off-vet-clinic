@extends('layouts.app')

@section('content')
@include('inc.inner_nav')
	<div class="container mt-2">
		<h1>Management Pet Info</h1>
    <a href="{{ route('create_pet') }}" class="btn btn-outline-success mt-2 mb-2">ADD NEW PET</a>

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
                <td>{{ $pet->customer->lastName.','.$pet->customer->firstName }}</td>
                <td>
                  <a href="{{ route('edit_pet', ['petId' => $pet->petId]) }}" class="btn btn-warning">EDIT</a>
                  <button id="{{ $pet->petId }}" class="btn btn-danger ml-2" onclick="deletePet(this);">DELETE</button>
                </td>
              </tr>
              @endforeach
              @endif
          </tbody>
        </table>
      </div>
	
	</div>	{{-- container --}}
  <script>
    // alert listener
    @if (session('success_alert'))
    swal("{{ session('success_alert') }}" , {
            icon: "success", 
          });
    @endif

    @if (session('error_alert'))
    swal("{{ session('error_alert') }}" , {
            icon: "error", 
          });
    @endif

    function deletePet(event){
      swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this pet record!",
        icon: "warning",
        buttons: ["Cancel", "Save"],
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          // xhr request to delte pet
          var petId = event.id;
          var baseUrl = "/pets/delete/";
          var xhttp = new XMLHttpRequest();
          xhttp.open("GET", baseUrl.concat(petId) );
          xhttp.send();

          swal("Poof! Your pet record has been deleted!", {
            icon: "success", 
          }).then(()=>{window.location.reload();});
        } else {
          swal("Your pet record is safe!");
        }
      });
    }
  </script>
@endsection