

<!-- Modal nhập mật khẩu mới-->
<div class="modal fade" id="resetPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/user/resetpass" method="post" id="form-login" class="modal-content">
            <div class="modal-header">
                 <a class="navbar-brand" href="{{route('home')}}">NEWS24</a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-center">Set Password</h4>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mật khẩu mới</label>
                    <input type="password" class="form-control" name="mat_khau" id="exampleInputEmail1" placeholder="Mật khẩu mới" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nhập lại mật khẩu mới</label>
                    <input type="password" class="form-control" name="reEnter_mat_khau" id="exampleInputEmail1" placeholder="Xác nhận mật khẩu mới" aria-describedby="emailHelp">
                </div>


            </div>
            <div class="modal-footer d-flex justify-content-between">
                <button type="submit" class="btn btn-primary text-light">Tiếp Tục</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal forgot password-->
<div class="modal fade" id="forgotPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('user.send') }}" method="POST" id="form-login" class="modal-content">
            @csrf
            <div class="modal-header">
                 <a class="navbar-brand" href="{{route('home')}}">NEWS24</a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-center">Reset Password</h4>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Mời nhập Email" aria-describedby="emailHelp">
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-between">
                <button type="submit" class="btn btn-primary text-light">Tiếp Tục</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Đăng nhập -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="navbar-brand" href="{{route('home')}}">NEWS24</a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="modal-title text-center" id="loginModalLabel">Đăng nhập</h5>

                <form action="{{ route('user.login') }}" method="POST" id="login-form">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
                        <span class="text-danger error-email"></span>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu">
                        <span class="text-danger error-password"></span>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
                    <p class="mt-3">Bạn chưa có tài khoản? <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Đăng ký</a></p>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#forgotPassword">Quên mật khẩu?</a>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Đăng ký -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="navbar-brand" href="{{route('home')}}">NEWS24</a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="modal-title text-center" id="registerModalLabel">Đăng ký</h5>

                <form action="{{ route('user.register') }}" method="POST" id="register-form">
                    @csrf
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Họ và tên</label>
                        <input type="text" class="form-control" id="fullName" name="name"  placeholder="Nhập họ và tên">
                        <span class="text-danger error-name"></span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"  placeholder="Nhập email">
                        <span class="text-danger error-email"></span>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="password" name="password"  placeholder="Nhập mật khẩu">
                        <span class="text-danger error-password"></span>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Xác nhận mật khẩu</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Đăng ký</button>
                    <p class="mt-3">Bạn đã có tài khoản? <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Đăng nhập</a></p>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    //xử lý đăng ký
    $("#register-form").submit(function (event) {
        event.preventDefault();

        $(".text-danger").text("");
        Swal.fire({
        title: "Đang xử lý...",
        text: "Vui lòng chờ trong giây lát.",
        icon: "info",
        allowOutsideClick: false,
        showConfirmButton: false
    });
        $.ajax({
            url: "{{ route('user.register') }}",
            type: "POST",
            data: $(this).serialize(),
            success: function (response) {
                Swal.close();
                Swal.fire({
                    title: "Đăng ký thành công!",
                    text: response.success,
                    icon: "success",
                    showConfirmButton: true,
                    confirmButtonText: "OK"
                });
                $("#registerModal").modal("hide");
                $("#register-form")[0].reset();
            },
            error: function (xhr) {
                Swal.close();
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    if (errors.name) {
                        $(".error-name").text(errors.name[0]);
                    }
                    if (errors.email) {
                        $(".error-email").text(errors.email[0]);
                    }
                    if (errors.password) {
                        $(".error-password").text(errors.password[0]);
                    }
                }
            }
        });
    });




    //Xử lý đăng nhập
    $("#login-form").submit(function (event) {
        event.preventDefault();

        $(".text-danger").text("");

        $.ajax({
            url: "{{ route('user.login') }}",
            type: "POST",
            data: $(this).serialize(),
            success: function (response) {
                location.reload();
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;

                    if (errors.email) {
                        $(".error-email").text(errors.email[0]);
                    }
                    if (errors.password) {
                        $(".error-password").text(errors.password[0]);
                    }
                } else {

                    Swal.fire({
                        title: "Lỗi!",
                        text: xhr.responseJSON.error,  // Lấy lỗi từ JSON trả về
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                }
            }
        });
    });

</script>
