<!DOCTYPE html>
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
		<div>
			<!-- /. PAGE WRAPPER  -->
			<?php include_once 'conteudo.php' ?>
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
