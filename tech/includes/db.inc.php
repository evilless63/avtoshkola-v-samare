<?php

try {
    $pdo = new PDO ('mysql:host=localhost;dbname=avtomowm_63','avtomowm_63','Yu45ionfs');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("set names utf8");
}
catch(PDOException $e) {
    echo $e->getMessage();
}