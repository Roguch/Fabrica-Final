<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Funcionario Pagina</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastro</title>    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>    <script type="text/javascript">
        $(document).ready(function(){
            $("#conteudos div:nth-child(1)").show();
            $(".abas li:first div").addClass("selected");
            $(".aba").click(function(){
                $(".aba").removeClass("selected");
                $(this).addClass("selected");
                var indice = $(this).parent().index();
                indice++;
                $("#conteudos div").hide();
                $("#conteudos div:nth-child("+indice+")").show();
            });

            $(".aba").hover(
                function(){$(this).addClass("ativa")},
                function(){$(this).removeClass("ativa")}
            );
        });
        function retirar($id,$qunt) {
            


        }
    </script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #426bbf!important;">
    <a class="navbar-brand" style="font-family: cursive; font-size: 30px; color: white;">Fábrica de Delícias</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

</div class="container">
<div class="AbasControli">
    <div id="abas" style="background-color: #426bbf;">
        <ul class="abas" style=" padding-top: 5px; padding-left: 5px;">
            <div class="w3-bar w3-black">

                <div class="form-row">
                    <div class="form-group col-md-3" style="margin-right: 10px;">
                        <form action="valida.php?acao=editar" method="post">
                            <input type="hidden" name="cpfFun" value="<?php echo $usuarioAtivo?>">
                            <button type="submit" class="btn btn-info" value="Editar" name="editar" style="background-color: #83acff!important;">Editar</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="background-color: #83acff!important;">Contato</button>
                            <button type="button" class="btn btn-danger" onclick="window.location='valida.php';" value="sair" id="sair" style="background-color: #83acff!important;">Sair</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Contato</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <b>Programador Chefe:</b> marcos.eduardor01@gmail.com<br>
                            <b>Redator e Estilista:</b> andrefernandes1885@gmail.com<br>
                            <b>Designer:</b> jacoisraelfranco@gmail.com<br>
                            <b>Contribuinte:</b> raissastazak@gmail.com
                        </div>
                    </div>
                </div>
            </div>
        </ul>
    </div>
</div>

<div class="AbasControli">

    <div id="conteudos" style="width: 1885px; height: 905px; padding-left: 10px">

        <div class="conteudo" style="margin-top: 20px; display: none">
            <?php foreach ($sorvetes as $sorvete):?>
                <tr>

                    <div class="card" style="width: 18rem; display: inline-block;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo "Nome: ".$sorvete->getNome()." "?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo "Sabor: ".$sorvete->getSabor()." "?></h6>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo "Quantidade: ".$sorvete->getQuant()." "?></h6>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo "Validade: ".$sorvete->getValidade()." "?></h6>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo "Data de Entrada: ".$sorvete->getdataEnt()." "?></h6>
                            <div class="form-row">
                                <div class="form-group col-md-3" style="margin-right: 10px;">
                                    <form action="valida.php?acao=retira" method="post">
                                        <input type="hidden" value="<?php echo $sorvete->getId()?>" name="id">
                                        <input type="hidden" value="<?php echo $sorvete->getQuant()?>" name="quanti">
                                        <button type="submit" class="btn btn-info" value="Retirar" >Retirar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </tr>
            <?php endforeach;?>
        </div>
    </div>

</div>


</body>
</html>
