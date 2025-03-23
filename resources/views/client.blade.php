<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: #f8f9fa;
    }
    .profile-card {
        background: #fff;
        border-radius: 10px;
        padding: 30px;
        text-align: center;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }
    .profile-img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin-bottom: 20px;
        object-fit: cover;
        object-position: top;
    }
    .social-icons a {
        margin: 0 10px;
        font-size: 20px;
        color: #007bff;
        transition: 0.3s;
    }
    .social-icons a:hover {
        color: #0056b3;
    }
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Logo hoặc tiêu đề -->
            <a class="navbar-brand fw-bold" href="/">MyWebsite</a>

            <!-- Nút Toggle cho Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Danh mục điều hướng -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                   @php
                       use App\Models\category;
                       $categorys = category::all();
                       foreach ($categorys as $cate):
                   @endphp
                    <li class="nav-item">
                        <a class="nav-link" href="/cat/{{ $cate->id }}">{{$cate->name}}</a>
                    </li>
                   @php
                       endforeach;
                   @endphp
                </ul>

                <!-- Menu bên phải -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link  px-3" href="/thongtinsv">Thông tin về tôi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-1">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light pt-4 fixed-bottom">
        <div class="container">
            <!-- Dòng bản quyền -->
            <div class="text-center py-3 border-top mt-3">
                &copy; 2025 Website của Đào Tùng Dương.
            </div>
        </div>
    </footer>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>
</html>
