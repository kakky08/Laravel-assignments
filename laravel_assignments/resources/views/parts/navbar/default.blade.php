{{-- nav start --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light ps-3 pe-3">
    <div class="container-fluid">
    <p><a class="navbar-brand" href="">Navbar</a></p>
        <div class="collapse navbar-collapse justify-content-end">
            <div class="navbar-nav">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <input type="submit" class="dropdown-item" value="Logout">
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
{{-- nav end --}}
