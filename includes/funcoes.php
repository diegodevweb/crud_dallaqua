<?php

function voltarClientes() {
    return "<a href='clientes.php'><i class='material-icons'>arrow_back</i></a>";
}

function voltarIndex() {
    return "<a href='index.php'><i class='material-icons'>arrow_back</i></a>";
}

function sucesso($s) {
    $resp = "<div class='sucesso'><i class='material-icons'>check_circle</i> $s</div>";
    return $resp;
}

function aviso($a) {
    $resp = "<div class='aviso'><i class='material-icons'>check_circle</i> $a</div>";
    return $resp;
}

function erro($e) {
    $resp = "<div class='erro'><i class='material-icons'>check_circle</i> $e</div>";
    return $resp;
}
