@include('layouts.customer')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
<div class="hero-slider">
  <div class="slider-item th-fullpage hero-area"
   style="background-image: url(admin/images/satu.png); max-height: 382px;">
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
     

          <table class="table table-striped" id="tableokrole">
                  <thead>
                    <tr>
                      <th>Provider</th>
                      <th>Nama Service</th>
                      <th>Deskripsi</th>
                      <th>price</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($service as $serv)
                    <tr>
                      <td>{{$serv->user->username}}</td>
                      <td>{{$serv->service_name}}</td>
                      <td>{{$serv->description}}</td>
                      <td>
                        {{number_format($serv->price)}}
                      </td>
                      <td>
                        {{$serv->status}}
                      </td>
                      <td>

                      </td> 
                    </tr>
                   @endforeach
                  </tbody>
                </table>

       
      </div>
   

  </div>
</section>
    </div>
  </div>
</section>
