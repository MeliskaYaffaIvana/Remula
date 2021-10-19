@extends('layouts.layout')


@section('content')
<main class="main"><br>
   
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Service</h4>
                            </div>
                            <div class="card-body">
                            <div class="form-group">
                            <input type = "text" name = "IDuser" value = "{{$IDuser}}" >
                                <label for="User">Username</label>
                                    <input type="text" name="username" class="form-control" value="{{$user->username}}" required> 
                                    
                                </div>
                                <div class="form-group">
                                    <label for="service_name">Nama Service</label>
                                    <input type="service_name" name="service_name" class="form-control"  required>
                                    <p class="text-danger">{{ $errors->first('service_name') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" id="description" class="form-control"></textarea>
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="price">Harga</label>
                                    <input type="price" name="price" class="form-control"  required>
                                    <p class="text-danger">{{ $errors->first('price') }}</p>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm">Add</button>
                                    <a href="{{ route('service.index') }}" class="btn btn-sm btn-danger">Cancel </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection