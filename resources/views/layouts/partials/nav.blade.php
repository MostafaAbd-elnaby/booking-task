<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar sticky-top px-4 py-2 py-lg-0">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a href="{{route('home')}}" class="navbar-brand p-0">
            <h1 class="display-6 text-dark">{{config('app.name')}}.</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{route('flights.index')}}" class="nav-item nav-link">Flights CRUD</a>
            </div>
            @auth
                <a href="#" class="btn btn-primary rounded-pill fs-6 flex-shrink-0">My Bookings</a>
                <a href="{{route('logout')}}" class="btn btn-primary rounded-pill fs-6 flex-shrink-0" style="margin-left: 5px">Logout</a>
            @else
                <a href="{{route('login')}}" class="btn btn-primary rounded-pill fs-6 flex-shrink-0">Login Or Sign Up</a>
            @endauth
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->