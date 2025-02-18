<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img class="img-fluid" src="{{ asset('img/logo.png') }}" alt="IAS " width="100" height="50"></a>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Dashboard Links -->
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.contact') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.profile') }}">Profile</a></li>

                <!-- Services Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{ route('dashboard.services') }}">All Services</a></li>
                        <li><a class="dropdown-item" href="{{ route('dashboard.services.web') }}">Web Development</a></li>
                        <li><a class="dropdown-item" href="{{ route('dashboard.services.graphic-design') }}">Graphic Design</a></li>
                        <li><a class="dropdown-item" href="{{ route('dashboard.services.seo') }}">SEO Optimization</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://www.w3schools.com/w3images/avatar2.png" alt="Profile" class="rounded-circle" width="30" height="30">
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                <li><a class="dropdown-item" href="{{ route('dashboard.profile') }}">Profile</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</nav>
