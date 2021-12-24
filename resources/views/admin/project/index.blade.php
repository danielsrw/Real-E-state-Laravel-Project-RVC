@extends('layouts.master')

@section('content')

    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Projects</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item">Projects</li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalFullscreenAddProject">Add Project</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @include('admin.project.create')

        <div class="col-md-12">
            <div class="card">
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="100">#</th>
                                    <th width="200">Title</th>
                                    <th width="300">Image</th>
                                    <th width="100">Status</th>
                                    <th width="400">Description</th>
                                    <th width="10">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($projects as $project)
	                                <tr>
                                        <td>{{ $project->id }}</td>
	                                    <td>{{ $project->title }}</td>
	                                    <td>
                                            <img src="/storage/{{ $project->image }}" class="w-25">   
                                        </td>
	                                    <td>
                                            <?php if ($project->status == 'On Going'): ?>
                                                <button type="submit" class="badge bg-warning border-0">On Going</button>
                                            <?php else : ?>
                                                <button type="submit" class="badge bg-success border-0">Complete</button>
                                            <?php endif ?>
                                        </td>
	                                    <td>
                                            {{ Str::limit($project->description, 40) }}

                                        </td>
	                                    <td>
                                            <input type="hidden" name="id" value="{{ $project->id }}">
                                            <button type="button" class="border-0 bg-white" data-toggle="modal" data-target="#editProjectModal{{ $project->id }}">
                                                <i class="icon feather icon-edit f-16 text-success"></i>
                                            </button>
                                            <button type="button" class="border-0 bg-white" data-toggle="modal" data-target="#deleteProject{{ $project->id }}" data-whatever="@mdo">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
	                                    </td>
                                	</tr>
                                    @include('admin.project.edit')

                                    @include('admin.project.delete')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection