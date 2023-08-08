@extends('layout.guest')

@section('title', 'Login')

@section('content')
    <div class="card smooth-shadow-md">
        <!-- Card body -->
        <div class="card-body p-6">
            <div class="mb-4">
                <a href="#">
                    <img src="{{ asset('assets/images/brand/logo/logo-primary.svg') }}" class="mb-2" alt="">
                </a>
                <p class="mb-6">Please enter your user information.</p>
            </div>
            <!-- Form -->
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <!-- Username -->
                <div class="mb-3">
                    <label for="email" class="form-label">Username or email</label>
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" placeholder="Email address here" required="">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" name="password" placeholder="**************"
                        required="">
                </div>
                <!-- Checkbox -->
                <div class="d-lg-flex justify-content-between align-items-center mb-4">
                    <div class="form-check custom-checkbox">
                        <input type="checkbox" class="form-check-input" id="rememberme" name="remember"
                            value="{{ true }}">
                        <label class="form-check-label" for="rememberme">Remember
                            me</label>
                    </div>
                </div>
                <div>
                    <!-- Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>

                    <div class="d-md-flex justify-content-between mt-4">
                        <div class="mb-2 mb-md-0">
                            <a href="{{ route('registerView') }}" class="fs-5">Create An
                                Account </a>
                        </div>
                        <div>
                            <a href="#" class="text-inherit fs-5">Forgot your password?</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
