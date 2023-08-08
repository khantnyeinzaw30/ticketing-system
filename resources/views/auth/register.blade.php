@extends('layout.guest')

@section('title', 'Register')

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
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <!-- Username -->
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" id="firstname" class="form-control @error('first_name') is-invalid @enderror"
                            name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
                        @error('first_name')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" id="lastname" class="form-control @error('last_name') is-invalid @enderror"
                            name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
                        @error('last_name')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" class="form-control @error('username') is-invalid @enderror"
                        name="username" placeholder="Username" value="{{ old('username') }}">
                    @error('username')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="row mb-3">
                    <!-- Email -->
                    <div class="col-sm-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" placeholder="Email address here" value="{{ old('email') }}">
                        @error('email')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label for="phone" class="form-label">Phone (Optional) </label>
                        <input type="number" id="phone" class="form-control @error('phone') is-invalid @enderror"
                            name="phone" placeholder="Phone number here" value="{{ old('phone') }}">
                        @error('phone')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" placeholder="**************">
                    @error('password')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <!-- Password Confirmation -->
                <div class="mb-3">
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                    <input type="password" id="confirm-password"
                        class="form-control @error('password_confirmation') is-invalid @enderror"
                        name="password_confirmation" placeholder="**************">
                </div>
                <div class="d-lg-flex justify-content-between align-items-center mb-2">
                    <div class="form-check custom-checkbox">
                        <input type="checkbox" name="is_agent" id="user-role" class="form-check-input"
                            value="{{ true }}">
                        <label for="user-role" class="form-check-label">Signed up as agent</label>
                    </div>
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
                        <button type="submit" class="btn btn-primary">
                            Create Account
                        </button>
                    </div>
                    <div class="d-md-flex justify-content-between mt-4">
                        <div class="mb-2 mb-md-0">
                            <a href="{{ route('loginView') }}" class="fs-5">Already member? Login </a>
                        </div>
                        <div>
                            <a href="#" class="text-inherit fs-5">
                                Forgot your password?
                            </a>
                        </div>

                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
