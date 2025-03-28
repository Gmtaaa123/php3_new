<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-nav">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">NEWS24</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('home')}}">Trang chủ</a>
                </li>
                <?php use App\Models\category; $categories = category::all(); ?>
                @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('newsCate', ['id' => $category->id]) }}">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="dropdown">
                <button class="btn btn-outline-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-search"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end px-1" style="min-width: 250px;">
                    <form class="d-flex" id="search-form">
                        <input class="form-control me-1" type="search" placeholder="Tìm kiếm" aria-label="Search">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            @if (Session::has('user_id'))
                <a href="{{ route('user.account') }}">
                    <button class="btn btn-outline-light ms-2">
                        {{ session('user_name') }}
                    </button>
                </a>
            @else
                <!-- Nút đăng nhập -->
                <button class="btn btn-outline-light ms-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Đăng nhập
                </button>
            @endif


        </div>
    </div>
</nav>
@extends('modal')

<!-- Main Content -->
@yield('content')

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; 2025 NEWS24. Lê Anh Phong</p>
            </div>
            <div class="col-md-6 text-end">
                <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
@if (session('show_modal'))
    <script>
        var modal = new bootstrap.Modal(document.getElementById("{{ session('show_modal') }}"));
        modal.show();
    </script>
@endif
@if (session('success'))
    <script>
        Swal.fire({
            title: "Thành công!",
            text: "{{ session('success') }}",
            icon: "success",
            timer: 3000,  // Thông báo tự động đóng sau 3 giây
            showConfirmButton: true
        });
    </script>
@endif
@if (session('error'))
    <script>
        Swal.fire({
            title: "Lỗi!",
            text: "{{ session('error') }}",
            icon: "error",
            timer: 3000,
            showConfirmButton: true
        });
    </script>
@endif
</html>

