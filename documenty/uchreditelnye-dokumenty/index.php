<?php

require_once $_SERVER['DOCUMENT_ROOT']."/tech/includes/db.inc.php";
require_once $_SERVER['DOCUMENT_ROOT']."/tech/includes/functions.php";


if ($_GET['id'] == "ergjul") {

	include $_SERVER['DOCUMENT_ROOT']."/documenty/uchreditelnye-dokumenty/ergjul.html.php";

}

elseif ($_GET['id'] == "nasha-licenzija") {
    include $_SERVER['DOCUMENT_ROOT']."/documenty/uchreditelnye-dokumenty/nasha-licenzija.html.php";
}

elseif ($_GET['id'] == "ogrn") {
    include $_SERVER['DOCUMENT_ROOT']."/documenty/uchreditelnye-dokumenty/ogrn.html.php";
}

elseif ($_GET['id'] == "svidetelstvo-o-postanovke-na-uchet-v-nalogovom-organe") {
    include $_SERVER['DOCUMENT_ROOT']."/documenty/uchreditelnye-dokumenty/svidetelstvo-o-postanovke-na-uchet-v-nalogovom-organe.html.php";
}

else {
	include $_SERVER['DOCUMENT_ROOT']."/documenty/uchreditelnye-dokumenty/ustav.html.php";
}