<?php
    $dados = $_SESSION["parametrosView"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-building" aria-hidden="true"></i>&nbsp;Empresa - Empresa</h1>
            <h4 class="sub-title">Empresa</h4>

            <form action="<?= caminhoSite ?>/empresa/atualizar-pagina" method="post" enctype="multipart/form-data">
            	<input type="hidden" name="id" value="<?= $dados->id ?>" />

            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-building" aria-hidden="true"></i>&nbsp;&nbsp;Empresa</h3>
                    </div>
                    <div class="box-content">
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">banner</label>

                            <div class="col-sm-10">
                                <?php
                                    if (!empty($dados->banner)) {
                                ?>
                                    <i class="fa fa-file-archive-o fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<?= $dados->banner ?><br />
                                <?php
                                    }
                                ?>

                                <input type="file" name="banner" id="banner" class="inputfile inputfile-1" />
                                <label for="banner"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">texto</label>

                            <div class="col-sm-10">
                                <textarea name="texto" type="text" class="form-control wmd-container tinyMCE" cols="10" rows="10"><?= $dados->texto ?></textarea>
                            </div>
                        </div><br>
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
                            <label class="col-sm-2 control-label" align="right">titulo_missao</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo_missao" maxlength="255" value="<?= $dados->titulo_missao ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">texto_missao</label>

                            <div class="col-sm-10">
                                <textarea name="texto_missao" type="text" class="form-control wmd-container tinyMCE" cols="10" rows="10"><?= $dados->texto_missao ?></textarea>
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">titulo_equipe</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo_equipe" maxlength="255" value="<?= $dados->titulo_equipe ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">texto_equipe</label>

                            <div class="col-sm-10">
                                <textarea name="texto_equipe" type="text" class="form-control wmd-container tinyMCE" cols="10" rows="10"><?= $dados->texto_equipe ?></textarea>
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