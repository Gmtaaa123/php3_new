@extends('client')

@section('title', 'Trang chủ tin tức của NEWS')

@section('content')
<div class="container account-container d-flex">
    <!-- Sidebar -->
    <div class="col-md-4 sidebar">
        <div class="text-center mb-3">
            <img src="{{ asset('img/phong.jpg') }}" alt="Avatar" class="avatar">
            <h5 class="mt-2">{{ $user->name }}</h5>
        </div>
        <a href="#" class="menu-item active" data-target="#profile">Thông tin cá nhân</a>
        <a href="#" class="menu-item" data-target="#password">Đổi mật khẩu</a>
        <a href="{{ route('logout') }}">Đăng xuất</a>
    </div>

    <!-- Content -->
    <div class="col-md-8 p-3">
        <div id="profile" class="content active">
            <h3>Thông tin cá nhân</h3>
            <p>Họ Tên: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>

        </div>
        <div id="password" class="content">
            <h3>Đổi mật khẩu</h3>
            <form>
                <div class="mb-3">
                    <label>Mật khẩu cũ</label>
                    <input type="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Mật khẩu mới</label>
                    <input type="password" class="form-control">
                </div>
                <button class="btn btn-primary">Cập nhật</button>
            </form>
        </div>

    </div>
</div>
<script>


//my account
$(document).ready(function() {
    $(".menu-item").click(function(e) {
        e.preventDefault();
        $(".menu-item").removeClass("active");
        $(this).addClass("active");
        $(".content").removeClass("active");
        $($(this).data("target")).addClass("active");
    });
});

</script>
@endsection
