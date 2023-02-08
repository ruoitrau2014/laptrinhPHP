

<?php
//Quy tắc đặt tên biến:
//1 bắt đầu bằng dấu $
//2 biến không bắt đầu bằng một số
//3 biến chứa các ký tự từ A-z,0-9 và _
//4 không phân biệt viết hoa viết thường
//5 Biến tắt đầu bằng 1 ký tự hoặc _
$x = 5;
$y = 10;
function myTest() {
    // từ khóa global dùng để truy cập 1 biến trong 1 hàm
global $x, $y;
$y = $x + $y;
}myTest();
echo $y; //xuất ra 15


function myTest1() {
    // hàm static được dùng để sử dụng lại biến cục bộ vì 1 mục đích nào đó
static $a = 0;
echo $a;
$a++;
}

myTest1();
myTest1();
myTest1();

?>