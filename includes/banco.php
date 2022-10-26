<?php

$db_name = "dallaqua";
$db_host = "localhost";
$db_user = "root";
$db_password = "";

$banco = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_password);

$banco->query("SET NAMES 'utf8'");
$banco->query("SET character_set_connection=utf8");
$banco->query("SET character_set_client=utf8");
$banco->query("SET character_set_results=utf8");