@extends('layouts.app')

@section('content')
@include('inc.inner_nav')
	<div class="container mt-2">
		<h1>Management Pet Info</h1>
    <a href="{{ route('create_pet') }}" class="btn btn-outline-success mt-2 mb-2">ADD NEW PET</a>

    <div class="d-flex justify-content-start align-items-center">
    <label class="mb-0" for="sort">Sort:</label>
    <select class="ml-2" id="sort" name="sort" onchange="sort();">
      <option disabled selected value> -- Select Species -- </option>
      <option value="petId">Pet ID</option>
      <option value="petName">Pet Name</option>
      <option value="species">Species</option>
      <option value="breed">Breed</option>
      <option value="DOB">DOB</option>
      <option value="gender">Gender</option>
      <option value="weight">Weight</option>
      <option value="customerId">Owner</option>
    </select>
    <button class="btn btn-outline-secondary ml-2" id="toggler" value="Ascending" onclick="toggle();"> Ascending<i class="fas fa-arrow-up"></i> </button>
    </div> 
	<div class="table-responsive mt-2">
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

    // toggle button
    function toggle(){
      var toggler = document.getElementById('toggler');
      if(toggler.value == 'Ascending') {
        toggler.value = "Descending";
        toggler.innerHTML = "Descending<i class=\"fas fa-arrow-down\"></i>";
      }else{
        toggler.value = "Ascending";
        toggler.innerHTML = "Ascending<i class=\"fas fa-arrow-up\"></i>";
      }
    }

    // sort function
    function sort(){
      window.location.href = "{{ route('pets')}}"
    }
  </script>
@endsection