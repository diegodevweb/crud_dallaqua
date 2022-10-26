<?php 
    require_once "includes/banco.php";
    require_once "includes/funcoes.php";
        
    $id = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome');
    $cidade = filter_input(INPUT_POST, 'cidade');
    $telefone = filter_input(INPUT_POST, 'tel');

    if($nome && $cidade && $telefone) {
        $sql = $banco->prepare("UPDATE clientes SET nome=:nome, cidade = :cidade, telefone = :telefone WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':telefone', $telefone);
        $sql->execute();
        
        header("Location: clientes.php");
        exit;
          
    } else { 
        header("Location: clientes.php");
        exit;
    }
?>



