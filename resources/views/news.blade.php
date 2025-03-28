@extends('client')

@section('title', 'Trang chủ tin tức của NEWS')

@section('content')
<!-- Main Content -->
<div class="container my-5">
    <!-- Latest News -->
    <h3 class="mb-4 border-bottom pb-2">Tin mới nhất</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($NewsNews as $NewsNew)
            <div class="col">
                <a href="{{route('newsDetail',['id' => $NewsNew->id])}}" class="text-decoration-none">
                    <div class="card h-100 news-card">
                        <span class="badge bg-danger category-badge">NEW</span>
                        <img src="{{ $NewsNew->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $NewsNew->title }}</h5>
                            <p class="card-text">{{ $NewsNew->description_short }}...</p>
                            <div class="post-meta">
                                <small><i class="fas fa-eye"></i>{{ $NewsNew->views }} lượt xem</small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

        <!-- Thêm các bài viết khác tương tự -->
    </div>

    <!-- Popular News -->
    <h3 class="mt-5 mb-4 border-bottom pb-2">Tin xem nhiều</h3>
    <div class="row">
        @foreach($moreNewss as $moreNews)
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="{{route('newsDetail',['id' => $moreNews->id])}}" class="card news-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $moreNews->image }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">{{ $moreNews->title }}</h6>
                                <div class="post-meta">
                                    <small><i class="fas fa-clock"></i>{{ $moreNews->created_at }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach


    </div>
</div>
@endsection
