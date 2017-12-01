<?php
    $pagina = PaginaClientes::sql("SELECT * FROM pagina_clientes", SimpleOrm::FETCH_ONE);
    $clientes = Clientes::sql("SELECT * FROM clientes");
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-header bg-azul branco-fonte">
    <div class="container Relative">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <h3 class="Light MarginT4p MarginB4p">Clientes</h3>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-aqua branco-fonte">
    <div class="container Relative">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginT5p padding-zero MarginT6p">
            <span class="size18 Light"><?= $pagina->texto ?></span>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginB2p padding-zero">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginT5p padding-zero">
                <div class="row">
                    <?php
                        foreach ($clientes as $cliente){ 
                            ?>
                                <a href="<?= $cliente->caminho ?>" target="_blank">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 MarginB5p">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero Relative padding-zero geral-bg" style="background-image: url('<?= RAIZSITE ?>/cms/uploads/<?= $cliente->logo ?>'); height: 200px;">
                                        </div>
                                        <h3 class="Light text-center branco-fonte">Acadêmica</h3>
                                    </div>
                                </a>
                            <?php
                        }
                    ?>
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