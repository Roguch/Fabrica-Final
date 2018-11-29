<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
    <?php include "cab.php"; ?>

    <div class = "container" style="margin-top: 50px; position: absolute; left: 37%;">
        <div class="wrapper">
            <form action="valida.php?acao=editado" method="post" class="form-signin">
                <h3 class="form-signin-heading">Alteração de Dados do Fornecedor</h3>
                <br>
                <input type="hidden" name="cnpj" value="<?php echo $valores->getCnpj()?>">

                <input type="text" class="form-control col-3" name="nome" placeholder="Nome" value="<?php echo $valores->getNome()?>" required="" autofocus=""/>
                <input type="email" class="form-control col-3" name="email" placeholder="E-mail" value="<?php echo $valores->getEmail()?>" required=""/>
                <input type="number" class="form-control col-3" name="telefone" placeholder="Telefone" value="<?php echo $valores->getTelefone()?>" required=""/>
                <br>
                <input type="hidden" name="idEdi" value="2">
                <br>
                <button class="btn btn-lg btn-primary btn-block col-3"  name="editar" value="Editar" type="submit">Salvar</button>
            </form>
        </div>
    </div>

</body>
</html>