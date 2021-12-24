@extends('layouts.master')

@section('content')

    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Projects</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item">Projects</li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalFullscreen">Personal Requested Service</button>
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalFullscreenInstitution">Institution Requested Service</button>
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalFullscreenAddService">Add Service</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @include('admin.services.show')

        @include('admin.services.create')

        <div class="col-md-12">
            <div class="card">
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <!-- <th>Image</th> -->
                                    <!-- <th>Description</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($services as $project)
	                                <tr>
                                        <td>{{ $project->id }}</td>
	                                    <td>{{ $project->name }}</td>
	                                    <!-- <td>
                                            <img src="/storage/{{ $project->image }}" class="w-25">
                                        </td> -->
	                                    <!-- <td>
                                            {{ $project->description }}
                                        </td> -->
	                                    <td>
	                                    	<button type="button" class="border-0 bg-white" data-toggle="modal" data-target="#exampleModalFullscreenEditService">
                                                <i class="icon feather icon-edit f-16 text-success"></i>
                                            </button>
                                            <a href="#!">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </a>
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

    <div class="col-md-12">
            <div class="card">
                <div class="modal fade" id="exampleModalFullscreenEditService" tabindex="-1" aria-labelledby="exampleModalFullscreenEditServiceLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title h4" id="exampleModalFullscreenEditServiceLabel">Edit Services</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <form method="POST" action="{{ route('adminServiceStore') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="inputName4">Name</label>
                                            <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" id="inputName4" value="{{ old('name') }}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="inputImage4">Image</label>
                                            <input type="file" name="image" class="form-control-file form-control-sm @error('image') is-invalid @enderror" id="inputImage4" value="{{ old('image') }}">
                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="inputDescription4">Description</label>
                                            <textarea rows="5" name="description" class="form-control form-control-sm @error('description') is-invalid @enderror" placeholder="Enter Description">{{ old('description') }}</textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary w-100">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection