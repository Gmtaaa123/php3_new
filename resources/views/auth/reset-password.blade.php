@extends('client')

@section('content')
<div class="container d-flex justify-content-center mb-5">
    <div class="col-lg-6 my-5">
        <h2 class="text-center">Đặt lại mật khẩu</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ request()->route('token') }}">
            <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="password">Mật khẩu mới:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="password_confirmation">Xác nhận mật khẩu:</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Đặt lại mật khẩu</button>
        </form>
    </div>
</div>
@endsection
