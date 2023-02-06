@if (Illuminate\Support\Facades\Auth::check() && Illuminate\Support\Facades\Auth::user()->role == 'Admin')
    <nav class="navbar bg-success">

        <div class="container-fluid justify-content-center">
            <span class="navbar-brand mt-3 h1 text-white">Amazing E-Grocery</span>

        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <a class="nav-link active ms-3" aria-current="page" href="/dashboard">@lang('public.home')</a>
                    <a class="nav-link active ms-3" aria-current="page" href="/cart">@lang('public.cart')</a>
                    <a class="nav-link active ms-3" aria-current="page" href="/profile"">@lang('public.profile')</a>
                    <a class="nav-link active ms-3" aria-current="page" href="/maintenance">@lang('public.maintenance')</a>
                    <li class="nav-item dropdown ms-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            @lang('public.language')
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="locale/id">Indonesia</a></li>
                            <li><a class="dropdown-item" href="locale/en">English</a></li>

                        </ul>
                    </li>
                </ul>

                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link active ms-auto mt-3 bg-warning"
                        aria-current="page">@lang('public.logout')</button>
                </form>

            </div>

        </div>

    </nav>
@elseif(Illuminate\Support\Facades\Auth::check() && Illuminate\Support\Facades\Auth::user()->role == 'User')
    <nav class="navbar bg-success">

        <div class="container-fluid justify-content-center">
            <span class="navbar-brand mt-3 h1 text-white">Amazing E-Grocery</span>

        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <a class="nav-link active ms-3" aria-current="page" href="/dashboard">@lang('public.home')</a>
                    <a class="nav-link active ms-3" aria-current="page" href="/cart">@lang('public.cart')</a>
                    <a class="nav-link active ms-3" aria-current="page" href="/profile"">@lang('public.profile')</a>
                    <li class="nav-item dropdown ms-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            @lang('public.language')
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="locale/id">Indonesia</a></li>
                            <li><a class="dropdown-item" href="locale/en">English</a></li>

                        </ul>
                    </li>

                </ul>

                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link active ms-auto mt-3 bg-warning"
                        aria-current="page">@lang('public.logout')</button>
                </form>

            </div>

        </div>

    </nav>
@else
    <nav class="navbar bg-success">
        <div class="container-fluid justify-content-center">
            <span class="navbar-brand mt-3 h1 text-white">Amazing E-Grocery</span>

        </div>

        <div class="container-fluid justify-content-end">
            <a href="/login" class="nav-link ms-3 bg-warning">Login</a>
            <a href="/register" class="nav-link ms-3 bg-warning">Register</a>
        </div>
    </nav>
@endif
