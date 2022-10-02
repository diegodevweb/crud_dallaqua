<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Editar Cliente</title>

<body>
    <form class="row g-3" form action="" method="POST">
 
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="inputEmail4" placeholder='Nome Completo'>
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Cidade</label>
        <input type="text" name='cidade' class="form-control" id="inputPassword4" placeholder='São Paulo'>
    </div>

    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Telefone</label>
        <input type="text" name="tel" class="form-control" id="inputPassword4" placeholder="(xx) xxxxx-xxxx">
    </div>
    
     <div class="col-12">
        <button type="submit" name="atualizar" class="btn btn-primary">Atualizar</button>
        <a href="clientes.php" class="btn btn-primary" >Voltar</a>
        </div>
        </div>
        <?php echo voltarClientes();?>
    </div>  
    </form>
</body>