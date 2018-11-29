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
            <h3 class="form-signin-heading">Alteração de Dados do Sorvete</h3>
            <br>
            <input type="hidden" name="id" value="<?php echo $valores->getId()?>">

            <input type="text" class="form-control col-3" name="nome" placeholder="Nome" value="<?php echo $valores->getNome()?>" required="" autofocus=""/>
            <input type="text" class="form-control col-3" name="sabor" placeholder="Sabor" value="<?php echo $valores->getSabor()?>" required=""/>
            <input type="number" class="form-control col-3" name="qtd" placeholder="Quantidade" value="<?php echo $valores->getQuant()?>" required=""/>
            <br>
            <input type="number" class="form-control col-3" name="validade" placeholder="Validade" value="<?php echo $valores->getValidade()?>" required=""/>
            <input type="number" class="form-control col-3" name="data_ent" placeholder="Data de Entrada" value="<?php echo $valores->getdataEnt()?>" required=""/>
            <input type="text" class="form-control col-3" name="cpf" placeholder="Login" value="<?php echo $login?>" required=""/>
            <input type="text" class="form-control col-3" name="cnpj" placeholder="Fornecedor" value="<?php echo $forNome?>" required=""/>

            <input type="hidden" name="idEdi" value="3">
            <br>
            <button class="btn btn-lg btn-primary btn-block col-3"  name="editar" value="Editar" type="submit">Salvar</button>
        </form>
    </div>
</div>
</body>
</html>