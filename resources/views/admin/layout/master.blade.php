<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'School Management System')</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">

    <style>
        /* Layout */
        body {
            background: #f5f6fa;
            transition: 0.3s;
        }
        .sidebar {
            width: 260px;
            position: fixed;
            top: 0;
            bottom: 0;
            background: #1e1f26;
            padding: 20px 15px;
            color: white;
            overflow-y: auto;
        }
        .sidebar a {
            display: block;
            padding: 10px 14px;
            color: #dcdcdc;
            font-size: 15px;
            margin-bottom: 6px;
            border-radius: 6px;
            text-decoration: none;
        }
        .sidebar a:hover, .sidebar .active {
            background: #0d6efd;
            color: white !important;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }

        /* Navbar */
        .navbar-custom {
            background: white;
            padding: 12px 20px;
            border-radius: 12px;
            margin-bottom: 15px;
        }

        /* Cards */
        .card-custom {
            background: white;
            padding: 20px;
            border-radius: 12px;
        }

        /* DARK MODE */
        .dark-mode {
            background-color: #18191e !important;
            color: #fff !important;
        }
        .dark-mode .sidebar {
            background: #111217 !important;
        }
        .dark-mode .navbar-custom {
            background: #22242b !important;
            color: #fff;
        }
        .dark-mode .card-custom {
            background: #24262f !important;
            color: #fff;
        }
        .dark-mode a {
            color: #eee !important;
        }

        /* Smooth scroll */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-thumb {
            background: #999;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <!-- ====================== SIDEBAR ====================== -->
    <div class="sidebar">
        <h4 class="text-center mb-4">📚 School ERP</h4>

        <a href="#" class="active"><i class="fa fa-home"></i> Dashboard</a>
        <a href="#"><i class="fa fa-school"></i> Schools</a>
        <a href="#"><i class="fa fa-users"></i> Users</a>
        <a href="#"><i class="fa fa-user-graduate"></i> Students</a>
        <a href="#"><i class="fa fa-chalkboard-teacher"></i> Teachers</a>
        <a href="#"><i class="fa fa-layer-group"></i> Classes</a>
        <a href="#"><i class="fa fa-list"></i> Sections</a>
        <a href="#"><i class="fa fa-book"></i> Subjects</a>
        <a href="#"><i class="fa fa-calendar-check"></i> Attendance</a>
        <a href="#"><i class="fa fa-file-contract"></i> Exams</a>
        <a href="#"><i class="fa fa-pen"></i> Exam Results</a>
        <a href="#"><i class="fa fa-money-bill"></i> Fees</a>
        <a href="#"><i class="fa fa-file-invoice"></i> Invoices</a>
        <a href="#"><i class="fa fa-credit-card"></i> Payments</a>
        <a href="#"><i class="fa fa-bullhorn"></i> Notices</a>

        <hr class="bg-secondary">
        <a href="#"><i class="fa fa-cog"></i> Settings</a>
        <a href="#" class="text-danger"><i class="fa fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- ====================== CONTENT ====================== -->
    <div class="content">

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
            <div class="container-fluid">

                <!-- School Title -->
                <span class="navbar-brand fw-bold">
                    <i class="fa fa-graduation-cap"></i>
                    {{ config('app.name', 'School Management') }}
                </span>

                <ul class="navbar-nav ms-auto align-items-center">

                    <!-- Search Box -->
                    <li class="nav-item me-3">
                        <input type="text" class="form-control form-control-sm" placeholder="Search..." style="width: 200px;">
                    </li>

                    <!-- Dark Mode -->
                    <li class="nav-item mx-2">
                        <button id="darkModeToggle" class="btn btn-sm btn-outline-secondary">
                            🌙
                        </button>
                    </li>

                    <!-- Notifications -->
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#"><i class="fa-regular fa-bell fa-lg"></i></a>
                    </li>

                    <!-- User Dropdown -->
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                            <img src="https://cdn-icons-png.flaticon.com/512/9131/9131529.png" width="35" class="rounded-circle me-2">
                            Admin
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end shadow">
                            <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- PAGE CONTENT -->
        <div class="card-custom shadow mt-3">
            @yield('content')
        </div>
    </div>

    <!-- JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>

    <script>
        // DARK MODE SYSTEM
        const toggleBtn = document.getElementById("darkModeToggle");
        const body = document.body;

        if (localStorage.getItem("darkMode") === "enabled") {
            body.classList.add("dark-mode");
        }

        toggleBtn.addEventListener("click", () => {
            body.classList.toggle("dark-mode");

            if (body.classList.contains("dark-mode")) {
                localStorage.setItem("darkMode", "enabled");
            } else {
                localStorage.setItem("darkMode", "disabled");
            }
        });
    </script>

</body>
</html>
