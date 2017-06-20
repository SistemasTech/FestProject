
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
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Cadastrar</h1>
                <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

            </div>
        </div>
                <!-- /. ROW  -->
            
                 <!-- /. ROW  -->
        <div class="row">
			<?php
			$v = 0;
			if (isset ($_GET['clienteSalvo'])){
				$v = $_GET['clienteSalvo'];
			}
			if ($v == 1) {
				?>
				<script type="text/javascript">
					alert("Cadastro feito com sucesso")
				</script>
			<?php } ?>
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Adcionar Clientes
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                        <div class="form-group">
                                            <label>Nome Completo</label>
                                            <input class="form-control" type="text">
                                            <p class="help-block"></p>
                                        </div>
										<div class="form-group">
                                            <label>Telefone</label>
                                            <input class="form-control" type="text">
                                     <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="text">
                                     <p class="help-block"></p>
                                </div>
                                        <div class="form-group">
                                            <label clas="control-label" for="tipoCliente">Tipo de Cliente</label>
												<?php
													$db = testdb_connect();
													$tipoCliente = $db->query("select * from tipoCliente");
													?>
                                            <select name ="tipocliente" data-placeholder="Escolha o tipo de Cliente..." id="selectError2" data-rel="chosen">
                                                    <?php foreach ($tipocliente as $tipoclientes) {
                                                        ?>
                                                        <option value=""></option>
                                                        <option value="<?php echo $tipoclientes['codigoTipoCliente']; ?>"><?php echo $tipoclientes['tipoCliente']; ?></option>
                                                    <?php } ?>
                                                </select>
                                        </div>
                                        </div>
                                  
                                 
                                        <button type="submit" name="salvar" class="btn btn-info" >Salvar</button>
										<button type="reset" class="btn btn-info" >Cancelar</button>

                            </form>
                        </div>
                </div>
            </div>
                <!--/.Row-->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
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

        <!-- /. PAGE WRAPPER  -->