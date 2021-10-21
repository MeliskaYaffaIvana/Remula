@extends('layouts.layout')

@section('content')
<main class="main"><br>
    
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="{{ route('service.update', $service->ID_service) }}" method="post" enctype="multipart/form-data" >
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Service</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                   
                                    <label for="User">Provider</label><br>
                                    <input type="text" name="username" class="form-control" value="{{ $user->username }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="service_name">Nama Service</label>
                                    <input type="text" name="service_name" class="form-control" value="{{ $service->service_name }}" required>
                                    <p class="text-danger">{{ $errors->first('service_name') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" id="description" class="form-control">{{ $service->description }}</textarea>
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
                                    <input type="number" name="price" class="form-control" value="{{ $service->price }}" required>
                                    <p class="text-danger">{{ $errors->first('price') }}</p>
                                </div>
                                <div class="form-group">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm">Update</button>
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

@section('js')
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection