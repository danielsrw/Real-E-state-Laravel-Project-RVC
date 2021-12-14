@extends('layouts.master')

@section('content')

    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <div class="page-header-title">
                        <h5 class="m-b-10"> Edit Projects</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item">Projects</li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalFullscreenAddProject">Edit Project</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
            	<div class="card-body">
            		<form method="POST" action="/admin/project/{{ $project->id }}/update" enctype="multipart/form-data">
		                @csrf
		                @method('PATCH')

		                <div class="row">
		                    <div class="form-group col-md-4">
		                        <label class="form-label" for="inputTitle4">Title</label>
		                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="inputTitle4" value="{{ old('title') ?? $project->title }}">
		                        @error('title')
		                            <span class="invalid-feedback" role="alert">
		                                <strong>{{ $message }}</strong>
		                            </span>
		                        @enderror
		                    </div>
		                    <div class="form-group col-md-4">
		                        <label class="form-label @error('status') is-invalid @enderror" for="inputStatus4">Status</label>
		                        <select class="form-control @error('status') is-invalid @enderror" name="status">
		                            <option value="On Going">On Going</option>
		                            <option value="Complete">Complete</option>
		                        </select>
		                        @error('status')
		                            <span class="invalid-feedback" role="alert">
		                                <strong>{{ $message }}</strong>
		                            </span>
		                        @enderror
		                    </div>
		                    <div class="form-group col-md-4">
		                        <label class="form-label" for="inputImage4">Image</label>
		                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="inputImage4" value="{{ old('id') ?? $project->image }}" disabled>
		                        @error('image')
		                            <span class="invalid-feedback" role="alert">
		                                <strong>{{ $message }}</strong>
		                            </span>
		                        @enderror
		                    </div>
		                    <div class="form-group col-md-12">
		                        <label class="form-label" for="inputDescription4">Description</label>
		                        <textarea rows="5" name="description" class="form-control" placeholder="Enter Description">{{ old('id') ?? $project->description }}</textarea>
		                        @error('description')
		                            <span class="invalid-feedback" role="alert">
		                                <strong>{{ $message }}</strong>
		                            </span>
		                        @enderror
		                    </div>
		                </div>
		                <input type="hidden" name="image" value="/storage/{{ $project->image }}">
		                <button type="submit" class="btn btn-sm btn-primary w-100">Submit</button>
		            </form>
            	</div>
            </div>
        </div>
    </div>

@endsection