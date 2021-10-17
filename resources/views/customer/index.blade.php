@extends('layouts.customer')
@section('content')
 <!-- ***** Features Item Start ***** -->
 
<!-- ***** Our Classes Start ***** -->
<header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-4">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">Remula adalah </h1>
                            <p class="lead text-white-50 mb-4">aplikasi berbasis web yang membantu masyarakat dalam mencari dan menemukan teknisi yang dapat memperbaiki barang disekitar kita.
								Dengan aplikasi ini kita dapat membuat waktu lebih efisien dan mudah dalam memperbaiki barang.
							</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="{{route('order.index')}}">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		<div class="main_box">

				<div class="row">
                    @forelse($service as $serv)
					<div class="col col1">
						<div class="f_p_item">
									<a href="{{ url('/product/' . $serv->slug) }}">
										<i class="lnr lnr-cart"></i>
									</a>
								</div>
							</div>
                            <a href="{{ url('/product/' . $serv->slug) }}">
                            <h4>{{ $serv->user->username }}</h4>    
                            <h4>{{ $serv->service_name }}</h4>
                                <h4>{{ $serv->description }}</h4>
							</a>
                            <h5>Rp {{ number_format($serv->price) }}</h5>
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