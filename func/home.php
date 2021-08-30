<?php

function home() {

global $black, $red, $green, $yellow, $blue, $purple, $cyan, $white, $reset;

home_select:
echo "\n";
echo '  Danh sách công cụ';
echo "\n"; usleep(66666);
echo $purple . '     1. Radom list mail with number';
echo "\n"; usleep(66666);
echo $cyan . '     2. Check live list mail';
echo "\n"; usleep(66666);
echo $green . '     3. Check mail facebook (BETA)';
echo "\n"; usleep(66666);
echo $yellow . '     0. Thoát';
echo "\n"; usleep(66666);
echo "\n"; 
$select = input("$reset ==>$blue Nhập lựa chọn của bạn: $reset");
echo "\n\n";
usleep(66666);
if ($select == 0) {
	echo $red . 'Đang thoát...';
	usleep(77777);
	echo $reset . "\n";
	exit();
} else if ($select == 1){
	Random_Mail();
} else if ($select == 2){
	Check_Mail();
} else if ($select == 3){
	Check_Face();
} else if (!$select){
	echo $red . 'Bạn chưa chọn gì!';
    usleep(66666);
	echo $reset . "\n";
	goto home_select;
} else {
	echo $red . 'Lựa chọn không hợp lệ!';
    usleep(66666);
	echo $reset . "\n";
	goto home_select;
}


}