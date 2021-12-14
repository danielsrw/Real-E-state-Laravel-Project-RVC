<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin | RVC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="{{ asset('admin/images/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('admin/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/fonts/material.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}" id="main-style-link">
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="row align-items-center text-center">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h4>Real Value Corporation</h4>
                            <h4 class="mb-3 f-w-400">Sign Up</h4>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i data-feather="user"></i></span>
                                    <select name="role_id" class="form-control @error('role_id') is-invalid @enderror">
                                        <option value="none">Choose Category</option>
                                        @foreach($roles as $role)
                                            <option value="{{ $role['id'] }}">{{ $role['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('role_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i data-feather="user"></i></span>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i data-feather="user"></i></span>
                                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}">
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i data-feather="mail"></i></span>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-text"><i data-feather="lock"></i></span>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-text"><i data-feather="lock"></i></span>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                                </div>
                                <input type="hidden" name="active" value="0">
                                <button class="btn btn-block btn-primary mb-4" type="submit">Sign Up</button>
                                <p class="mb-2">
                                    Already have an account? <a href="{{ route('signin') }}" class="f-w-400">Signin</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/feather.min.js') }}"></script>
    <script src="{{ asset('admin/js/pcoded.min.js') }}"></script>
    <script>
        $("body").append('<div class="fixed-button active"><a href="/" class="btn btn-md btn-success"><i class="material-icons-two-tone text-white">home</i> Back to home</a> </div>');
    </script>
</body>
</html>
