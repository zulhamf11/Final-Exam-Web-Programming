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
                    <a class="nav-link active ms-3" aria-current="page" href="/dashboard">Home</a>
                    <a class="nav-link active ms-3" aria-current="page" href="#">Cart</a>
                    <a class="nav-link active ms-3" aria-current="page" href="/profile"">Profile</a>
                    <a class="nav-link active ms-3" aria-current="page" href="/maintenance">Account Maintenance</a>

                </ul>

                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link active ms-auto mt-3 bg-warning"
                        aria-current="page">Logout</button>
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
                    <a class="nav-link active ms-3" aria-current="page" href="/dashboard">Home</a>
                    <a class="nav-link active ms-3" aria-current="page" href="#">Cart</a>
                    <a class="nav-link active ms-3" aria-current="page" href="/profile"">Profile</a>


                </ul>

                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link active ms-auto mt-3 bg-warning"
                        aria-current="page">Logout</button>
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
