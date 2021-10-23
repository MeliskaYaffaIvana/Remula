@include('layouts.layout')

          <table class="table table-striped" id="tableokrole">
                  <thead>
                    <tr>
                      <th>Provider</th>
                      <th>Nama service</th>
                      <th>Deskripsi</th>
                      <th>price</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    <tr>
                      <td>{{$service->user['username']}}</td>
                      <td>{{$service->service_name}}</td>
                      <td>{{$service->description}}</td>
                      <td>
                        {{number_format($service->price)}}
                      </td>
                      <td>
                        {{$service->status}}
                      </td>
                      <td>

                      </td> 
                    </tr>
                    
                  </tbody>
                </table>

       
      </div>
   
      <a href="{{ route('customer.index') }}" class="btn btn-sm btn-danger">Cancel </a>
      <a href="{{ route('cart.index') }}" class="btn btn-sm btn-danger">Order </a>
  </div>
