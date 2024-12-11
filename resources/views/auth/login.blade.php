@extends('Layout.auth')

@section('content')
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="p-4 shadow card" style="width: 100%; max-width: 400px;">
        <h2 class="mb-4 text-center">Login</h2>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="text" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
            </div>

            <!-- Password Input -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <!-- Submit Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>

        <!-- Links -->
        <div class="mt-3 text-center">
            <a href="#" class="text-decoration-none">Forgot your password?</a><br>
            <a href="{{ route('register') }}" class="text-decoration-none">Create an account</a>
        </div>
    </div>>
@endsection
