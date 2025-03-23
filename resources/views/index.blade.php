@extends('client')

@section('title')
    Trang chủ
@endsection

@section('content')
<h1>Đây là trang chủ</h1>
<div class="my-3 row">
    <div>
        <h3 class="text-center">TẤT CẢ TIN</h3>
    </div>
    @foreach ($news as $item)
        <div class="col-4">
            <a href="/ct/{{ $item->id }}" class="card" style="width: 18rem;">
                <img src="{{ $item->image }}" class="card-img-top" alt="">
                <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                </div>
            </a>
        </div>
    @endforeach

</div>
@endsection
