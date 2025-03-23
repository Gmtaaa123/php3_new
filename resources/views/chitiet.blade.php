@extends('client')

@section('title')
    {{ $newsdetail->title }}

@endsection

@section('content')
<h1>Chi tiết tin tức</h1>  <hr>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $newsdetail->title }}</h1>
            <p class="text-muted">Đăng bởi <strong>Tác giả</strong> - Ngày đăng:  {{ $newsdetail->created_at }}</p>
            <img src="{{ $newsdetail->image }}" class="img-fluid rounded mb-4 w-100" alt="Ảnh bài viết">
            <p class="lead"> {{ $newsdetail->description_short }}</p>
            <p>{{ $newsdetail->description }}</p>
        </div>

        <!-- Sidebar: Bài viết liên quan -->
        <div class="col-lg-4">
            <h4 class="mb-3">Bài viết liên quan</h4>
            <ul class="list-group">
                <li class="list-group-item"><a href="#">Tin tức 1</a></li>
                <li class="list-group-item"><a href="#">Tin tức 2</a></li>
                <li class="list-group-item"><a href="#">Tin tức 3</a></li>
                <li class="list-group-item"><a href="#">Tin tức 4</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
