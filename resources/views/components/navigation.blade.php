<nav class="navbar navbar-expand-lg container-fluid shadow sticky-top bg-light">
    <div class="container">
        <a class="navbar-brand fs-3 fw-bold" href="/">CARENTAL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="/car">Available car</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex flex-wrap gap-4">
                <div class="d-flex position-relative align-items-center">
                    <input class="form-control pe-4" type="search" placeholder="Search" aria-label="Search" />
                    <i onclick="search()" id="search" class="bi bi-search position-absolute end-0 btn"></i>
                </div>
                <a href="{{url('/user-login')}}" class="btn btn-success text-dark m-auto">Login</a>
            </div>
        </div>
    </div>
</nav>

<script>
    function search() {
        alert('search');
    }
</script>