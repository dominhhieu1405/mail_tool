<?php
function Check_Mail() {
	 global $black, $red, $green, $yellow, $blue, $purple, $cyan, $white, $reset;
     clear();
     banner();
     tool_name("Check live - die emails");
     echo "\n";
     file_path_input:
	$filepath = input("\n$cyan  Enter file path: $reset");
	if (!$filepath || !is_readable($filepath)) {
		echo "$red  File not valid\n";
		goto file_path_input;
	}
	 $save = input("\n$blue  Do you want to save result? (Y/n): $reset");
	
	$emails_live = "";
	$emails_die = "";
	$emails_err = "";
	
	$live_count = 0;
	$die_count = 0;
	$uncheck_count = 0;
	$error_count =0;
	$data = file_get_contents($filepath);
	$emails = explode("\n", $data);
	echo "\n\nStart checking";
    usleep(6789);
    echo ".";usleep(6789);
    echo ".";usleep(6789);
	echo ".\n\n";
	//var_dump($emails);
	for ($i=0;$i < count($emails);$i++) {
		$email = trim($emails[$i]);
		if ($email == '') continue;
		$type = explode("@", $email);
		$type = @$type['1'];
		if ($type == "gmail.com"){
			$check = file_get_contents("https://apiv2.k6vn.net/checkmail/gmail.php?email=$email");
		} else if ($type == "yahoo.com") {
			$check = file_get_contents("https://apiv2.k6vn.net/checkmail/yahoo.php?email=$email");
		} else if ($type == "hotmail.com" || $type == "outlook.com" || $type == "live.com") {
			 $check = file_get_contents("https://apiv2.k6vn.net/checkmail/hotmail.php?email=$email");
		} else if ($type != "") {
			$check = "Not support this email type";
		} else {
			$check = "Email not valid";
		}
		if ($check == "Live") {
			$checked = "$green Live";
			$emails_live .= "$email\n";
			$live_count++;
		} else if ($check == "Die") {
			$checked = "$red Die";
			$emails_die .= "$email\n";
			$die_count++;
		} else if ($check == "Unchecked") {
			$checked = "$yellow Unchecked";
			$emails_err .= "$email | Unchecked!\n";
			$uncheck_count++;
		} else {
			$checked = "$purple $check";
			 $emails_err .= "$email | $check!\n";
			$error_count++;
		}
		echo "$reset  ==>$blue $email $reset|$checked!";
		echo "\n";
	}
    if ($save == "Y" || $save == "y") {
    	if (!is_readable("./live.txt")) createFile("./live.txt");
		if (!is_readable("./die.txt")) createFile("./die.txt");
		if (!is_readable("./error.txt")) createFile("./error.txt");
		file_put_contents("./live.txt", $emails_live);
		echo ("$green  Saved $live_count emails live on live.txt");
		file_put_contents("./die.txt", $emails_die);
		echo ("$green  Saved $die_count emails die on die.txt");
		file_put_contents("./error.txt", $emails_err);
		echo ("$green  Saved " . ($error_count + $uncheck_count) . " emails error on error.txt");
	}
	echo "$reset \n\n Check emails complete!";
	echo "\n$blue  Total:";
	echo "\n$green    •, $live_count email live";
	echo "\n$red    •, $die_count email die";
	echo "\n$yellow    •, $uncheck_count email uncheck";
	echo "\n$purple    •, $error_count email error";
	
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
	    goto file_path_input;
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