<?php
require_once "includes/banco.php";
require_once "includes/funcoes.php";


$info = [];
$id = filter_input(INPUT_GET, 'id');

if (isset($id)) {
    $sql = $banco->prepare("SELECT * FROM clientes WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }
} else {
    header("Location: clientes.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Editar Cliente</title>
</head>
<header>
    <p>Editar Cliente</p>
    <picture>
        <img class="logop" src="img/IMG-20210211-WA0059.jpg" alt="">
    </picture>
</header>

<body>
    <section id="corpo">
        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <p class="card-text">
                <form class="row g-3" form action="editar-confirma.php" method="POST">
                    <input type="hidden" name="id" value="<?= $info['id']; ?>">
                    <form class="row g-3" form action="incluir.php" method="POST">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label"> Nome Completo</label>
                            <input type="text" class="form-control" name="nome" value="<?= $info['nome']; ?>" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Cidade</label>
                            <input type="text" class="form-control" name="cidade" value="<?= $info['cidade']; ?>" id="formGroupExampleInput2">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Telefone</label>
                            <input type="text" class="form-control" name="tel" value="<?= $info['telefone']; ?>" id="formGroupExampleInput2">
                        </div>
                        <div class="col-14">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
            </div>
            <?php echo voltarClientes(); ?>
        </div>
        </form>
        </p>
        </div>
        </form>
        </div>
        </div>
    </section>
</body>
<footer>Desenvolvido por Diego©
    <?php date_default_timezone_set('America/Sao_Paulo');
    $DateAndTime = date('d/m/Y H:i:s', time());
    echo "<br>Último acesso em " . $DateAndTime; ?>
</footer>

</html>