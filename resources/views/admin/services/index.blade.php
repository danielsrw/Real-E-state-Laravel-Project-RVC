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
        <div class="col-md-12">
            <!-- Personal Requested Service -->
            <div class="card">
                <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Personal Requested Services</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body table-border-style">
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>UPI</th>
                                                <th>Address</th>
                                                <th>Institution</th>
                                                <th>Purpose of service</th>
                                                <th>Personal Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($requests as $request)
                                                <tr>
                                                    <td>{{ $request->p_name }}</td>
                                                    <td>{{ $request->p_email }}</td>
                                                    <td>{{ $request->p_phone }}</td>
                                                    <td>{{ $request->p_upi }}</td>
                                                    <td>{{ $request->p_address }}</td>
                                                    <td>{{ $request->p_institution }}</td>
                                                    <td>{{ $request->p_purpose }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Personal Requested Service -->
        </div>
        <div class="col-md-12">
            <!-- Institution Reqeusted Service -->
            <div class="modal fade" id="exampleModalFullscreenInstitution" tabindex="-1" aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title h4" id="exampleModalFullscreenSmLabel">Institution Requested Service</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body table-border-style">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Applicant</th>
                                            <th>UPI</th>
                                            <th>Address</th>
                                            <th>Client Name</th>
                                            <th>Client Address</th>
                                            <th>Purpose of service</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($requests as $request)
                                            <tr>
                                                <td>{{ $request->i_name }}</td>
                                                <td>{{ $request->i_applicant }}</td>
                                                <td>{{ $request->i_address }}</td>
                                                <td>{{ $request->i_upi }}</td>
                                                <td>{{ $request->i_client_name }}</td>
                                                <td>{{ $request->i_client_address }}</td>
                                                <td>{{ $request->i_purpose }}</td>
                                                <td>{{ $request->i_description }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Institution Reqeusted Service -->
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="modal fade" id="exampleModalFullscreenAddService" tabindex="-1" aria-labelledby="exampleModalFullscreenServicesLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title h4" id="exampleModalFullscreenServicesLabel">Add Services</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <form method="POST" action="{{ route('adminServiceStore') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="inputName4">Name</label>
                                        <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" id="inputName4" placeholder="Enter Name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="inputImage4">Image</label>
                                        <input type="file" name="image" class="form-control-file form-control-sm @error('image') is-invalid @enderror" id="inputImage4">
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-label" for="inputDescription4">Description</label>
                                        <textarea rows="5" name="description" class="form-control form-control-sm @error('description') is-invalid @enderror" placeholder="Enter Description"></textarea>
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
                                            <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" id="inputName4" value="{{ old('name') ?? $project->name }}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="inputImage4">Image</label>
                                            <input type="file" name="image" class="form-control-file form-control-sm @error('image') is-invalid @enderror" id="inputImage4" value="{{ old('image') ?? $project->image }}">
                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="inputDescription4">Description</label>
                                            <textarea rows="5" name="description" class="form-control form-control-sm @error('description') is-invalid @enderror" placeholder="Enter Description">{{ old('description') ?? $project->description }}</textarea>
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