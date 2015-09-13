<?php

require_once $_SERVER['DOCUMENT_ROOT']."/tech/includes/db.inc.php";
require_once $_SERVER['DOCUMENT_ROOT']."/tech/includes/functions.php";


if (isset($_GET['id']) == "uslugi-i-ceny") {

	include $_SERVER['DOCUMENT_ROOT']."/obuchenie/uslugi-i-ceny.html.php";

}

else {
	include $_SERVER['DOCUMENT_ROOT']."/obuchenie/jekzamen-v-GIBDD.html.php";
}