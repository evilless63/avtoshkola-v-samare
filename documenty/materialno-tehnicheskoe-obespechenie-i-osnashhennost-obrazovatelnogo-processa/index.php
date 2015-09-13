<?php

require_once $_SERVER['DOCUMENT_ROOT']."/tech/includes/db.inc.php";
require_once $_SERVER['DOCUMENT_ROOT']."/tech/includes/functions.php";


if ($_GET['id'] == "svedenija-ob-oborudovannyh-uchebnyh-kabinetah") {

	include $_SERVER['DOCUMENT_ROOT']."/documenty/materialno-tehnicheskoe-obespechenie-i-osnashhennost-obrazovatelnogo-processa/svedenija-ob-oborudovannyh-uchebnyh-kabinetah.html.php";

}

elseif ($_GET['id'] == "svedenija-o-ploshhadke-dlja-pervonachalnogo-obuchenija-vozhdeniju") {
    include $_SERVER['DOCUMENT_ROOT']."/documenty/materialno-tehnicheskoe-obespechenie-i-osnashhennost-obrazovatelnogo-processa/svedenija-o-ploshhadke-dlja-pervonachalnogo-obuchenija-vozhdeniju.html.php";
}

else {
	include $_SERVER['DOCUMENT_ROOT']."/documenty/materialno-tehnicheskoe-obespechenie-i-osnashhennost-obrazovatelnogo-processa/svedenija-o-ts.html.php";
}