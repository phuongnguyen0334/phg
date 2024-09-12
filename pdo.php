<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>
<?php
// Thông tin kết nối cơ sở dữ liệu
$host = 'localhost';
$dbname = 'melodyj';
$username = 'root';
$password = '';

try {
    // Kết nối với cơ sở dữ liệu sử dụng PDO
    $dbh = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Thiết lập chế độ lỗi của PDO
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Câu lệnh SQL để thêm dữ liệu vào bảng
    $sql = "INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country)
            VALUES (:full_names, :gender, :contact_no, :email, :city, :country)";
    
    // Chuẩn bị câu truy vấn
    $stmt = $dbh->prepare($sql);
    
    // Dữ liệu để thêm vào bảng
    $data = [
        ':full_names' => 'John Doe',
        ':gender' => 'Male',
        ':contact_no' => '1234567890',
        ':email' => 'john@example.com',
        ':city' => 'Hanoi',
        ':country' => 'Vietnam'
    ];
    
    // Thực thi câu lệnh với dữ liệu
    if ($stmt->execute($data)) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record";
    }
    
} catch (PDOException $e) {
    // Bắt lỗi nếu có vấn đề với cơ sở dữ liệu
    echo "Error: " . $e->getMessage();
}

//Sử dụng PDO cập nhật dữ liệu vào bảng

try {
    // Câu lệnh SQL để cập nhật dữ liệu trong bảng
    $sql = "UPDATE my_contacts 
            SET full_names = :full_names, 
                gender = :gender, 
                contact_no = :contact_no, 
                email = :email, 
                city = :city, 
                country = :country 
            WHERE id = :id";

    // Chuẩn bị câu truy vấn
    $stmt = $dbh->prepare($sql);

    // Dữ liệu để cập nhật vào bảng
    $data = [
        ':full_names' => 'Jane Doe',
        ':gender' => 'Female',
        ':contact_no' => '0987654321',
        ':email' => 'jane@example.com',
        ':city' => 'Ho Chi Minh City',
        ':country' => 'Vietnam',
        ':id' => 10 // ID của bản ghi cần cập nhật
    ];

    // Thực thi câu lệnh với dữ liệu
    $stmt->execute($data);

    // Kiểm tra số lượng bản ghi bị ảnh hưởng
    if ($stmt->rowCount() > 0) {
        echo "Record updated successfully";
    } else {
        echo "No record updated";
    }

} catch (PDOException $e) {
    // Bắt lỗi nếu có vấn đề với cơ sở dữ liệu
    echo "Error: " . $e->getMessage();
}
//Xoá dữ liệu ở bảng sử dụng PDO


try {
    // Câu lệnh SQL để xóa dữ liệu trong bảng
    $sql = "DELETE FROM my_contacts WHERE id = :id";

    // Chuẩn bị câu truy vấn
    $stmt = $dbh->prepare($sql);

    // ID của bản ghi cần xóa
    $id = 12; 

    // Dữ liệu để xóa bản ghi
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Thực thi câu lệnh
    $stmt->execute();

    // Kiểm tra số lượng bản ghi bị ảnh hưởng
    if ($stmt->rowCount() > 0) {
        echo "Record deleted successfully";
    } else {
        echo "No record found with ID = $id";
    }

} catch (PDOException $e) {
    // Bắt lỗi nếu có vấn đề với cơ sở dữ liệu
    echo "Error: " . $e->getMessage();
}

//Hiển thị dữ liệu sử dụng PDO  
// Thông tin kết nối cơ sở dữ liệu
$host = 'localhost';
$dbname = 'melodyj';
$username = 'root';
$password = '';

try {
    // Kết nối tới cơ sở dữ liệu sử dụng PDO
    $dbh = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Thiết lập chế độ lỗi của PDO để báo lỗi dạng exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Câu lệnh SQL để truy vấn dữ liệu
    $sql = "SELECT * FROM my_contacts";

    // Chuẩn bị câu truy vấn
    $stmt = $dbh->prepare($sql);

    // Thực thi câu lệnh
    $stmt->execute();

    // Lấy tất cả các bản ghi và hiển thị
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($results) {
        foreach ($results as $row) {
            echo 'ID: ' . htmlspecialchars($row['id']) . '<br>';
            echo 'Full Names: ' . htmlspecialchars($row['full_names']) . '<br>';
            echo 'Gender: ' . htmlspecialchars($row['gender']) . '<br>';
            echo 'Contact No: ' . htmlspecialchars($row['contact_no']) . '<br>';
            echo 'Email: ' . htmlspecialchars($row['email']) . '<br>';
            echo 'City: ' . htmlspecialchars($row['city']) . '<br>';
            echo 'Country: ' . htmlspecialchars($row['country']) . '<br><br>';
        }
    } else {
        echo 'No records found.';
    }

} catch (PDOException $e) {
    // Bắt lỗi nếu có vấn đề với cơ sở dữ liệu
    echo "Error: " . $e->getMessage();
}

// Đóng kết nối
$dbh = null;
?>

</body>
</html>
