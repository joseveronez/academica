<?php 
    $informativos = Informativos::sql("SELECT * FROM informativos ORDER BY id DESC LIMIT 3");
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 PaddingT5p PaddingB3p bg-aqua-alt branco-fonte">
    <div class="container">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-zero">
            <h4 class="size25 Light" ><div class="bullet"></div>Informativos</h4>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <hr class="hr-azul">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB7p">
            <?php
                foreach($informativos as $informativo){
                    ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-zero MarginT3p">
                            <h4 class="margin-zero MarginT1p azul-fonte"><?= $informativo->data ?></h4>
                            <h4 class="margin-zero MarginT1p"><?= $informativo->descricao ?></h4>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</div>
<footer>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-cinza">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero centraliza-xs MarginT3p MarginB7p">
                <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs MarginT3p padding-zero">
                    <h4><i class="fa fa-bars cinza-fonte" aria-hidden="true"></i>&nbsp;<span class="aqua-fonte">MENU</span></h4>
                    <ul class="list-unstyled cinza-fonte PaddingT1p">
                        <li class="col-xs-6 size18 padding-zero MarginT1p"><a href="<?= RAIZSITE ?>" class="link-default link-footer cinza-fonte">Inicial</a></li>
                        <li class="col-xs-6 size18 padding-zero MarginT1p"><a href="<?= RAIZSITE ?>/clientes" class="link-default link-footer cinza-fonte">Clientes</a></li>
                        <li class="col-xs-6 size18 padding-zero MarginT1p"><a href="<?= RAIZSITE ?>/empresa" class="link-default link-footer cinza-fonte">Empresa</a></li>
                        <li class="col-xs-6 size18 padding-zero MarginT1p"><a href="<?= RAIZSITE ?>/links" class="link-default link-footer cinza-fonte">Links</a></li>
                        <li class="col-xs-6 size18 padding-zero MarginT1p"><a href="<?= RAIZSITE ?>/servicos" class="link-default link-footer cinza-fonte">Serviços</a></li>
                        <li class="col-xs-6 size18 padding-zero MarginT1p"><a href="<?= RAIZSITE ?>/contato" class="link-default link-footer cinza-fonte">Contato</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 MarginT3p padding-zero">
                    <h4><i class="fa fa-envelope cinza-fonte" aria-hidden="true"></i>&nbsp;<span class="aqua-fonte">CONTATO</span></h4>
                    <p class="cinza-fonte size18"><?= $contato->endereco ?>, <?= $contato->numero ?>, <br><?= $contato->complemento ?> - <?= $contato->bairro ?> - <?= $contato->cidade ?> - <?= $contato->uf ?></p>
                    <p class="cinza-fonte size18 MarginT1p"><a href="tel:44 3245 3765" class="link-default cinza-fonte link-footer"><?= $contato->telefone ?></a> <br> <a href="mailto:contato@academica.adm.br" class="link-default cinza-fonte link-footer"><?= $contato->email_contato ?></a></p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 MarginT3p padding-zero">
                    <h4><i class="fa fa-user-circle cinza-fonte" aria-hidden="true"></i>&nbsp;<span class="aqua-fonte">REDES SOCIAIS</span>
                    </h4>
                    <a href="<?= $config->facebook ?>" target="_blank">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle link-footer cinza-fonte fa-stack-2x"></i>
                            <i class="fa fa-facebook link-footer cinza-fonte-alt fa-stack-1x PaddingT1p" style="font-size:27px; "></i>
                        </span>
                    </a>
                    <a href="<?= $config->instagram ?>" target="_blank">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle link-footer cinza-fonte fa-stack-2x"></i>
                            <i class="fa fa-instagram link-footer cinza-fonte-alt fa-stack-1x" style="font-size:20px; "></i>
                        </span>
                    </a>
                    <a href="<?= $config->twitter ?>" target="_blank">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle  cinza-fonte fa-stack-2x"></i>
                            <i class="fa fa-twitter link-footer cinza-fonte-alt fa-stack-1x" style="font-size:20px; "></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero PaddingT3p PaddingB3p bg-cinza-escuro">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 MarginB3p centraliza-xs padding-zero">
                <h4 class="branco-fonte"><?= $config->copyright ?></h4>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-7 hidden-xs padding-zero">
                <img src="<?= RAIZSITE ?>/imagens/vale-white.png" class="img-responsive pull-right">
            </div>
            <div class="hidden-lg hidden-md hidden-sm col-xs-12 MarginB2p padding-zero">
                <img src="<?= RAIZSITE ?>/imagens/vale-white.png" class="img-responsive" style="margin: 0 auto;">
            </div>
        </div>
    </div>
</footer>
</body>
</html>

<script type="text/javascript">
</script>