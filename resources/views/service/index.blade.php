@extends('layouts.provider')

@section('title')
    <title>List service</title>
@endsection

@section('content')
<header class="bg-dark py-5">
<main class="main"><br><br><br><br>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                List service
                                <div class="float-right">
                                    <a href="{{ route('service.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                                </div>
                            </h4>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <form action="{{ route('service.index') }}" method="get">
                                <div class="input-group mb-3 col-md-3 float-right">
                                    <input type="text" name="search" class="form-control" placeholder="Cari..." value="{{ request()->search }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="button">Cari</button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Provider</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Date</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1;@endphp
                                        @foreach ($service as $serv)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td><strong>{{ $serv->service_name }}</strong></td>
                                            <td> <label>Provider: <span class="badge badge-info">{{ $serv->user->username }}</span></label></td>
                                            <td> <label>Description: <span class="badge badge-info">{{ $serv->description }} </span></label></td>
                                            
                                            <td>Rp {{ number_format($serv->price) }}</td>
                                            <td>{{ $serv->created_at->format('d-m-Y') }}</td>
                                            <td>
                                                <form action="{{ route('service.destroy', $serv->ID_service) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a  href="{{ route('service.edit', $serv->ID_service)}}" class="btn btn-warning btn-sm">Edit</a>
                                                    <button class="btn btn-danger btn-sm">Hapus</button>
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
            </div>
        </div>
    </div>
</main>
@endsection
