<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}" />

    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>@yield('title')</title>
</head>

<body class="bg-light">
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="nav-scroller">
                <!-- Brand logo -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/brand/logo/logo.svg') }}" alt="" />
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <li class="nav-item">
                        <a class="nav-link has-arrow" href="{{ url('/') }}">
                            <i class="fa-solid fa-house nav-icon icon-xs me-3"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-arrow" href="{{ route('tickets.index') }}">
                            <i class="fa-solid fa-ticket nav-icon icon-xs me-3"></i>
                            Tickets
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-arrow" href="{{ route('users.index') }}">
                            <i class="fa-solid fa-user nav-icon icon-xs me-3"></i>
                            Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-arrow" href="{{ url('/') }}">
                            <i class="fa-solid fa-clipboard-list nav-icon icon-xs me-3"></i>
                            Ticket Logs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-arrow" href="{{ route('categories.index') }}">
                            <i class="fa-solid fa-book-open nav-icon icon-xs me-3"></i>
                            Categories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-arrow" href="{{ route('labels.index') }}">
                            <i class="fa-solid fa-tag nav-icon icon-xs me-3"></i>
                            Labels
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post" class="d-inline nav-link">
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Page content -->
        <div id="page-content">
            <div class="container-fluid px-6">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
