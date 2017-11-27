<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginT22p bg-azul branco-fonte">
    <div class="container Relative">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <h3 class="Light MarginT4p MarginB4p">Empresa</h3>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-aqua branco-fonte PaddingB5p">
    <div class="container Relative">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 geral-bg MarginT5p" style="background-image: url('<?= RAIZSITE ?>/imagens/parallax.jpg'); height: 300px;">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginT5p padding-zero">
            <p class="size18 Light">A Acadêmica Consultoria é uma empresa especializada em Consultoria e Assessoria Tributária e Jurídica, com serviços voltados para atender a órgãos públicos, empresas privadas, contabilistas, e também a pessoas físicas que buscam prevenir e regularizar pendências junto à Receita Federal.	Dispomos de uma estrutura moderna e inteligente, preparada para atender os nossos clientes com toda transparência, segurança e credibilidade, já que possuímos amplo conhecimento na Legislação e no Fisco Previdenciário.</p>
            <h4 class="MarginB0p MarginT4p Bold">Objetivo</h4>
            <p class="size18 Light">Nosso objetivo é desenvolver um trabalho personalizado que consiste em, analisar individualmente cada caso, detectar possíveis problemas, e apontar soluções eficientes, que garantam a total regularidade das obrigações fiscais de nossos clientes.	</p>
            <h4 class="MarginB0p MarginT4p Bold">Missão</h4>
            <p class="size18 Light">A missão da Acadêmica Consultoria é manter-se totalmente informada e atualizada sobre todos os detalhes normativos e operacionais que regem a Legislação Previdenciária e seus trâmites burocráticos, visando prestar um serviço de excelência, com total competência e agilidade, agindo na necessidade específica de cada setor </p>
            <h4 class="MarginB0p MarginT4p Bold">Nossa Equipe</h4>
            <p class="size18 Light">Temos uma equipe formada por profissionais especializados e gabaritados, que estão em constante aprendizado, aperfeiçoamento e capacitação, que conferem aos mesmos, todos os requisitos necessários para dar uma assessoria completa.</p>
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