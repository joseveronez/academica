<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-header bg-azul branco-fonte">
    <div class="container Relative">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <h3 class="Light MarginT4p MarginB4p">Serviços</h3>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-aqua branco-fonte PaddingB5p">
    <div class="container Relative">
        <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs geral-bg MarginT5p" style="background-image: url('<?= RAIZSITE ?>/imagens/parallax.jpg'); height: 300px;">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginT5p padding-zero">
            <p class="size18 Light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a egestas nulla. Quisque non ultricies sem. Nunc arcu velit, viverra eu lacinia sed, vehicula eget libero. Praesent vel mauris a mi consectetur dignissim at vel mi. Nullam iaculis nulla mi, ac dignissim libero eleifend id. Aenean auctor fringilla viverra. Nulla facilisi. Quisque laoreet urna nulla, aliquet finibus est gravida et. Maecenas vehicula diam non dolor molestie suscipit. Proin cursus tortor ligula, sit amet feugiat turpis eleifend eget. Aenean tincidunt sodales ex quis euismod. Nulla facilisi.</p>
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