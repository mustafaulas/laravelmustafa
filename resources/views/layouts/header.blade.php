<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2">Hakkımda</a></li>
            <li><a href="#" class="nav-link px-2">İletişim</a></li>
        </ul>

        <div class="col-md-3 text-end">


            @if(isset(Auth::user()->id))
                Merhaba {{ Auth::user()->name }}
                <a href="{{ route("admin.home") }}" class="btn btn-outline-primary me-2">Admin</a>
            @else
            <a type="button" class="btn btn-outline-primary me-2" href="{{ route("login") }}">Login</a>
            <a type="button" class="btn btn-outline-primary me-2" href="{{ route("register") }}">Register</a>
            @endif
        </div>
    </header>
</div>
