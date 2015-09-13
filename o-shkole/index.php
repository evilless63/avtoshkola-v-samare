<?php

require_once $_SERVER['DOCUMENT_ROOT']."/tech/includes/db.inc.php";
require_once $_SERVER['DOCUMENT_ROOT']."/tech/includes/functions.php";


if ($_GET['id'] == "akcii") {

	include $_SERVER['DOCUMENT_ROOT']."/o-shkole/akcii.html.php";

}

elseif ($_GET['id'] == "avtodrom") {
    include $_SERVER['DOCUMENT_ROOT']."/o-shkole/avtodrom.html.php";
}

elseif ($_GET['id'] == "avtopark") {
    include $_SERVER['DOCUMENT_ROOT']."/o-shkole/avtopark.html.php";
}

elseif ($_GET['id'] == "klassy-obuchenija") {
    include $_SERVER['DOCUMENT_ROOT']."/o-shkole/klassy-obuchenija.html.php";
}

elseif ($_GET['id'] == "personal") {
    include $_SERVER['DOCUMENT_ROOT']."/o-shkole/personal.html.php";
}

else {
	include $_SERVER['DOCUMENT_ROOT']."/o-shkole/o-shkole.html.php";
}