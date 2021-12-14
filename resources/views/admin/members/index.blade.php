@extends('layouts.master')

@section('content')

    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Members</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item">Members</li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Role</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Role</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="{{ route('adminRoleStore') }}">
                                @csrf
                                
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="role-name" class="col-form-label">Role Name</label>
                                        <input type="text" name='name' class="form-control" id="role-name">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
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
                        <table class="table text-center">
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
                                            <?php if ($member->active == 1): ?>
                                                <button type="submit" class="badge bg-success border-0">On</button>
                                            <?php else: ?>
                                                <button type="submit" class="badge bg-danger border-0">Off</button>
                                            <?php endif ?>
                                        </td>
                                        <td>
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