@extends('Layout.auth')

@section('content')
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="p-4 shadow card" style="width: 100%; max-width: 500px;">
        <h2 class="mb-4 text-center">Create an Account</h2>
        @if (session('message'))
            <p class="alert alert-success">{{ Session('message') }}</p>
        @endif
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <!-- Full Name -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
                @error('username')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Create a password" required>
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password" name="password_confirmation" placeholder="Confirm your password" required>
            </div>

            <!-- Submit Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>

        <!-- Already have an account -->
        <div class="mt-3 text-center">
            <p>Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Login</a></p>
        </div>
    </div>

@endsection
