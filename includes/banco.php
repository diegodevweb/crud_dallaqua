<?php

    $banco = new mysqli('us-cdbr-east-06.cleardb.net', 'b2627606b321f6', 'e2327491', 'heroku_e4e630f8b7a2e2b');

    if ($banco->connect_errno) {
        echo '<p>Erro! Fechando BD.</p>';
        die();
    }

    $banco->query("SET NAMES 'utf8'");
    $banco->query("SET character_set_connection=utf8");
    $banco->query("SET character_set_client=utf8");
    $banco->query("SET character_set_results=utf8");