
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


                        </div>
                    </div>
                    <!-- /. ROW  -->

                    <!-- /. ROW  -->
                    <div class="row">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    Actualizar Livro
                                </div>
                                <div class="panel-body">
                                    <?php
                                $db = testdb_connect();
                                if (isset($_GET['codigoLivro'])) {
                                $codigoLivro = $_GET['codigoLivro'];

                                $livro = $db->query("select * from livro where codigoLivro = $codigoLivro");
                                }
                                foreach ($livro as $livros) {

                                }
                                //action="./atualizar/atualizarDisciplina.php?idDisciplina=<?php echo $idDisciplina;
                                ?>
                                    <form role="form" method="POST" action="actualizar/actualizarLivro.php?codigoLivro=<?php echo $codigoLivro; ?>">
                                        <div class="form-group">
                                            <label>Titulo do Livro</label>
                                            <input class="form-control" name="tituloLivro" value="<?php echo $livros['tituloLivro']; ?>" type="text">
                                                <p class="help-block"></p>
                                        </div>

                                        <div class="form-group">
                                            <?php
                                            $db = testdb_connect();
                                            $autor = $db->query("SELECT *FROM autor");
                                            ?>

                                            <label>Autor</label>
                                            <select class="form-control" name="codigoAutor">
                                                <?php foreach ($autor as $autores) {
                                                    ?>
                                                    <option value="<?php echo $autores['codigoAutor'] ?>"><?php echo $autores['nomeAutor'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Edição</label>
                                            <input name="edicao" class="form-control" value="<?php echo $livros['edicao']; ?>" type="text">
                                                <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Ano de Lançamento</label>
                                            <input class="form-control" name="anoLancamento" value="<?php echo $livros['anolancamento']; ?>" type="text">
                                                <p class="help-block"></p>
                                        </div>


                                        <div class="form-group">
                                            <label>Quantidade</label>
                                            <input class="form-control" name="quantidade" value="<?php echo $livros['quantidade']; ?>" type="text">
                                                <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <?php
                                            $db = testdb_connect();
                                            $categoria = $db->query("SELECT *FROM categoria");
                                            ?>
                                            <label>Categoria</label>
                                            <select class="form-control" name="codigoCategoria">
                                                <?php foreach ($categoria as $categorias) {
                                                    ?>
                                                    <option value="<?php echo $categorias['codigoCategoria']; ?>"><?php echo $categorias['categoria']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Capa</label>
                                            <input class="form-control" type="file" name="capa">
                                                <p class="help-block"></p>
                                        </div>
                                        <button type="submit" name="salvar" class="btn btn-info" >Salvar</button>
                                        <button type="reset" class="btn btn-info" >Cancelar</button>

                                    </form>
                                </div>




                            </div>

                        </div>

                    </div>
                    <!--/.Row-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Livros
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Título</th>
                                            <th>Autor</th>
                                            <th>Categoria</th>
                                            <th>Ano de Lançamento</th>
                                            <th>Edição</th>
                                            <th>Quantidade</th>
                                            <th>Acções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $db = testdb_connect();
                                        $livro = $db->query("SELECT l.tituloLivro,l.anolancamento,l.edicao,l.quantidade,l.codigoLivro,a.codigoAutor,a.nomeAutor,c.codigoCategoria,c.categoria"
                                                . " FROM livro l, categoria c, autor a WHERE l.codigoCategoria=c.codigoCategoria and l.codigoAutor=a.codigoAutor");

                                        foreach ($livro as $livros) {
                                            ?>
                                            <tr>
                                                <td><?php echo $livros['codigoLivro']; ?></td>
                                                <td><?php echo $livros['tituloLivro']; ?></td>
                                                <td><?php echo $livros['nomeAutor']; ?></td>
                                                <td><?php echo $livros['categoria']; ?></td>
                                                <td><?php echo $livros['anolancamento']; ?></td>
                                                <td><?php echo $livros['edicao']; ?></td>
                                                <td><?php echo $livros['quantidade']; ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button data-toggle="dropdown" class="btn dropdown-toggle">Acções <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#"><i class="fa fa-bomb"></i>Eliminar</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="actualizar/actualizarLivro.php?codigoLivro=<?php echo $livros['codigoLivro']; ?>"><i class="glyphicon glyphicon-search"></i>Actualizar</a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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