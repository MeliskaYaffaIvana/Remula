@extends('layouts.customer')
@section('content')
 <!-- ***** Features Item Start ***** -->
 <br>
<br>
<br>
<!-- ***** Our Classes Start ***** -->
<div class="card-deck">     
  @foreach($service as $serv)
<<<<<<< HEAD

=======
>>>>>>> 1c92386023804d8efdfd983d87f53da3bed15edd
  <div class="card">
    <div class="card-header">
      <h3>Our Service</h3>
      <h3>Our Service</h3>
    </div>
<<<<<<< HEAD
=======
    <div class="card-body">
          <h4>{{ $serv->user->username }}</h4>    
          <h4>{{ $serv->service_name }}</h4>
          <h4>{{ $serv->description }}</h4>
          <h5>Rp {{ number_format($serv->price) }}</h5>
				</div>
        <div class="card-footer">
				<a href="{{route ('service.show', $serv->ID_service)}}" class="card-link">Lihat</a>
			</div>
    </div>
>>>>>>> 1c92386023804d8efdfd983d87f53da3bed15edd
  </div>
      @endforeach
</div>

<!-- ***** Our Classes End ***** -->