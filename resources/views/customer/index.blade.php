@extends('layouts.customer')
@section('content')
 <!-- ***** Features Item Start ***** -->
 
<!-- ***** Our Classes Start ***** -->
<header class="bg-dark py-5">
           
</header>
<div class="hero-slider">
  <div class="slider-item th-fullpage hero-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-center">
        </div>
      </div>
    </div>
  </div>
</div>

<section class="product-category section" style="padding: 0;">
  <div class="container">            
				<div class="row">
                    @forelse($service as $serv)
					<div class="col-md-6">
                        <div class="dashboard-wrapper user-dashboard">
                            <div class="clearfix">
                                <div class="float-left">
                                <div class="float">
                            <h4>{{ $serv->user->username }}</h4>    
                            <h4>{{ $serv->service_name }}</h4>
                                <h4>{{ $serv->description }}</h4>
							</a>
                            <h5>Rp {{ number_format($serv->price) }}</h5>
						</div>
                        </div>
                        </div>
                        </div>
					</div>
                    @empty
                    
                    @endforelse
				</div>

				<div class="row">
				
				</div>
			</div>
		</div>
	</section>
    </div>
</section>
<!-- ***** Our Classes End ***** -->