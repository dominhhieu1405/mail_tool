<?php
global $black, $red, $green, $yellow, $blue, $purple, $cyan, $white, $reset;
        $black = "\033[0;30m";   // BLACK
        $red = "\033[0;31m";     // RED
        $green = "\033[0;32m";   // GREEN
        $yellow = "\033[0;33m";  // YELLOW
        $blue = "\033[0;34m";    // BLUE
        $purple = "\033[0;35m";  // PURPLE
        $cyan = "\033[0;36m";    // CYAN
        $white = "\033[0;37m";   // WHITE
        $reset = "\033[0m";
  

function input($text = '') {
	echo $text;
	$input = trim(fgets(STDIN));
	return $input;
}      
function banner(){
	for($i=0;$i<55;$i++) {
	    echo '#';
	    usleep(6666);
   }
   echo "\n";
   system("toilet -f big --filter border:metal 'K6VN Team'");
   for($i=0;$i<55;$i++) {
	    echo '#';
	    usleep(6666);
   }
   echo "\n";
   for($i=0;$i<19;$i++) {
       echo ' ';
       usleep(6666);
   }
   echo 'h'; usleep(6666);
   echo 't'; usleep(6666);
   echo 't'; usleep(6666);
   echo 'p'; usleep(6666);
   echo 's'; usleep(6666);
   echo ':'; usleep(6666);
   echo '/'; usleep(6666);
   echo '/'; usleep(6666);
   echo 'k'; usleep(6666);
   echo '6'; usleep(6666);
   echo 'v'; usleep(6666);
   echo 'n'; usleep(6666);
   echo '.'; usleep(6666);
   echo 'n'; usleep(6666);
   echo 'e'; usleep(6666);
   echo 't'; usleep(6666);
   echo '/'; usleep(6666);
   for($i=0;$i<19;$i++) {
       echo ' ';
       usleep(6666);
   }
   echo "\n";
   for($i=0;$i<28;$i++) {
	    echo '--';
	    usleep(6666);
    }
    echo "\n";
}

function clear(){ system('clear');}
function createFile($name){
	 $fp = fopen($name, 'x+');
     fclose($fp);
}
//Function xóa bỏ tất cả dấu. ký tự đặc biệt
function Bodau($strTitle) {
  $strTitle = strtolower($strTitle);
  $strTitle = trim($strTitle);
  $strTitle = str_replace(' ', '-', $strTitle);
  $strTitle = preg_replace("/(!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\:|\'| |\"|\&|\#|\[|\]|~)/", '-', $strTitle);
  $strTitle = preg_replace("/(ò|ó|ọ|ỏ|õ|ơ|ờ|ớ|ợ|ở|ỡ|ô|ồ|ố|ộ|ổ|ỗ)/", 'o', $strTitle);
  $strTitle = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|Ô|Ố|Ổ|Ộ|Ồ|Ỗ)/", 'o', $strTitle);
  $strTitle = preg_replace("/(à|á|ạ|ả|ã|ă|ằ|ắ|ặ|ẳ|ẵ|â|ầ|ấ|ậ|ẩ|ẫ)/", 'a', $strTitle);
  $strTitle = preg_replace("/(À|Á|Ạ|Ả|Ã|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|Â|Ấ|Ầ|Ậ|Ẩ|Ẫ)/", 'a', $strTitle);
  $strTitle = preg_replace("/(ề|ế|ệ|ể|ê|ễ|é|è|ẻ|ẽ|ẹ)/", 'e', $strTitle);
  $strTitle = preg_replace("/(Ể|Ế|Ệ|Ể|Ê|Ề|Ễ|É|È|Ẻ|Ẽ|Ẹ)/", 'e', $strTitle);
  $strTitle = preg_replace("/(ừ|ứ|ự|ử|ư|ữ|ù|ú|ụ|ủ|ũ)/", 'u', $strTitle);
  $strTitle = preg_replace("/(Ừ|Ứ|Ự|Ử|Ư|Ữ|Ù|Ú|Ụ|Ủ|Ũ)/", 'u', $strTitle);
  $strTitle = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $strTitle);
  $strTitle = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $strTitle);
  $strTitle = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $strTitle);
  $strTitle = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $strTitle);
  $strTitle = preg_replace('/(đ|Đ)/', 'd', $strTitle);
  $strTitle = preg_replace("/(^\-+|\-+$)/", '', $strTitle);
  $strTitle = html_entity_decode(trim($strTitle), ENT_QUOTES, 'UTF-8');
  $strTitle = str_replace(" ", "-", $strTitle);
  $strTitle = str_replace("@", "-", $strTitle);
  $strTitle = str_replace("/", "-", $strTitle);
  $strTitle = str_replace("{", "", $strTitle);
  $strTitle = str_replace("}", "", $strTitle);
  $strTitle = str_replace("\\", "-", $strTitle);
  $strTitle = str_replace(":", "", $strTitle);
  $strTitle = str_replace("\"", "", $strTitle);
  $strTitle = str_replace("'", "", $strTitle);
  $strTitle = str_replace("<", "", $strTitle);
  $strTitle = str_replace(">", "", $strTitle);
  $strTitle = str_replace(",", "", $strTitle);
  $strTitle = str_replace("?", "", $strTitle);
  $strTitle = str_replace(";", "", $strTitle);
//  $strTitle = str_replace(".", "", $strTitle);
  $strTitle = str_replace("[", "", $strTitle);
  $strTitle = str_replace("]", "", $strTitle);
  $strTitle = str_replace("(", "", $strTitle);
  $strTitle = str_replace(")", "", $strTitle);
  $strTitle = str_replace("*", "", $strTitle);
  $strTitle = str_replace("!", "", $strTitle);
  $strTitle = str_replace("$", "-", $strTitle);
  $strTitle = str_replace("&", "-and-", $strTitle);
  $strTitle = str_replace("%", "", $strTitle);
  $strTitle = str_replace("#", "", $strTitle);
  $strTitle = str_replace("^", "", $strTitle);
  $strTitle = str_replace("=", "", $strTitle);
  $strTitle = str_replace("+", "", $strTitle);
  $strTitle = str_replace("~", "", $strTitle);
  $strTitle = str_replace("`", "", $strTitle);
  $strTitle = str_replace("--", "-", $strTitle);
  $strTitle = str_replace("--", "-", $strTitle);
  return $strTitle;
}
function GetProxy() {
    $data = @file_get_contents("https://api.getproxylist.com/proxy");
    $arr = @json_decode($data, true);
    if ($arr) {
        $protocol = $arr["protocol"];
        $ptc = "CURLPROXY_HTTP";
	    if ($protocol = "socks4") $ptc  = 'CURLPROXY_SOCKS4';
	    if ($protocol = "socks4a") $ptc  = 'CURLPROXY_SOCKS4A';
	    if ($protocol = "socks5") $ptc  = 'CURLPROXY_SOCKS5';
	    if ($protocol = "socks5h") $ptc  = 'CURLPROXY_SOCKS5_HOSTNAME';
	    return array(
	        "ip"  => $arr['ip'],
	        "port" => $arr['port'],
	        "protocol" => $ptc
	    );
    } else {
	    return false;
    }
}
function tool_name($name="") {
	 global $red, $green, $yellow, $blue, $purple, $cyan, $white, $reset;
	$k = rand (1, 7);
	if ($k == 1) 
		$cl = $red;
	else if ($k == 2)
	    $cl = $green;
	else if ($k == 3)
	    $cl = $yellow;
	else if ($k == 4)
	    $cl = $blue;
	else if ($k == 5)
	    $cl = $purple;
	else if ($k == 6)
	    $cl = $cyan;
	else
	    $cl = $white;
	echo "  $reset==> Tool: $cl$name$reset";
	 echo "\n";
     for($i=0;$i<28;$i++) {
	     echo '--';
	     usleep(6666);
      }
	
}
/*function color($color = 'RESET', $type = '') {
	
    // Regular Colors
        $black = "\033[0;30m";   // BLACK
        $red = "\033[0;31m";     // RED
        $green = "\033[0;32m";   // GREEN
        $yellow = "\033[0;33m";  // YELLOW
        $blue = "\033[0;34m";    // BLUE
        $purple = "\033[0;35m";  // PURPLE
        $cyan = "\033[0;36m";    // CYAN
        $white = "\033[0;37m";   // WHITE
        $reset = "\033[0m";

    // Bold
        $BLACKBOLD = "\033[1;30m";  // BLACK
        $REDBOLD = "\033[1;31m";    // RED
        $GREENBOLD = "\033[1;32m";  // GREEN
        $YELLOWBOLD = "\033[1;33m"; // YELLOW
        $BLUEBOLD = "\033[1;34m";   // BLUE
        $PURPLEBOLD = "\033[1;35m"; // PURPLE
        $CYANBOLD = "\033[1;36m";   // CYAN
        $WHITEBOLD = "\033[1;37m";  // WHITE
​
    // Underline
        $BLACKUNDERLINED = "\033[4;30m";  // BLACK
        $REDUNDERLINED = "\033[4;31m";    // RED
        $GREENUNDERLINED = "\033[4;32m";  // GREEN
        $YELLOWUNDERLINED = "\033[4;33m"; // YELLOW
        $BLUEUNDERLINED = "\033[4;34m";   // BLUE
        $PURPLEUNDERLINED = "\033[4;35m"; // PURPLE
        $CYANUNDERLINED = "\033[4;36m";   // CYAN
        $WHITEUNDERLINED = "\033[4;37m";  // WHITE
​
    // Background
        $BLACKBACKGROUND = "\033[40m";  // BLACK
        $REDBACKGROUND = "\033[41m";    // RED
        $GREENBACKGROUND = "\033[42m";  // GREEN
        $YELLOWBACKGROUND = "\033[43m"; // YELLOW
        $BLUEBACKGROUND = "\033[44m";   // BLUE
        $PURPLEBACKGROUND = "\033[45m"; // PURPLE
        $CYANBACKGROUND = "\033[46m";   // CYAN
        $WHITEBACKGROUND = "\033[47m";  // WHITE
​
    // High Intensity
        $BLACKBRIGHT = "\033[0;90m";  // BLACK
        $REDBRIGHT = "\033[0;91m";    // RED
        $GREENBRIGHT = "\033[0;92m";  // GREEN
        $YELLOWBRIGHT = "\033[0;93m"; // YELLOW
        $BLUEBRIGHT = "\033[0;94m";   // BLUE
        $PURPLEBRIGHT = "\033[0;95m"; // PURPLE
        $CYANBRIGHT = "\033[0;96m";   // CYAN
        $WHITEBRIGHT = "\033[0;97m";  // WHITE
​
    // Bold High Intensity
        $BLACKBOLDBRIGHT = "\033[1;90m"; // BLACK
        $REDBOLDBRIGHT = "\033[1;91m";   // RED
        $GREENBOLDBRIGHT = "\033[1;92m"; // GREEN
        $YELLOWBOLDBRIGHT = "\033[1;93m";// YELLOW
        $BLUEBOLDBRIGHT = "\033[1;94m";  // BLUE
        $PURPLEBOLDBRIGHT = "\033[1;95m";// PURPLE
        $CYANBOLDBRIGHT = "\033[1;96m";  // CYAN
        $WHITEBOLDBRIGHT = "\033[1;97m"; // WHITE

    // High Intensity backgrounds
        $BLACKBACKGROUNDBRIGHT = "\033[0;100m";// BLACK
        $REDBACKGROUNDBRIGHT = "\033[0;101m";// RED
        $GREENBACKGROUNDBRIGHT = "\033[0;102m";// GREEN
        $YELLOWBACKGROUNDBRIGHT = "\033[0;103m";// YELLOW
        $BLUEBACKGROUNDBRIGHT = "\033[0;104m";// BLUE
        $PURPLEBACKGROUNDBRIGHT = "\033[0;105m"; // PURPLE
        $CYANBACKGROUNDBRIGHT = "\033[0;106m";  // CYAN
        $WHITEBACKGROUNDBRIGHT = "\033[0;107m";   // WHITE
        
        $reset = "\033[0m";  // Text Reset
	
	if ($type = 'B' || $type = 'b') {
		$code = $color . 'BOLD';
	} else if ($type = 'U' || $type = 'u') {
		 $code = $color . 'UNDERLINED';
	} else if ($type = 'BG' || $type = 'bg') {
		 $code = $color . 'BACKGROUND';
	} else if ($type = 'BR' || $type = 'br') {
		 $code = $color . 'UNDERLINED';
	} else if ($type = 'BBR' || $type = 'bbr') {
		 $code = $color . 'BOLDBRIGHT';
	} else if ($type = 'BGBR' || $type = 'bgbr') {
		 $code = $color . 'BACKGROUNDBRIGHT';
	} else {
		 $code = 'RESET';
	}
	echo $code;
}*/