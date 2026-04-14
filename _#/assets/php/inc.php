<?php

function is_invalid_class($array, $key) {
    if( !is_array($array) )
        return false;

    if( isset($array[$key]) ) {
        $return = 'has-error';
        return $return;
    }
    return false;
}

function error_message($array, $key) {
    if( !is_array($array) )
        return false;

    if( isset($array[$key]) ) {
        $return = '<div class="error-message">'. $array[$key] .'</div>';
        return $return;
    }
    return false;
}

function get_value($value) {
    if( isset($_SESSION[$value]) ) {
        return $_SESSION[$value];
    }
}

function get_selected_option($name,$value) {
    if( isset($_SESSION[$name]) && $_SESSION[$name] == $value ) {
        return 'selected';
    }
}



 function validate_date($date, $format = 'Y-m-d H:i:s') {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

function validate_name($name) {
    if (!preg_match('/^[\p{L} ]+$/u', $name))
        return false;
    return true;
}

function validate_email($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        return false;
    return true;
}

function validate_phone($phone)
{
    // Allow +, - and . in phone number
    $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
    // Check the lenght of number
    // This can be customized if you want phone number from a specific country
    if (strlen($filtered_phone_number) != 12) {
        return false;
    } else {
        return true;
    }
}

function validate_number($number,$length = null) {
    if (is_numeric($number)) {
        if( $length == null ) {
            return true;
        } else {
            if( $length == strlen($number) )
                return true;
            return false;
        }
    } else {
        return false;
    }
}

function get_user_ip()
{
    /*$client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } else if(filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }*/

    return  $_SERVER['REMOTE_ADDR'];
}

function get_user_os() { 
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
        '/windows nt 10/i'     =>  'Windows 10',
        '/windows nt 6.3/i'     =>  'Windows 8.1',
        '/windows nt 6.2/i'     =>  'Windows 8',
        '/windows nt 6.1/i'     =>  'Windows 7',
        '/windows nt 6.0/i'     =>  'Windows Vista',
        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
        '/windows nt 5.1/i'     =>  'Windows XP',
        '/windows xp/i'         =>  'Windows XP',
        '/windows nt 5.0/i'     =>  'Windows 2000',
        '/windows me/i'         =>  'Windows ME',
        '/win98/i'              =>  'Windows 98',
        '/win95/i'              =>  'Windows 95',
        '/win16/i'              =>  'Windows 3.11',
        '/macintosh|mac os x/i' =>  'Mac OS X',
        '/mac_powerpc/i'        =>  'Mac OS 9',
        '/linux/i'              =>  'Linux',
        '/ubuntu/i'             =>  'Ubuntu',
        '/iphone/i'             =>  'iPhone',
        '/ipod/i'               =>  'iPod',
        '/ipad/i'               =>  'iPad',
        '/android/i'            =>  'Android',
        '/blackberry/i'         =>  'BlackBerry',
        '/webos/i'              =>  'Mobile'
    );
    foreach ($os_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }   
    return $os_platform;
}
function get_user_country() {
    $details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=". $_SERVER['REMOTE_ADDR'] .""));
    if ($details && $details->geoplugin_countryName != null) {
        $countryname = $details->geoplugin_countryName;
    }
    return $countryname;
}
function get_user_countrycode() {
    $details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" .  $_SERVER['REMOTE_ADDR'] . ""));
    if ($details && $details->geoplugin_countryCode != null) {
        $countrycode = $details->geoplugin_countryCode;
    }
    return $countrycode;
}
function get_user_browser() {
    $user_agent     = $_SERVER['HTTP_USER_AGENT'];
    $browser        =   "Unknown Browser";
    $browser_array  =   array(
        '/msie/i'       =>  'Internet Explorer',
        '/firefox/i'    =>  'Firefox',
        '/safari/i'     =>  'Safari',
        '/chrome/i'     =>  'Chrome',
        '/opera/i'      =>  'Opera',
        '/netscape/i'   =>  'Netscape',
        '/maxthon/i'    =>  'Maxthon',
        '/konqueror/i'  =>  'Konqueror',
        '/mobile/i'     =>  'Handheld Browser'
    );
    foreach ($browser_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}
?>