<?php

$db_name = "heroku_e4e630f8b7a2e2b";
$db_host = "us-cdbr-east-06.cleardb.net";
$db_user = "b2627606b321f6";
$db_password = "e2327491";

$banco = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_password);

$banco->query("SET NAMES 'utf8'");
$banco->query("SET character_set_connection=utf8");
$banco->query("SET character_set_client=utf8");
$banco->query("SET character_set_results=utf8");