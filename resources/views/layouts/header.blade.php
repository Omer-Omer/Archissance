<style>
    .desktop-navbar {
        padding: 12px 150px 12px 80px !important;
    }

    .desktop-navbar .navbar-nav .nav-link {
        font-family: "Lato", sans-serif !important;
        font-size: 15px;
        padding: 10px 25px !important;
        color: black;
    }

    .desktop-navbar .nav-link.dropdown-toggle::after {
        display: none;
    }

    /* Show dropdown on hover */
    .desktop-navbar .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
        /* Optional: Adjust if you want to align it closely */
    }

    .desktop-navbar .navbar-nav .nav-link.active {
        color: red;
    }
</style>

<nav class="desktop-navbar navbar navbar-expand-lg bg-white navbar-light p-1 fixed-top d-none d-md-block">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{-- <i class="fa-solid fa-shop me-2"></i> <strong>GEAR SHOP</strong> --}}
            {{-- <img class="img-fluid" width="200px" src="{{ asset('images/logo.png') }}"> --}}
            <img class="img-fluid"
                src="https://static.wixstatic.com/media/e31381_a84249df28a041b8a777340646b5a1e5~mv2.png/v1/crop/x_0,y_0,w_1866,h_552/fill/w_238,h_66,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/archissance%20website%20logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavDropdown">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link active mx-2 text-uppercase" href="#">Home</a>
                </li>

                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        FIRM
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ url('/about') }}">About</a></li>
                        <li><a class="dropdown-item" href="{{ url('/team') }}">Team</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarProjectsDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        PROJECTS
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarProjectsDropdown">
                        <li><a class="dropdown-item" href="{{ url('/projects?type=1') }}">Residential</a></li>
                        <li><a class="dropdown-item" href="{{ url('/projects?type=3') }}">Commercial</a></li>
                        <li><a class="dropdown-item" href="{{ url('/projects?type=2') }}">Industrial</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 text-uppercase" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<nav class="navbar navbar-light bg-light d-block d-md-none">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img class="img-fluid" width="75%"
                src="https://static.wixstatic.com/media/e31381_a84249df28a041b8a777340646b5a1e5~mv2.png/v1/crop/x_0,y_0,w_1866,h_552/fill/w_238,h_66,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/archissance%20website%20logo.png">
        </a>
        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar"
            aria-controls="mobileSidebar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<style>
    .offcanvas {
        width: 100%;
        max-width: 100%;
    }

    .offcanvas-body {
        padding: 2rem;
    }

    .offcanvas-header {
        justify-content: end !important;
    }

    .offcanvas .navbar-nav .nav-link.active {
        color: red;
    }

    .offcanvas .navbar-nav .nav-link {
        padding: 20px 15px;
        color: black;
        font-family: "Lato", sans-serif !important;
        font-size: 15px;
    }

    .offcanvas .nav-link.dropdown-toggle::after {
        display: none;
    }

    /* Adjust the dropdown to show inline within the menu */
    .offcanvas #dropdownContent,
    #dropdownContent2 {
        position: static;
        box-shadow: none;
        padding-left: 20px;
        background: none;
        list-style: none;
    }

    .offcanvas .dropdown-item {
        padding: 0.5rem 1rem;
        color: black;
    }
</style>

<!-- Offcanvas Sidebar -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileSidebar" aria-labelledby="mobileSidebarLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>


            <!-- Dropdown Menu with collapse -->
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu" role="button"
                    data-bs-toggle="collapse" data-bs-target="#dropdownContent" aria-expanded="false">FIRM</a>
                <ul id="dropdownContent" class="collapse">
                    <li><a class="dropdown-item" href="{{ url('/about') }}">About</a></li>
                    <li><a class="dropdown-item" href="{{ url('/team') }}">Team</a></li>
                </ul>
            </li>
            <!-- Dropdown Menu with collapse -->
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu2" role="button"
                    data-bs-toggle="collapse" data-bs-target="#dropdownContent2" aria-expanded="false">PROJECTS</a>
                <ul id="dropdownContent2" class="collapse">
                    <li><a class="dropdown-item" href="{{ url('/projects?type=1') }}">Residential</a></li>
                    <li><a class="dropdown-item" href="{{ url('/projects?type=3') }}">Commercial</a></li>
                    <li><a class="dropdown-item" href="{{ url('/projects?type=2') }}">Industrial</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
            </li>
        </ul>
    </div>
</div>
