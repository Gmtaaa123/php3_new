@extends('client')

@section('title', 'Tin tức theo danh mục')

@section('content')
<!-- Main Content -->
<div class="container my-5">
    <!-- Latest News -->
    <h3 class="mb-4 border-bottom pb-2">Tên danh mục</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($newsCates as $News)
            <div class="col">
                <a href="{{route('newsDetail',['id' => $News->id])}}" class="text-decoration-none">
                    <div class="card h-100 news-card">
                        <span class="badge bg-danger category-badge">NEW</span>
                        <img src="{{ $News->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $News->title }}</h5>
                            <p class="card-text">{{ $News->description_short }}...</p>
                            <div class="post-meta">
                                <small><i class="fas fa-eye"></i>{{ $News->views }} lượt xem</small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
</div>
@endsection
