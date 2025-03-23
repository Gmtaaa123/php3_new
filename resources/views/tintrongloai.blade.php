@extends('client')

@section('title')
    Tin trong loại {{ $idcategory }}
@endsection

@section('content')
<h1>Đây là trang tin trong loại {{ $idcategory }}</h1>
<div class="row">
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
