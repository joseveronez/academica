<?php
    $home = PaginaInicial::sql("SELECT * FROM pagina_inicial", SimpleOrm::FETCH_ONE);
    $banners = Banners::sql("SELECT * FROM banners");
    $rand = Cursos::sql("SELECT * FROM cursos WHERE slug != '$page' ORDER BY RAND() LIMIT 9");
?>
<div class="fluid Relative margin-header MarginT14p">
	<div class="owl-carousel owl-theme" id="banners">
        <?php 
            foreach($banners as $banner){
                ?>
                    <div class="item">
                        <a href="<?= $banner->caminho ?>" target="_blank">
                            <div style="background: url('<?= RAIZSITE ?>/imagens/SLIDE.jpg'); background-size: cover; background-position: center center; height: 30vh; width: 100%">
                                <div class="container">
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
            }
        ?>
	</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 PaddingT10p PaddingB10p bg-aqua branco-fonte">
    <div class="container Relative">    
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-8 padding-zero Absolute" style="top: -99px; z-index: 1; right: 32px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero pointer-a"><h4 class="size30 Light margin-zero text-center">CONSULTORIA</h4></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero pointer-b"><h4 class="size30 Light margin-zero text-center">ASSESSORIA</h4></div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginT3p">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-zero">
                <h4 class="size25 Light"><div class="bullet"></div><?= $home->titulo_objetivo ?></h4>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 padding-zero">
                <p class="Light">
                    <?= $home->texto_objetivo ?>
                </p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <hr class="hr-azul MarginB4p">
            <div class="owl-carousel owl-theme MarginT1p MarginB1p" id="servicos">
                <?php 
                    foreach($rand as $curso){
                    ?>
                        <a href="<?= RAIZSITE ?>/informacoes/<?= $curso->slug ?>" target="_blank">
                            <div class="geral-bg Relative" style="background-image: url('<?= RAIZSITE ?>/cms/uploads/<?= $curso->imagem ?>'); height: 200px;">
                                <h3 class="text-img Absolute text-center margin-zero PaddingT2p PaddingB2p Light branco-fonte"><?= $curso->nome ?></h3>
                            </div>
                        </a>
                    <?php
                    }
                 ?>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 parallax PaddingB10p" style="background-image: url('<?= RAIZSITE ?>/imagens/parallax.jpg'); height: 330px;">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <div class="col-lg-6 col-md-6 col-md-offset-6 col-sm-12 col-xs-12 MarginT10p padding-zero ">
                <div class="col-lg-1 col-md-1 hidden-sm hidden-xs bg-azul circulo" style="margin-right: 10px; top: 30px;">
                    <img src="<?= RAIZSITE ?>/imagens/ferramenta.png" class="img-responsive" style="margin: 0 auto;">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 padding-zero texto-parallax">
                    <h4 class="branco-fonte margin-zero"><?= $home->titulo_parallax ?></h4>
                    <p class="branco-fonte margin-zero">
                        <?= $home->texto_parallax ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginT10p">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 MarginB2p padding-zero ">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 padding-zero texto-parallax">
                    <h4 class="branco-fonte margin-zero"><?= $home->titulo_parallax_2 ?></h4>
                    <p class="branco-fonte margin-zero">
                        <?= $home->texto_parallax_2 ?>
                    </p>
                </div>
                <div class="col-lg-1 col-md-1 hidden-sm hidden-xs bg-azul circulo" style="margin-left: 10px; top: 5px; ">
                    <img src="<?= RAIZSITE ?>/imagens/livros.png" class="img-responsive" style="margin: 0 auto; height: 33px; weight: 33px;">
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#banners').owlCarousel({
    	    loop: true,
    	    dots: false,
    	    items: 1,
    	    autoplay: true
    	});
        $('#servicos').owlCarousel({
	       /* loop: true, */
	       margin: 20,
	       nav: false,
	       dots: true,
	       autoplay: true,
	       responsive:{
	           0:{
	               items:1
	           },
	           768:{
	               items:3
	           },
	           992:{
	               items:3
	           }
	       }
	   });
    });
</script>