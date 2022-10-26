<?php 
    require_once "includes/funcoes.php";
    require_once "includes/banco.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <title>Cadastro de Clientes</title>
    </head>
    <body>
        <form class="row g-3" form action="incluir.php" method="POST">
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label"> Nome Completo</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome e Sobrenome">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="São Paulo">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="(xx) 99999-9999">
            </div>
            <div class="col-14">
                <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                </div>
                <?php echo voltarClientes();?>
            </div>  
        </form>
    </body>
</html>

    
    
