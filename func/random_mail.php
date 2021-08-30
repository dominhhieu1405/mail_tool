<?php

function Random_Mail(){
	 global $black, $red, $green, $yellow, $blue, $purple, $cyan, $white, $reset;
    clear();
    banner();
    tool_name("Random email with number");
    echo "\n";
    usn_input:
	$usn = Bodau(input("\n$blue  Nhập tên email (Ex: daucatmoi, concainit,.. ): $reset"));
	if (!$usn) {
		echo "$red  Tên email không hợp lệ!\n";
		goto usn_input;
	}
	$char_email = input("\n\n$yellow  Ký tự phân tách$reset\n   •,$green [1]$reset Không dùng (Mặc định)\n   •,$green [2]$reset Ngẫu nhiên ('.', '-', '_')\n   •,$green [3]$reset Dùng dấu chấm (.)\n   •,$green [4]$reset Dùng dấu gạch nối (-)\n   •,$green [5]$reset Dùng dấu gạch dưới (_)\n  -->$blue Nhập lựa chọn của bạn (1-5): ");
	$type_number = input("\n\n$cyan  Thứ tự số$reset\n   •,$green [1]$reset Ngẫu nhiên (Mặc định)\n   •,$green [2]$reset Từ bé đến lớn\n   •,$green [3]$reset Từ lớn đến bé\n  ->$blue Nhập lựa chọn của bạn (1-3): ");
	
	start_num:
	$start_num = input("$purple  \nNhập số bắt đầu: ");
	if (is_numeric($start_num)) { $start_num = round($start_num); } else {goto start_num;}
	end_num:
	$end_num = input("$purple  \nNhập số kết thúc: ");
	if (is_numeric($end_num)) { $end_num = round($end_num);} else {goto end_num;}
	
	if ($start_num == $end_num) $end_num = $end_num + 99;
	if ($start_num > $end_num) {
		$aaa = $start_num;
		$start_num = $end_num;
		$end_num = $start_num;
	}
	
	input_domain:
	$domain = Bodau(input("$reset  \n\nNhập tên miền: "));
	if ($domain == '' || count(explode(".", $domain)) < 2) goto input_domain;
	
	$nums = range($start_num, $end_num);
	if ($type_number == 2) krsort($nums);
	if ($type_number != 2 && $type_number != 3) shuffle($nums);
	
	$chars = [".", "-", "_"];
	$char = "";
	if ($char_email == "3") $char = ".";
	if ($char_email == "4") $char = "-";
	if ($char_email == "5") $char = "_";
	$emails = "";
	$i = 0;
	echo "\n$reset\n";
	foreach ($nums as $key => $num) {
		if ($char_email == "2") $char = $chars[array_rand($chars, 1)];
		$email = $usn . $char . $num ."@" . $domain;
		$emails .= "$email\n";
		echo "  ==> $email\n";
		$i++;
	} 
	if (!is_readable("./emails.txt")) createFile("./emails.txt");
	file_put_contents("emails.txt", $emails);
	echo  "\n\n$green Generated $i emails! Check it on file emails.txt\n$reset";
	
	echo "\n\n";
	select_end_tool:
	echo "$reset  Lựa chọn";
    echo "\n"; usleep(66666);
    echo $red . '     1. Chạy lại công cụ';
    echo "\n"; usleep(66666);
    echo $green . '     2. Quay lại trang chủ';
    echo "\n"; usleep(66666);
    echo $yellow . '     0. Thoát';
    echo "\n"; usleep(66666);
    echo "\n"; 
    $select = input("$reset ==>$blue Nhập lựa chọn của bạn: $reset");
    
   echo "\n";
    usleep(66666);
    if ($select == 0) {
	    echo $red . '  Đang thoát...';
	    usleep(77777);
	    echo $reset . "\n";
	    exit();
    } else if ($select == 1){
	    goto usn_input;
    } else if ($select == 2){
    	clear();
        banner();
	    home();
    } else if (!$select){
	    echo $red . '  Bạn chưa chọn gì!';
        usleep(66666);
	    echo $reset . "\n\n";
	    goto select_end_tool;
    } else {
	    echo $red . '  Lựa chọn không hợp lệ!';
        usleep(66666);
	    echo $reset . "\n\n";
	    goto select_end_tool;
    }
	
}