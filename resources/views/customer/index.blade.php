@extends('layouts.customer')
@section('content')
 <!-- ***** Features Item Start ***** -->
 
<!-- ***** Our Classes Start ***** -->
<section class="section" id="our-classes">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Workshop <em>Saya</em></h2>
                    <img src="assets/images/line-dec.png" alt="">
                    <p></p>
                </div>
            </div>
            <section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2>Produk Terbaru</h2>
						<p>Tampil trendi dengan kumpulan produk kekinian kami.</p>
					</div>
				</div>
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