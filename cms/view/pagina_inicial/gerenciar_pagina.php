<?php
    $dados = $_SESSION["parametrosView"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home - Home</h1>
            <h4 class="sub-title">Home</h4>

            <form action="<?= caminhoSite ?>/pagina_inicial/atualizar-pagina" method="post" enctype="multipart/form-data">
            	<input type="hidden" name="id" value="<?= $dados->id ?>" />

            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Pagina Home</h3>
                    </div>
                    <div class="box-content">
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">titulo_objetivo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo_objetivo" maxlength="255" value="<?= $dados->titulo_objetivo ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">texto_objetivo</label>

                            <div class="col-sm-10">
                                <textarea name="texto_objetivo" type="text" class="form-control wmd-container tinyMCE" cols="10" rows="10"><?= $dados->texto_objetivo ?></textarea>
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">titulo_parallax</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo_parallax" maxlength="255" value="<?= $dados->titulo_parallax ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">texto_parallax</label>

                            <div class="col-sm-10">
                                <textarea name="texto_parallax" type="text" class="form-control wmd-container tinyMCE" cols="10" rows="10"><?= $dados->texto_parallax ?></textarea>
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">titulo_parallax_2</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo_parallax_2" maxlength="255" value="<?= $dados->titulo_parallax_2 ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">texto_parallax_2</label>

                            <div class="col-sm-10">
                                <textarea name="texto_parallax_2" type="text" class="form-control wmd-container tinyMCE" cols="10" rows="10"><?= $dados->texto_parallax_2 ?></textarea>
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">imagem_parallax</label>

                            <div class="col-sm-10">
                                <?php
                                    if (!empty($dados->imagem_parallax)) {
                                ?>
                                    <i class="fa fa-file-archive-o fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<?= $dados->imagem_parallax ?><br />
                                <?php
                                    }
                                ?>

                                <input type="file" name="imagem_parallax" id="imagem_parallax" class="inputfile inputfile-1" />
                                <label for="imagem_parallax"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
            		</div>
                </div><br>

            	<button type="submit" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Atualizar</button>
            </form>
        </section>
        <?php include caminhoFisico . "/view/parts/footer.php" ?>
    </div>
</div>