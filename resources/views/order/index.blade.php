@extends('layouts.customer')
@section('content')

<div class="card-body">
          <div class="table-responsive">
            <table class="table table-stripped">
              <thead>
                <tr>
                  <th>ID User</th>
                  <th>ID Service</th>
                  <th>Cost</th>
                  <th>Order Date</th>
                  <th>Servcie Date</th>
                  <th>Status Payment</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              @foreach($itemorder as $order)
                <tr>
                  <td>
                    {{ $order->ID_user }}
                  </td>
                  <td>
                    {{ $order->ID_service}}<br />
                    {{ $order->cost}}<br />
                    {{ $order->order_date}}, {{ $order->service_date}}
                  </td>
                  <td>
                    {{ $order->no_tlp }}
                  </td>
                  <td>
                    <form action="{{ route('order.update',$order->id) }}" method="post">
                    </form>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col col-8">
      <div class="card">
        <div class="card-header">
          Form Order
        </div>
        <div class="card-body">
          @if(count($errors) > 0)
          @foreach($errors->all() as $error)
              <div class="alert alert-warning">{{ $error }}</div>
          @endforeach
          @endif
          @if ($message = Session::get('error'))
              <div class="alert alert-warning">
                  <p>{{ $message }}</p>
              </div>
          @endif
          @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          @endif
          <form action="{{ route('order.index') }}" method="post">
            @csrf()
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="nama_penerima">ID User</label>
                  <input type="number" name="id-user" class="form-control" value={{old('ID_user') }}>
                </div>
                <div class="form-group">
                  <label for="alamat">ID Service</label>
                  <input type="number" name="id-service" class="form-control" value={{old('ID_service') }}>
                </div>
                <div class="form-group">
                  <label for="no_tlp">Cost</label>
                  <input type="number" name="cost" class="form-control" value={{old('cost') }}>
                </div>
                <div class="form-group">
                  <label for="provinsi">Order Date</label>
                  <input type="date" name="order-date" class="form-control" value={{old('order_date') }}>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="kota">Service Date</label>
                  <input type="date" name="service-date" class="form-control" value={{old('servcie_date') }}>
                </div>
                <div class="form-group">
                  <label for="kecamatan">Status Payment</label>
                  <input type="text" name="payment" class="form-control" value={{old('status_payment) }}>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection