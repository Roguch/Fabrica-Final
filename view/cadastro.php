<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        function openAba(abaName) {
            var i;
            var x = document.getElementsByClassName("conteudo");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(abaName).style.display = "block";
        }
    </script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #426bbf!important;">
    <a class="navbar-brand" href="valida.php?acao=home" style="font-family: cursive; font-size: 30px;">Fábrica de Delícias</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav ml-auto">
            <li>
                <button type="button" class="btn btn-danger" onclick="window.location='valida.php';">
                    Sair
                </button>
            </li>
        </ul>
    </div>
</nav>

<div class="AbasControli">
    <div id="abas" style="background-color: #426bbf;">
        <ul class="abas" style=" padding-top: 5px;padding-left: 5px;margin-bottom: 0px;">

            <div class="w3-bar w3-black">
                <button class="btn btn-primary" onclick="openAba('fun')" style="background-color: #83acff!important;">Funcionario</button>
                <button class="btn btn-primary" onclick="openAba('sor')" style="background-color: #83acff!important;">Sorvete</button>
                <button class="btn btn-primary" onclick="openAba('for')" style="background-color: #83acff!important;">Fornecedor</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="background-color: #83acff!important;">Contato</button>
            </div>
            <br>

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

<!--    <input type="button" onclick="window.location='valida.php?acao=home';" value="Home" id="home" style="background: #d09d70;">-->

    <div id="conteudos">
        <div  id="fun" class = "conteudo" style="margin-top: 50px; position: absolute; left: 37%;">
            <div class="wrapper">
                <form action="valida.php?acao=cadastroFun" method="post" class="form-signin">
                    <h3 class="form-signin-heading">Cadastro de Funcionários</h3>
                    <br>
                    <input type="number" class="form-control col-9" name="cpf" placeholder="CPF" >
                    <select name="tipo_user" class="form-control form-control col-9">
                        <option value="1">Funcionário</option>
                        <option value="0">Gerente</option>
                    </select>
                    <input type="text" class="form-control col-9" name="name" placeholder="Nome" >
                    <input type="email" class="form-control col-9" name="email" placeholder="E-mail" >
                    <input type="number" class="form-control col-9" name="telefone" placeholder="Telefone" >
                    <br>
                    <input type="text" class="form-control col-9" name="login" placeholder="Usuário" >
                    <input type="password" class="form-control col-9" name="senha" placeholder="Senha" >
                    <br>
                    <button class="btn btn-lg btn-primary btn-block col-9"  name="cadastro" value="Cadastrar" type="submit">Registrar</button>
                </form>
            </div>
        </div>
        <div  id="sor" class = "conteudo" style="margin-top: 50px; position: absolute; left: 37%; display: none;">
            <div class="wrapper">
                <form action="valida.php?acao=cadastroSor" method="post" class="form-signin">
                    <h3 class="form-signin-heading">Cadastro de Sorvetes</h3>
                    <br>
                    <input type="text" class="form-control col-9" name="nome" placeholder="Nome do Sorvete">
                    <input type="text" class="form-control col-9" name="sabor" placeholder="Sabor" >
                    <input type="number" class="form-control col-9" name="qtd" placeholder="Quantidade (Caixas)" >
                    <input type="number" class="form-control col-9" name="validade" placeholder="Validade (Ano)" >
                    <br>
                    <input type="number" class="form-control col-9" name="data_ent" placeholder="Data de Entrada (Ano)" >
                    <input type="text" class="form-control col-9" name="cpf" placeholder="Login" >
                    <input type="text" class="form-control col-9" name="cnpj" placeholder="Nome da Empresa" >
                    <br>
                    <button class="btn btn-lg btn-primary btn-block col-9"  name="cadastro" value="Cadastrar" type="submit">Inserir</button>
                </form>
            </div>
        </div>
        <div  id="for" class = "conteudo" style="margin-top: 50px; position: absolute; left: 37%; display: none;">
            <div class="wrapper">
                <form action="valida.php?acao=cadastroFor" method="post" class="form-signin">
                    <h3 class="form-signin-heading">Cadastro de Fornecedores</h3>
                    <br>
                    <input type="number" class="form-control col-9" name="cnpj" placeholder="CNPJ">
                    <input type="text" class="form-control col-9" name="nome" placeholder="Nome da Empresa" />
                    <input type="email" class="form-control col-9" name="email" placeholder="E-mail" />
                    <input type="number" class="form-control col-9" name="telefone" placeholder="Telefone" />
                    <br>
                    <button class="btn btn-lg btn-primary btn-block col-9"  name="cadastro" value="Cadastrar" type="submit">Registrar</button>
                </form>
            </div>
        </div>
    </div>



</div>
</body>
</html>
