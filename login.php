<!DOCTYPE html>
<?php
session_start();
//unset($_SESSION['idUtilizador']);
session_destroy();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <script>
        function valida(forms) {

            if (forms.user.value == "") {
                alert("Preencha o nome de usuário.");
                forms.user.focus();
                return false;
            }


            if (forms.password.value == "") {
                alert("Preencha a senha.");
                forms.password.focus();
                return false;
            }

        }
    </script>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Responsive Bootstrap Advance Admin Template</title>

        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    </head>
    <body style="background-color: #E2E2E2;">
        <div class="container">
            <div class="row text-center " style="padding-top:100px;">
                <!--   <div class="col-md-12">
                       <img src="assets/img/logo-invoice.png" />
                   </div> -->
                <h1>SGB<font color="red">iblioteca</font></h1>
            </div>
            <div class="row ">

                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                    <div class="panel-body">
                        <?php
                        $v = 0;
                        if (isset($_GET['error'])) {
                            $v = $_GET['error'];
                        }
                        if ($v == 1) {
                            ?>
                            <script type="text/javascript">
                                alert("Login ou senha incorreta")
                            </script>
                               <div class="alert alert-danger">
                                    Erro a introduzir a Senha ou Utilizador.
                                </div> 

                            <?php
                        }
                        if ($v == 2) {
                            ?>
                            <div class="alert alert-danger">
                                A Página para este tipo de usuário ainda não foi definida...
                            </div>
                        <?php
                        } else {
                            ?>
                            <div class="alert alert-danger">
                                Por favor entre com seu nome de usuário e palavra passe.
                            </div>
                        <?php } ?>
                        <form role="form" name="forms" onsubmit="return valida(this);" method="POST" action="inicio.php">
                            <hr />
                            <h5>Insira seus dados de login</h5>
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                <input type="text" name="user" class="form-control" placeholder="Nome de usuário " />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                <input type="password" name="password" class="form-control"  placeholder="Palavra passe" />
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" /> Lembrar-me
                                </label>
                                <span class="pull-right">
                                    <a href="index.html" >Esqueceu a palavra passe ? </a> 
                                </span>
                            </div>
                            <button type="submit"  class="btn btn-success">Entrar</button> 
                            <!--   <a href="index.php"  class="btn btn-primary ">Entrar agora</a> -->
                            <hr />
                            Not register ? <a href="index.html" >click here </a> or go to <a href="index.html">Home</a> 
                        </form>
                    </div>

                </div>


            </div>
        </div>

    </body>
</html>
