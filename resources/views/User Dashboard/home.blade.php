@extends('app')

@section('title', 'Home')

@section('content')

<section class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content text-center">
        <h1 class="display-4 fw-bold">Welcome to Our Modern Site</h1>
        <p class="lead">Innovate, Create, and Inspire</p>

        <a href="#" class="btn btn-primary btn-lg">Get Started</a>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>    </div>
</section>

<section class="container text-center features py-5">
    <div class="row">
        <div class="col-md-4">
            <div class="feature">
                <i class="feature-icon bi bi-lightning-charge-fill"></i>
                <h3>Fast Performance</h3>
                <p>Optimized for speed and efficiency.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature">
                <i class="feature-icon bi bi-shield-lock-fill"></i>
                <h3>Secure</h3>
                <p>Advanced security measures for protection.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature">
                <i class="feature-icon bi bi-gear-wide-connected"></i>
                <h3>Smart Integration</h3>
                <p>Seamlessly connects with your tools.</p>
            </div>
        </div>
    </div>
</section>

{{-- <section class="container text-center py-5">
    <h1 class="fw-bold">Member Lists</h1>
    <p>You are logged in as <strong>{{ session('user_role') }}</strong>.</p>

        <!-- Handle user roles using switch -->
    @switch(session('user_role'))
    @case('admin')
        <p>Welcome, Admin! You have full access to the dashboard.</p>
        @break

    @case('member')
        <p>Welcome, Member! You can manage content and view reports.</p>
        @break

    @default
        <p>Welcome, User! Please contact support if you have any questions.</p>
@endswitch

        <!-- For Each-->
        <h2 class="mt-4">For Each - Normal List</h2>
        <ul class="list-group">
            @foreach ($members as $member)
                <li class="list-group-item">{{ $member }}</li>
            @endforeach
        </ul>

        <!-- For Loop-->
        <h2 class="mt-4">For Loop - Numbered List</h2>
        <ul class="list-group">
            @for ($i = 0; $i < count($members); $i++)
                <li class="list-group-item">Member {{ $i + 1 }}: {{ $members[$i] }}</li>
            @endfor
        </ul>

 <!-- For Else -->
<h2 class="mt-4">For Else - Alphabetical Order</h2>
<ul class="list-group">
    @php
        sort($members);
    @endphp

    @forelse ($members as $index => $member)
        @if ($index == 0)
            <li class="list-group-item list-group-item-primary">{{ $member }}</li>
        @else
            <li class="list-group-item">{{ $member }}</li>
        @endif
    @empty
        <li class="list-group-item text-muted">No registered members found.</li>
    @endforelse
</ul> --}}



</section>

@endsection
