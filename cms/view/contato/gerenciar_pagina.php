<?php
    $dados = $_SESSION["parametrosView"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;Contato - Contato</h1>
            <h4 class="sub-title">Contato</h4>

            <form action="<?= caminhoSite ?>/contato/atualizar-pagina" method="post" enctype="multipart/form-data">
            	<input type="hidden" name="id" value="<?= $dados->id ?>" />

            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;&nbsp;Contato</h3>
                    </div>
                    <div class="box-content">
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">titulo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo" maxlength="255" value="<?= $dados->titulo ?>" />
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">email_formulario</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email_formulario" maxlength="255" value="<?= $dados->email_formulario ?>" />
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">mapa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="mapa" maxlength="400" value="<?= $dados->mapa ?>" />
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">endereco</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="endereco" maxlength="255" value="<?= $dados->endereco ?>" />
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">numero</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="numero" maxlength="255" value="<?= $dados->numero ?>" />
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">complemento</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="complemento" maxlength="255" value="<?= $dados->complemento ?>" />
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">bairro</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="bairro" maxlength="255" value="<?= $dados->bairro ?>" />
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">uf</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="uf" maxlength="2" value="<?= $dados->uf ?>" />
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">telefone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="telefone" maxlength="255" value="<?= $dados->telefone ?>" />
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">whatsapp</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="whatsapp" maxlength="255" value="<?= $dados->whatsapp ?>" />
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">email_contato</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email_contato" maxlength="255" value="<?= $dados->email_contato ?>" />
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