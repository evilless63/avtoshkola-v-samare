<?php

require_once $_SERVER['DOCUMENT_ROOT']."/tech/includes/db.inc.php";
require_once $_SERVER['DOCUMENT_ROOT']."/tech/includes/functions.php";


if ($_GET['id'] == "kalendarnyj-uchebnyj-grafik") {

	include $_SERVER['DOCUMENT_ROOT']."/documenty/оbrazovanie/kalendarnyj-uchebnyj-grafik.html.php";

}

elseif ($_GET['id'] == "metodicheskie-rekomendacii") {
    include $_SERVER['DOCUMENT_ROOT']."/documenty/оbrazovanie/metodicheskie-rekomendacii.html.php";
}

elseif ($_GET['id'] == "avpolozhenie-o-provedenii-promezhutochnoj-i-itogovoj-attestaciitopark") {
    include $_SERVER['DOCUMENT_ROOT']."/documenty/оbrazovanie/polozhenie-o-provedenii-promezhutochnoj-i-itogovoj-attestacii.html.php";
}

elseif ($_GET['id'] == "raspisanie-zanjatij-kategorii-b") {
    include $_SERVER['DOCUMENT_ROOT']."/documenty/оbrazovanie/raspisanie-zanjatij-kategorii-b.html.php";
}

elseif ($_GET['id'] == "uchebnye-marshruty") {
    include $_SERVER['DOCUMENT_ROOT']."/documenty/оbrazovanie/uchebnye-marshruty.html.php";
}

else {
	include $_SERVER['DOCUMENT_ROOT']."/documenty/оbrazovanie/uchebnyj-plan-kategorii-b.html.php";
}