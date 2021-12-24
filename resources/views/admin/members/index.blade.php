@extends('layouts.master')

@section('content')

    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Members</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item">Members</li>
                    </ul>
                </div>
                <div class="col-md-3 justify-content-between">
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Role</button>
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#showRole" data-whatever="@mdo">View Roles</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @include('admin.members.create')
        
        @include('admin.members.show')

        <div class="col-md-12">
            <div class="card">
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Role</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>On/Off</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($members as $member)
                                    <tr>
                                        <td>{{ $member->id }}</td>
                                        <td>{{ $member->role->name }}</td>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->email }}</td>
                                        <td>
                                            <input type="hidden" name="active" value="{{ $member->active }}">
                                            <a href="{{ route('adminEnableMember', $member->id) }}">
                                                <?php if ($member->active == 1): ?>
                                                <button type="submit" class="badge bg-success border-0">
                                                    Approved
                                                </button>
                                            </a>
                                                <?php else: ?>
                                            <a href="{{ route('adminDisableMember', $member->id) }}">
                                                    <button type="submit" class="badge bg-danger border-0">
                                                        Rejected
                                                    </button>
                                                <?php endif ?>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('adminDeleteMember', $member->id) }}">
                                                <input type="hidden" name="id" value="{{ $member->id }}">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger" data-toggle="modal" data-target="#deleteMember{{ $member->id }}" data-whatever="@mdo"></i>
                                            </a>

                                            @include('admin.members.delete')
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

    <script>
        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var role = button.data('whatever')
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + role)
            modal.find('.modal-body input').val(role)
        })
    </script>

@endsection