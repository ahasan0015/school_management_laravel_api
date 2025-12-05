@extends('admin.layout.master')

@section('title', 'Dashboard')

@section('content')

<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
</nav>

<!-- Welcome Section -->
<div class="mb-4">
    <h3 class="fw-bold">
        Welcome, {{ Auth::user()->name ?? 'Admin' }} 👋
    </h3>
    <p class="text-muted">
        School: <strong>{{ Auth::user()->school->school_name ?? 'Your School Name' }}</strong>
    </p>
</div>

<!-- Stats Row -->
<div class="row g-4 mb-4">

    <!-- Total Students -->
    <div class="col-md-3">
        <div class="quick-link-card shadow-sm">
            <i class="fa-solid fa-user-graduate"></i>
            <h5 class="mt-2">Students</h5>
            <h3 class="fw-bold">{{ $students ?? 0 }}</h3>
        </div>
    </div>

    <!-- Total Teachers -->
    <div class="col-md-3">
        <div class="quick-link-card shadow-sm">
            <i class="fa-solid fa-chalkboard-teacher"></i>
            <h5 class="mt-2">Teachers</h5>
            <h3 class="fw-bold">{{ $teachers ?? 0 }}</h3>
        </div>
    </div>

    <!-- Total Classes -->
    <div class="col-md-3">
        <div class="quick-link-card shadow-sm">
            <i class="fa-solid fa-layer-group"></i>
            <h5 class="mt-2">Classes</h5>
            <h3 class="fw-bold">{{ $classes ?? 0 }}</h3>
        </div>
    </div>

    <!-- Fees Collected -->
    <div class="col-md-3">
        <div class="quick-link-card shadow-sm">
            <i class="fa-solid fa-money-bill"></i>
            <h5 class="mt-2">Fees Collected</h5>
            <h3 class="fw-bold">৳ {{ $fees ?? 0 }}</h3>
        </div>
    </div>

</div>

<!-- Main Dashboard Sections -->
<div class="row g-4">

    <!-- Quick Links -->
    <div class="col-md-8">
        <div class="card-custom shadow-sm">
            <h5 class="fw-bold mb-3">Quick Links</h5>

            <div class="row g-3">

                <div class="col-6 col-md-4">
                    <a href="#" class="quick-link-card d-block">
                        <i class="fa-solid fa-user-plus"></i>
                        <p class="mt-2">Add Student</p>
                    </a>
                </div>

                <div class="col-6 col-md-4">
                    <a href="#" class="quick-link-card d-block">
                        <i class="fa-solid fa-users"></i>
                        <p class="mt-2">Manage Teachers</p>
                    </a>
                </div>

                <div class="col-6 col-md-4">
                    <a href="#" class="quick-link-card d-block">
                        <i class="fa-solid fa-book"></i>
                        <p class="mt-2">Subjects</p>
                    </a>
                </div>

                <div class="col-6 col-md-4">
                    <a href="#" class="quick-link-card d-block">
                        <i class="fa-solid fa-calendar-check"></i>
                        <p class="mt-2">Attendance</p>
                    </a>
                </div>

                <div class="col-6 col-md-4">
                    <a href="#" class="quick-link-card d-block">
                        <i class="fa-solid fa-file-contract"></i>
                        <p class="mt-2">Exams</p>
                    </a>
                </div>

                <div class="col-6 col-md-4">
                    <a href="#" class="quick-link-card d-block">
                        <i class="fa-solid fa-file-invoice"></i>
                        <p class="mt-2">Invoices</p>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Latest Notices -->
    <div class="col-md-4">
        <div class="card-custom shadow-sm">
            <h5 class="fw-bold mb-3">Latest Notices</h5>

            <ul class="list-group">

                @forelse($notices ?? [] as $notice)
                    <li class="list-group-item">
                        <strong>{{ $notice->title }}</strong>
                        <br>
                        <small class="text-muted">
                            {{ $notice->created_at->format('d M, Y') }}
                        </small>
                    </li>

                @empty
                    <li class="list-group-item text-muted text-center">
                        No notices available.
                    </li>
                @endforelse

            </ul>

        </div>
    </div>

</div>

@endsection
