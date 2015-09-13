<?php

require_once $_SERVER['DOCUMENT_ROOT']."/tech/includes/db.inc.php";
require_once $_SERVER['DOCUMENT_ROOT']."/tech/includes/functions.php";


if ($_GET['id'] == "obrazec-dogovora-ob-okazanii-platnyh-obrazovatelnyh-uslug") {

	include $_SERVER['DOCUMENT_ROOT']."/documenty/platnye-obrazovatelnye-uslugi/obrazec-dogovora-ob-okazanii-platnyh-obrazovatelnyh-uslug.html.php";

}

elseif ($_GET['id'] == "polozhenie-ob-okazanii-platnyh-obrazovatelnyh-uslug") {
    include $_SERVER['DOCUMENT_ROOT']."/documenty/platnye-obrazovatelnye-uslugi/polozhenie-ob-okazanii-platnyh-obrazovatelnyh-uslug.html.php";
}


else {
	include $_SERVER['DOCUMENT_ROOT']."/documenty/platnye-obrazovatelnye-uslugi/pravila-okazanija-platnyh-obrazovatelnyh-uslug.html.php";
}	