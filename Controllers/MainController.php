<?php
// định nghĩa hàm cha để tự động nạp header, footer tương ứng với vai trò
// tạo sau khi làm tính năng đăng nhập sau
// cần tách sang file maincontroller để đặt hàm call chung ko sẽ lỗi, và include các file control vào đó.
// xong thì include file maincontroller vào index.php

function View($hamCall)
{
    include "./Views/admin/layouts/header.php";

    $hamCall;
    // bên ngoài sẽ chạy View cùng callback;
    // bên dưới xóa các include ko cần thiết

    include "./Views/admin/layouts/footer.php";
}


function homeUserController(){
    include "./Views/user/layouts/header.php";

    include "./Views/user/home.php";
    include "./Views/user/layouts/footer.php";
}