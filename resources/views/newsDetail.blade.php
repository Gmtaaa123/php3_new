@extends('client')

@section('title', $newsDetail->title)

@section('content')
    <!-- Main Content -->
    <div class="container my-5">
        <div class="row">
            <!-- Chi tiết bài viết -->
            <div class="col-md-8">
                <article class="news-detail">
                    <h2 class="mb-4">{{$newsDetail->title}}</h2>
                    <div class="author-info">

                        <div>
                            <p>
                                {{$newsDetail->description_short}}
                            </p>
                            <small class="text-muted">{{$newsDetail->created_at}}</small>
                        </div>
                    </div>
                    <img src="{{$newsDetail->image}}" class="img-fluid w-100 mb-4" alt="Tiêu đề bài viết">
                    <div class="content">

                        <p>
                            {{$newsDetail->description}}
                    </div>
                </article>
            </div>

            <!-- Bài viết liên quan -->
            <div class="col-md-4">
                <h3 class="mb-4">Bài viết liên quan</h3>
                <div class="card mb-3">
                    <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Bài viết liên quan 1">
                    <div class="card-body">
                        <h5 class="card-title">Tiêu đề bài viết liên quan 1</h5>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Bài viết liên quan 2">
                    <div class="card-body">
                        <h5 class="card-title">Tiêu đề bài viết liên quan 2</h5>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Bài viết liên quan 3">
                    <div class="card-body">
                        <h5 class="card-title">Tiêu đề bài viết liên quan 3</h5>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
