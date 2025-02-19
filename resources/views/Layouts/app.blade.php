<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #1E1E1E; /* Black background */
            color: #fff; /* White text for readability */
        }
        .container {
            background-color: #1E1E1E; /* Dark gray for content area */
            padding: 20px;
            border-radius: 8px;
        }
        a {
            color: #0d6efd; /* Bootstrap primary blue for links */
        }
        a:hover {
            color: #0a58ca;
        }
    </style>

    <!-- Stack for page-specific styles -->
    @stack('styles')
</head>
<body>

    @hasSection('showNavbar')
        @include('layout.navbar')
    @endif

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Stack for page-specific scripts -->
    @stack('scripts')

</body>
</html>
