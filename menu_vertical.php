<?php
include_once 'app_conect.php';
session_start();
?>


<!-- /. NAV SIDE  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <?php
                if (isset($_SESSION['idUtilizador'])) {

                    $idUtilizador = $_SESSION['idUtilizador'];
                }
                $db = testdb_connect();
                $administrador = $db->query("SELECT f.NomeFuncionario, u.usuario, u.codigoUsuario FROM funcionario f, usuario u WHERE f.codigoFuncionario=u.codigoFuncionario AND codigoUsuario=$idUtilizador");

                foreach ($administrador as $administradores) {

                    $idAdministrador = $administradores['codigoUsuario'];
                    $nomeAdministrador = $administradores['NomeFuncionario'];
                }

                $_SESSION['idAdministrador'] = $idAdministrador;
                $_SESSION['nomeAdministrador'] = $nomeAdministrador;
                if (isset($_SESSION['nomeAdministrador'])) {

                    $nomeAdministrador = $_SESSION['nomeAdministrador'];
                } else {

                    header("Location: login.php");
                }
                ?>
                <div class="user-img-div">
                    <img src="assets/img/user.png" class="img-thumbnail" />

                    <div class="inner-text">
                        <?php echo $nomeAdministrador ?>
                        <br />
                        <small>Ultimo Login : 2 Weeks Ago </small>
                    </div>
                </div>

            </li>


            <li>
                <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Inicio</a>
            </li>
            <li>
                <a href="formAluguer.php"><i class="fa fa-desktop "></i>Alugar Livro</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-yelp "></i>Extra Pages <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="invoice.html"><i class="fa fa-coffee"></i>Invoice</a>
                    </li>
                    <li>
                        <a href="pricing.html"><i class="fa fa-flash "></i>Pricing</a>
                    </li>
                    <li>
                        <a href="component.html"><i class="fa fa-key "></i>Components</a>
                    </li>
                    <li>
                        <a href="social.html"><i class="fa fa-send "></i>Social</a>
                    </li>

                    <li>
                        <a href="message-task.html"><i class="fa fa-recycle "></i>Messages & Tasks</a>
                    </li>


                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-plus "></i>Cadastrar <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="formCliente.php"><i class="fa fa-plus "></i>Cliente</a>
                    </li>
                    <li>
                        <a href="formLivro.php"><i class="fa fa-plus "></i>Livro</a>
                    </li>
                    <li>
                        <a href="formFuncionario.php"><i class="fa fa-plus "></i>Funcionario</a>
                    </li>
                    <li>
                        <a href="formUsuario.php"><i class="fa fa-plus "></i>Usuario</a>
                    </li>
                    <li>
                        <a href="formAutor.php"><i class="fa fa-plus "></i>Autor</a>
                    </li>
                    <li>
                        <a href="formCategoria.php"><i class="fa fa-plus "></i>Categoria</a>
                    </li>
                    <li>
                        <a href="formTipoCliente.php"><i class="fa fa-plus "></i>Tipo de Cliente</a>
                    </li>
                    <li>
                        <a href="formTipoUtilizador.php"><i class="fa fa-plus "></i>Tipo de Utilizador</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="gallery.php"><i class="fa fa-anchor "></i>Galeria</a>
            </li>
            <li>
                <a href="login.php"><i class="fa fa-sign-in "></i>Sair</a>
            </li>


        </ul>

        </li>
        </ul>
        </li>
        </ul>

    </div>

</nav>