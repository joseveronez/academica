<?php
    $dados = $_SESSION["parametrosView"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;Informativos - Informativos</h1>
            <h4 class="sub-title">Informativos</h4>

            <form action="<?= caminhoSite ?>/informativos/atualizar-dados" method="post" enctype="multipart/form-data">
            	<input type="hidden" name="id" value="<?= $dados->id ?>" />

            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;&nbsp;Informativos</h3>
                    </div>
                    <div class="box-content">
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">data</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="data" maxlength="255" value="<?= $dados->data ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">descricao</label>

                            <div class="col-sm-10">
                                <textarea name="descricao" type="text" class="form-control tinyMCE" cols="10" rows="10"><?= $dados->descricao ?></textarea>
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