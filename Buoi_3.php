<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ds_sinh_vien = array(
    "Nhung", "Oanh", "Phong", "Phụng","Phương","Phượng","Quang","Quyên","Quỳnh","Tâm","Thanh","Thanh","Thắng","Thắng","Thuận","Thùy","Thủy","Thủy",
"Thư", "Thương","Thức","Trang","Tuấn","Vân","Việt","Vy","Xuân",
    );
    $sinh_vien = array();
    foreach ($ds_sinh_vien as $key => $ten) {
        $sinh_vien[$key + 1] = $ten;
    }
        $random_key = array_rand($sinh_vien);
    
        $ten_sinh_vien = $sinh_vien[$random_key];
    
    echo "Mời sinh viên có số thứ tự $random_key: $ten_sinh_vien lên bảng.";

    ?>

</body>
</html>