<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: #E0FFFF; 
            font-family: Arial, sans-serif; 
            color: #333; 
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #004080; 
            text-align: center
            
        }
        h2 
        {
            font-size: 22px; 
            color: #004080; 
            
        }
        p.time {
            font-size: 22px; 
            color: #555; 
        }
        p {
            font-size: 18px; 
        }
        .intro img {
            display: block; 
            margin: 20px auto; 
            width: 600px; 
            height: auto; 
        }

    </style>

</head>
<body>
<h1><?php echo "Hello,Tmu!"; ?></h1>
<a target="_blank" href ="https://tmu.edu.vn/">Trường Đại học Thương mại</a> 
<p class="time"></p>Thời gian hiện tại là: <?php echo date('Y-m-d H:i:s'); ?></p>
<div class="intro">
        <h2>Giới thiệu về Trường Đại học Thương mại</h2>
        <p>Trường Đại học Thương mại, thành lập năm 1960, là một trong những cơ sở giáo dục hàng đầu tại Việt Nam trong lĩnh vực kinh tế, quản lý, thương mại và tài chính. Trường cung cấp các chương trình đào tạo đa dạng, từ cử nhân đến tiến sĩ, và luôn không ngừng đổi mới phương pháp giảng dạy để đáp ứng nhu cầu của nền kinh tế toàn cầu.</p>
        <p>Với sứ mệnh đào tạo nguồn nhân lực chất lượng cao, Trường Đại học Thương mại đã và đang khẳng định vị thế của mình không chỉ trong nước mà còn trên trường quốc tế. Sinh viên của trường được trang bị kiến thức vững vàng, kỹ năng chuyên môn cao, và tinh thần trách nhiệm với cộng đồng.</p>
        <img src="Ảnh 1.jpg" alt="Trường Đại học Thương mại">
    </div>    
</body>
</html>