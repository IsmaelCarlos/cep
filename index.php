<?php
session_start();
?>
<?php
header('Content-Type: text/html; charset=ISO-8859-1');
?>!
<html lang="pt-br">


<heade>
    <!--    <meta charset="utf-8">-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <title>CEP</title>
    <link href="style.css" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="style.css" >







</heade>


<html>

<body><div class="area bg-transparent ">

    <div class="container">
        <div class="row fonte-titulo-cadastro">
            <h1>CEP</h1>
        </div>

        <div>
            <form>








                <div class="form-row"  id="cadastro_funcionario_row1">
                    <div class="form-group col-md-2">

                        <input type="text" name="f_cep" class="form-control" id="cep" placeholder="Cep * ">
                    </div>
                    <div class="form-group col-md-6">

                        <input id="cidade" type="text" class="form-control" id="inputCity" placeholder="Cidade * ">
                    </div>
                    <div class="form-group col-md-4">

                        <select id="uf" class="form-control">
                            <option selected>Escolher...</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                        </select>
                    </div>

                </div>


                <div class="form-group">

                    <input type="text" class="form-control" id="logradouro" placeholder="Rua" required/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Complemento. Qd. Lt. N�" required/>
                </div>


                <button type="submit" class="btn-dark botao  botao-submeter">Salvar</button>
                <a href="../html/profile_register.html"> <button type="button" class="btn-dark botao  botao-submeter">Voltar</button></a><!--Submeter cadastro do funcion�rio-->
            </form>
        </div>
    </div>

</div>
</body>

</html>


</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.com/libraries/popper.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap/bootstrap.js"></script>
<script src="js/validar_cep.js"></script>

</html>