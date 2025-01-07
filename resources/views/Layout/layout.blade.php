<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Events</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body>
    <nav>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="{{ route('index') }}" aria-selected="false" tabindex="-1" role="tab">Home</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="{{ route('create') }}" aria-selected="false" tabindex="-1" role="tab">Create</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="btn btn-danger" data-bs-toggle="tab" href="{{ route('logout') }}" aria-selected="false" role="tab">Logout</a>
            </li>
        </ul>
    </nav>

    @yield('content')

    {{-- <footer class="py-3 my-3 text-center text-white bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <h5>Email:Test@example.con</h5>
                    <h5>Phone : +234 802 856 458 4</h5>
                    <h5>Address : Test in a test subject, Avenue</h5>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul>
                        <li>
                            <a href="{{ route('index')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('create') }}">Create</a>
                        </li>
                        <li>
                            <a href="#">Contact-us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Follow us</h5>
                    <p>
                        <a href="#" class="btn btn-social-icon">
                            <img src="{{ asset('facebook.svg') }}" alt="facebook">
                            Facebook</a>
                        <a href="#" class="btn btn-social-icon">
                            <img src="{{ asset('instagram.svg') }}" alt="instagram">
                            Twitter</a>
                        {{-- <a href="#" class="btn btn-social-icon" width="24" height="24">
                            <img src="{{ asset('twitter.svg') }}" alt="twitter">
                        </a> --}}
                    </p>
                </div>
            </div>
        </div>
    </footer>






</body>
</html>
