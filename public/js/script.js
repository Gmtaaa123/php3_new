
document.addEventListener('DOMContentLoaded', function () {
    const searchToggle = document.getElementById('search-toggle');
    const searchForm = document.getElementById('search-form');

    searchToggle.addEventListener('click', function (event) {
        event.stopPropagation();
        searchForm.classList.toggle('show');
    });

    // Ẩn form khi click ra ngoài
    document.addEventListener('click', function (event) {
        if (!searchForm.contains(event.target) && event.target !== searchToggle) {
            searchForm.classList.remove('show');
        }
    });
});

document.getElementById('openRegisterModal').addEventListener('click', function (event) {
    event.preventDefault();
    var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
    var registerModal = new bootstrap.Modal(document.getElementById('registerModal'));

    loginModal.hide(); // Ẩn modal đăng nhập
    registerModal.show(); // Hiển thị modal đăng ký
});

