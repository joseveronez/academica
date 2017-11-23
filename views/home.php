<div class="fluid Relative">
	<div class="owl-carousel owl-theme" id="banners">
		<div class="item">
		    <div style="background: url('<?= RAIZSITE ?>/imagens/SLIDE.jpg'); background-size: cover; background-position: center center; height: 50vh; width: 100%">
		    	<div class="container">
    
		    	</div>
		    </div>
	    </div>
	    <div class="item">
		    <div style="background: url('<?= RAIZSITE ?>/imagens/SLIDE.jpg'); background-size: cover; background-position: center center; height: 50vh; width: 100%">
		    	<div class="container">
		    	</div>
		    </div>
	    </div>
	</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 PaddingT10p PaddingB10p bg-aqua branco-fonte">
    <div class="container Relative">    
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-8 padding-zero Absolute" style="top: -98px; z-index: 1; right: 32px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero pointer-a"><h4 class="size30 Light margin-zero text-center">CONSULTORIA</h4></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero pointer-b"><h4 class="size30 Light margin-zero text-center">ASSESSORIA</h4></div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginT3p">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-zero">
                <h4 class="size25 Light"><div class="bullet"></div>Nosso Objetivo</h4>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 padding-zero">
                <p class="Light">
                    É desenvolver um trabalho personalizado que consiste em, analisar individualmente 
                    cada caso, detectar possíveis problemas, e apontar soluções eficientes, que 
                    garantam a total regularidade das obrigações fiscais de nossos clientes.
                </p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <hr class="hr-azul MarginB4p">
            <div class="owl-carousel owl-theme MarginT1p MarginB1p" id="servicos">
                <div class="geral-bg" style="background-image: url('<?= RAIZSITE ?>/imagens/teste.jpg'); height: 200px;">
                    
                </div>
                <div class="geral-bg" style="background-image: url('<?= RAIZSITE ?>/imagens/teste.jpg'); height: 200px;">
                    
                </div>
                <div class="geral-bg" style="background-image: url('<?= RAIZSITE ?>/imagens/teste.jpg'); height: 200px;">
                    
                </div>
                <div class="geral-bg" style="background-image: url('<?= RAIZSITE ?>/imagens/teste.jpg'); height: 200px;">
                    
                </div>
                <div class="geral-bg" style="background-image: url('<?= RAIZSITE ?>/imagens/teste.jpg'); height: 200px;">
                    
                </div>
                <div class="geral-bg" style="background-image: url('<?= RAIZSITE ?>/imagens/teste.jpg'); height: 200px;">
                    
                </div>
                <div class="geral-bg" style="background-image: url('<?= RAIZSITE ?>/imagens/teste.jpg'); height: 200px;">
                    
                </div>
                <div class="geral-bg" style="background-image: url('<?= RAIZSITE ?>/imagens/teste.jpg'); height: 200px;">
                    
                </div>
                <div class="geral-bg" style="background-image: url('<?= RAIZSITE ?>/imagens/teste.jpg'); height: 200px;">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 parallax" style="background-image: url('<?= RAIZSITE ?>/imagens/parallax.jpg'); height: 300px;">
    <div class="container">
        
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 PaddingT10p PaddingB10p bg-aqua branco-fonte">
    <div class="container">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-zero">
            <h4 class="size25 Light" ><div class="bullet"></div>Informativos</h4>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <hr class="hr-azul">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB7p">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-zero MarginT3p">
                <h4 class="margin-zero MarginT1p azul-fonte">13 Nov 2013</h4>
                <h4 class="margin-zero MarginT1p">Orçamento aprova destinação de R$ 2,5 bilhões para o Fies</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-zero MarginT3p">
                <h4 class="margin-zero MarginT1p azul-fonte">13 Nov 2013</h4>
                <h4 class="margin-zero MarginT1p">Comissão aprova reestimativa de receita para o Orçamento de 2014</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-zero MarginT3p">
                <h4 class="margin-zero MarginT1p azul-fonte">13 Nov 2013</h4>
                <h4 class="margin-zero MarginT1p">Aprovação do piso salarial dos agentes de saúde preocupa Dilma, diz líder do PSC</h4>
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