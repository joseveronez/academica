<?php 
    $contato = Contato::sql("SELECT * FROM contato", SimpleOrm::FETCH_ONE)
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-header bg-azul branco-fonte">
    <div class="container Relative">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <h3 class="Light MarginT4p MarginB4p">Contato</h3>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero PaddingT5p PaddingB5p Relative bg-aqua" >
    <div class="container">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 padding-zero MarginB2p branco-fonte">
            <h4 class="Bold">Acadêmica</h4>
            <p><?= $contato->endereco ?>, <?= $contato->numero ?>, <br><?= $contato->complemento ?> - <?= $contato->bairro ?> - <?= $contato->cidade ?> - <?= $contato->uf ?>
            </p>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bloco-mapa">
                <div class="google-maps">
                    <iframe id="iframeMaps" src="<?= $contato->mapa ?>"></iframe>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 MarginT2p padding-zero">
            <form action="" class="form-horizontal Roboto Regular" id="formulario">
                <input type="text" class="form-control" name="nome" placeholder="NOME *" required><br>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-zero">
                    <input type="email" class="form-control" name="email" placeholder="E-MAIL *" required><br>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-zero">
                    <input type="text" class="form-control" name="telefone" placeholder="TELEFONE *" required><br>
                </div>
                
                <input type="text" class="form-control" name="assunto" placeholder="ASSUNTO *" required><br>
                <textarea class="form-control" name="mensagem" rows="8" cols="3" placeholder="MENSAGEM *"></textarea><br>
                <button type="submit" class="btn btn-formulario size13 pull-right">ENVIAR</button>
            </form>
        </div>
    </div>
</div>