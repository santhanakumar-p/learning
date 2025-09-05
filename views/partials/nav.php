<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/LEARNING/">🔥 Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="/LEARNING/" onclick="loadPage('index')">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/LEARNING/about" onclick="loadPage('about')">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/LEARNING/notes" onclick="loadPage('notes')">Notes</a></li>
                <li class="nav-item"><a class="nav-link" href="/LEARNING/contact" onclick="loadPage('contact')">Contact</a></li>
            </ul>

            <!-- Right side -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                <li class="nav-item me-3">
                    <button class="btn btn-dark position-relative">
                        <i class="bi bi-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                    </button>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown">
                        <img src="https://ui-avatars.com/api/?name=SK" width="32" height="32" class="rounded-circle me-2" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Your Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>