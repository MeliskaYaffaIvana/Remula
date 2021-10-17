@extends('layouts.customer')
@section('content')

<div class="dashboard-wrapper user-dashboard">
					<div class="media">
						<div class="media-body">
							<p>Order Detail</p>
						</div>
					</div>
					<div class="table-responsive">
				 <table class="table table-striped" id="tableokrole">
                  <thead>
                    <tr>
                      <th>ID Order</th>
                      <th>ID User</th>
                      <th>ID Service</th>
                      <th>Cost</th>
                      <th>Order Date</th>
                      <th>Service Date</th>
                      <th>Status Payment</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($data as $key => $order)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$order->ID_user}}</td>
                      <td>{{$order->ID_Service}}</td>
                      <td>{{$order->Cost}}</td>
                      <td>{{$order->order_date}}</td>
                      <td>{{$order->service_date}}</td>
                      <td>
                        {{$order->status}}
                      </td>
                      <td>
                            	@if($dt->status == 'waiting')
				                      	<a onclick="return confirm(' are you sure to agree this transaction?')" href="{{url('order/transaction/agree/'.$dt->id)}}" title="Agree"><i class="fa fa-check"></i></a>
				                      	&nbsp;
				                      	<a onclick="return confirm(' are you sure to disagree this transaction?')" href="{{url('order/transaction/disagree/'.$dt->id)}}" title="Disagree"><i class="fa fa-close"></i></a>
				                      	@else
				                      		{{$dt->status}}
				                      	
				                      @endif

                      </td> 
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js "></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#tableokrole').DataTable();
} );
</script>