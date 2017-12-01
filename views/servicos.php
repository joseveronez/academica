<?php
    $servicos = Servicos::sql("SELECT * FROM servicos", SimpleOrm::FETCH_ONE);
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-header bg-azul branco-fonte">
    <div class="container Relative">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <h3 class="Light MarginT4p MarginB4p">Serviços</h3>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-aqua branco-fonte PaddingB5p">
    <div class="container Relative">
        <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs geral-bg MarginT7p" style="background-image: url('<?= RAIZSITE ?>/cms/uploads/<?= $servicos->banner ?>'); height: 300px;">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginT5p padding-zero">
            <span class="size18 Light"><?= $servicos->texto ?></span>
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