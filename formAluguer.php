<?php
include_once 'app_conect.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php include_once 'cabecario.php' ?>
    <body>
        <div id="wrapper">
            <div>
                <!-- /. NAV TOP  -->
                <?php include_once 'menu_horizontal.php' ?>
            </div>
            <div>
                <!--</. NAV SIDE  -->
                <?php include_once 'menu_vertical.php' ?>
            </div>

            <div id="page-wrapper">
                <div id="page-inner">
                    <!--/Conteudo-->
                    <?php
                    for ($i = 0; $i < 9; $i++) {
                        ?>
                        <div id="nivel-1">
                            <div id="nivel-2">
                                <div>
                                    <figure><img src="assets/img/livros/romeu_julieta.png" /></figure>
                                    <figcaption>
                                        <ul>
                                            <li></li>
                                            <li><a href="">Romeu e Julieta</a></li>
                                            <li><span>+add</span></li>
                                        </ul>
                                    </figcaption>
                                </div>
                            </div>
                        </div>
                        <aside>
                        </aside>
                    <?php } ?>	
                </div>
                <!-- /. PAGE INNER  -->
            </div>
        </div>    
        <!-- /. WRAPPER  -->
        <div>
            <?php include_once 'rodape.php' ?>
        </div>
        <!-- /. FOOTER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>



    </body>
</html>