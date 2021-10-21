@extends('layouts.customer')
@section('content')
 <!-- ***** Features Item Start ***** -->
 
<!-- ***** Our Classes Start ***** -->
<div class="card-deck">     
  @foreach($service as $serv)
<div class="card">
    <img src="gambar4.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Belajar Bootstrap 4</h5>
      <h3 class="card-text">Our Services</h3> 
    </div>
  </div>
  <div class="card">
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
  </div>
  <div class="card">
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
  </div>
</div>
<br>
<br>
<br>
<br>
      </div>
      @endforeach
</div>

<!-- ***** Our Classes End ***** -->