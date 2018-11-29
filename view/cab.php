<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #426bbf!important;">
    <a class="navbar-brand" href="valida.php?acao=home" style="font-family: cursive; font-size: 30px; color: white;">Fábrica de Delícias</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav ml-auto">
            <li>
                <button type="button" class="btn btn-success" onclick="window.location='valida.php?acao=cad';" style="margin-right: 10px;">
                    Cadastrar
                </button>
            </li>
            <li>
                <button type="button" class="btn btn-danger" onclick="window.location='valida.php';">
                    Sair
                </button>
            </li>
        </ul>
    </div>
</nav>

<div class="AbasControli" style="margin-bottom: 30px;">
    <div id="abas" style="background-color: #426bbf;">
        <ul class="abas" style=" padding-top: 5px; padding-left: 5px;">
            <div class="w3-bar w3-black">
                <button class="btn btn-primary" onclick="openAba('fun')" style="background-color: #83acff!important;">Funcionario</button>
                <button class="btn btn-primary" onclick="openAba('sor')" style="background-color: #83acff!important;">Sorvete</button>
                <button class="btn btn-primary" onclick="openAba('for')" style="background-color: #83acff!important;">Fornecedor</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="background-color: #83acff!important;">Contato</button>
            </div>
            <br>
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
