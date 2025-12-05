<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>

    <!-- Bootstrap CDN -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

    <!-- import from public folder -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
    <!-- Background & Dashboard CSS -->
       
</head>

<body>

    <!-- ========== Sidebar ========== -->
    <div class="sidebar">
        <h4 class="text-center mb-4">📚 School ERP</h4>

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
        <hr class="bg-light">
        <a href="#"><i class="fa fa-cog"></i> Settings</a>
        <a href="#" class="text-danger"><i class="fa fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- ========== Main Content ========== -->
    <div class="content">

        <!-- 🔥 NEW NAVBAR ADDED HERE -->
        <nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
            <div class="container-fluid">

                <!-- Left Branding -->
                <a class="navbar-brand fw-bold" href="#">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png" width="35">
                    School Admin
                </a>

                <!-- Right Menu -->
                <ul class="navbar-nav ms-auto align-items-center">

                    <!-- Notification Bell -->
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">
                            <i class="fa-regular fa-bell fa-lg"></i>
                        </a>
                    </li>

                    <!-- Messages -->
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">
                            <i class="fa-regular fa-envelope fa-lg"></i>
                        </a>
                    </li>

                    <!-- User Profile Dropdown -->
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button"
                           data-bs-toggle="dropdown">

                            <img src="https://cdn-icons-png.flaticon.com/512/9131/9131529.png"
                                 width="35" class="rounded-circle me-2">
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

        <!-- Content Section -->
        <div class="card-custom shadow">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->

    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>

</body>
</html>
