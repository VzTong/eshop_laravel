
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand active" href="{{ route('ad_home')}}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.products.index") }}">Products</a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.categories.index") }}">Categories</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.centals.index") }}">Centals</a>
                </li> --}}

                @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link text-info" href="">
                            <i class="fa-solid fa-user-tie"></i>
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("admin.account.logout") }}">
                            <i class="fa-solid fa-right-to-bracket fa-rotate-180"></i>
                             Log Out
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("admin.account.register") }}">
                            <i class="fa-solid fa-right-to-bracket"></i> Register
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("admin.account.login") }}">
                            <i class="fa-solid fa-user-large"></i> Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
