<?php
$str="Hello words";
// xác định độ dài của chuỗi
echo strlen($str); // outputs 11
// đếm số từ trong chuỗi
echo str_word_count($str); // ouppút 2
// đảo ngược chuỗi
echo strrev($str);
// tìm số thứ tự của từ word trong chuỗi
echo strpos($str, "world");
// thay thế cụm từ trong chuỗi thành cụm khác
echo str_replace("world", "Dolly", "Hello world!"); //outputs Hello Dolly!

//$x = 10.365;
// hàm is_float() kiểm tra biến có phải kiểu float khong
//var_dump(is_float($x));
// PHP Infinity
$x = 1.9e411;// là biễn có giá trị lớn hơn FLOAT_MAX đến vô hạn
var_dump(is_infinite($x)); //true
var_dump(is_finite($x)); //false

//-Hàm này có tác dụng kiểm tra một thành phần có phải là biến hay không. Nó sẽ trả về true nếu thành phần đó không phải là số và ngược lại trả về false nếu là số.
$x = acos(8);
var_dump(is_NAN($x)); // true
// is_numeric($x) kiểm tra biến x có phải là số k
$x = 5985;
var_dump(is_numeric($x));
// định nghĩa hằng số constant
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>
