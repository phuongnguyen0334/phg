<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTVN</title>
</head>
    <?php
    $chuoi = "Truong Dai Hoc Thuong Mai";
   
    
    echo "1. Số ký tự trong chuỗi là:". strlen($chuoi) ."<br>";
    echo "2. Số từ trong chuỗi là: " . str_word_count($chuoi) . "<br>";
    echo "3. Chuỗi đảo ngược là: " .  strrev($chuoi) . "<br>";
    echo "4. Tìm kiếm một chuỗi con là: " . strpos("$chuoi","Dai") ."<br>";
    echo "5. Thay thế một chuỗi con trong một chuỗi là: " . str_replace("Dai","DAI","$chuoi") ."<br>";
    echo "7. Chuỗi sau khi chuyển đổi thành chữ hoa là: " . strtoupper("$chuoi") . "<br>";
    echo "8. Chuỗi sau khi chuyển thành chữ thường là: " .strtolower($chuoi) . "<br>";
    echo "9. Chuỗi sau khi in hoa chữ cái đầu tiên của mỗi từ là: " .ucwords($chuoi). "<br>";
    echo "10. Chuỗi sau khi loại bỏ khoảng trắng ở đầu và cuối là: " .trim($chuoi). "<br>";
    echo "11. Chuỗi sau khi loại bỏ ký tự đầu tiên là: ". ltrim($chuoi,'T'). "<br>";
    echo "12. Chuỗi sau khi loại bỏ ký tự cuối cùng là: ". rtrim($chuoi, 'i'). "<br>";
    echo "13. Tách một chuỗi thành một mảng các phần tử là: " . implode(", ", explode(" ", $chuoi)). "<br>";
    
    //14
    $mang = array("Truong", "Dai", "Hoc", "Thuong", "Mai");
    $chuoi = implode(" - ", $mang);
    echo "14. Chuỗi sau khi nối các phần tử của mảng là: " . $chuoi. "<br>";
    
    //15
    $originalString = "Trường Đại Học Thương Mại";
    $length = 50; 
    $paddingChar = "*";
    $paddedRight = str_pad($originalString, $length, $paddingChar, STR_PAD_RIGHT);
    echo "15. Chuỗi sau khi thêm vào cuối là: $paddedRight <br>";

    //16
    function endsWith($haystack, $needle) {
        return substr($haystack, -strlen($needle)) === $needle;
    }
    $mainString = "Trường Đại Học Thương Mại";
    $subString = "Thương Mại";
    
    if (endsWith($mainString, $subString)) {
        echo "16. Chuỗi '$mainString' kết thúc bằng '$subString'.<br>";
    } else {
        echo "16. Chuỗi '$mainString' không kết thúc bằng '$subString'.<br>";
    }

    //17
    function contains($haystack, $needle) {
        return strpos($haystack, $needle) !== false;
    }
    $mainString = "Trường Đại Học Thương Mại";
    $subString = "Đại Học";
    
    if (contains($mainString, $subString)) {
        echo "17. Chuỗi '$mainString' chứa '$subString'.<br>";
    } else {
        echo "17. Chuỗi '$mainString' không chứa '$subString'.<br>";
    }
    //18
    function replaceNonAlphanumeric($string, $replacement) {
        $pattern = '/[^a-zA-Z0-9]/';
        $result = preg_replace($pattern, $replacement, $string);
        return $result;
    }
        $originalString = "Trường Đại Học 2024!";
    $replacementChar = "*";
    
    $modifiedString = replaceNonAlphanumeric($originalString, $replacementChar);
    echo "18. Chuỗi gốc: '$originalString'<br>";
    echo "18. Chuỗi đã thay thế: '$modifiedString'<br>";

    //19
    function isIntegerString($str) {
        return (string)(int)$str === $str;
    }
    
    $testStrings = ["1", "1.3", "phuong",];
    
    foreach ($testStrings as $testString) {
        if (isIntegerString($testString)) {
            echo "Chuỗi '$testString' là một số nguyên.<br>";
        } else {
            echo "Chuỗi '$testString' không phải là một số nguyên.<br>";
        }
    }

    //20
    function isValidEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
    
    $emails = [
        "tmu@gmail.com",
        "tmuemail",
        "tmu@.com",
    ];
    
    foreach ($emails as $email) {
        if (isValidEmail($email)) {
            echo "Email '$email' là hợp lệ.<br>";
        } else {
            echo "Email '$email' không hợp lệ.<br>";
        }
    }

    //6
    function startsWith($haystack, $needle) {
        $needleLength = strlen($needle);
        
        if ($needleLength > strlen($haystack)) {
            return false;
        }
        
        $startOfHaystack = substr($haystack, 0, $needleLength);
        return $startOfHaystack === $needle;
    }
        $mainString = "Trường Đại Học Thương Mại";
    $subString = "Trường";
    
    if (startsWith($mainString, $subString)) {
        echo "6. Chuỗi '$mainString' bắt đầu bằng '$subString'.<br>";
    } else {
        echo "6. Chuỗi '$mainString' không bắt đầu bằng '$subString'.<br>";
    }

    ?>
   
</body>
</html>