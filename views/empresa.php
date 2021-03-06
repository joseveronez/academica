<?php
    $empresa = Empresa::sql("SELECT * FROM empresa", SimpleOrm::FETCH_ONE)
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-header bg-azul branco-fonte">
    <div class="container Relative">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <h3 class="Light MarginT4p MarginB4p">Empresa</h3>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-aqua branco-fonte PaddingB5p">
    <div class="container Relative">
        <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs geral-bg MarginT7p" style="background-image: url('<?= RAIZSITE ?>/cms/uploads/<?= $empresa->banner ?>'); height: 300px;">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginT5p padding-zero">
            <span class="size18 Light"><?= $empresa->texto ?></span>
            <h4 class="MarginB0p MarginT4p Bold"><?= $empresa->titulo_objetivo ?></h4>
            <span class="size18 Light"><?= $empresa->texto_objetivo ?></span>
            <h4 class="MarginB0p MarginT4p Bold"><?= $empresa->titulo_missao ?></h4>
            <span class="size18 Light"><?= $empresa->texto_missao ?></span>
            <h4 class="MarginB0p MarginT4p Bold"><?= $empresa->titulo_equipe ?></h4>
            <span class="size18 Light"><?= $empresa->texto_equipe ?></span>
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