@extends('layouts.app')

@section('title')
Register
@endsection

@section('content')
    @section('banner')
    @stop

    <div class="container-fluid d-flex align-items-center justify-content-center min-vh-100" style="background-color: #1E1E1E;">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col col-sm col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-white d-flex align-items-center justify-content-between py-4">
                        <h4 class="m-0">Sign Up</h4>
                        <img class="img-fluid" src="{{ asset('img/logo-icon.png') }}" alt="Logo" width="80" height="80">
                    </div>
                    <div class="card-body p-5">
                        <form action="{{ route('store') }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="form-label text-muted">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Enter Full Name">
                                </div>
                                @if ($errors->has('name'))
                                    <span class="text-danger small">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label text-muted">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                                </div>
                                @if ($errors->has('email'))
                                    <span class="text-danger small">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label text-muted">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter Password">
                                </div>
                                @if ($errors->has('password'))
                                    <span class="text-danger small">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label text-muted">Confirm Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="d-grid gap-2 mb-4">
                                <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                            </div>
                            <div class="text-center">
                                <p class="text-muted mb-0">Already have an account? <a href="{{ route('login') }}" class="text-primary">Sign In</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
