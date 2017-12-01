<nav class="navbar navbar-default navbar-transparente navbar-fixed-top">
	<div class="container" id="navbar-height" style="">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="margin-right: 0px">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= RAIZSITE ?>">
					<img src="<?= RAIZSITE ?>/cms/uploads/<?= $config->logo_header ?>" class="img-responsive img-logo" style="margin: 0 auto!important; height: 80px;">
				</a>
			</div>
		</div>
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 padding-zero">
			<div id="navbar" class="navbar-collapse collapse navbar-right">
				<ul class="nav navbar-nav">
					<li><a class="Uppercase item-header azul-fonte size15" href="<?= RAIZSITE ?>">INICIAL</a></li>
					<li><a class="Uppercase item-header azul-fonte size15" href="<?= RAIZSITE ?>/empresa">EMPRESA</a></li>
					<li><a class="Uppercase item-header azul-fonte size15" href="<?= RAIZSITE ?>/servicos">SERVIÇOS</a></li>
					<li class="dropdown">
                        <a class="Uppercase item-header azul-fonte size15 dropdown-toggle" data-toggle="dropdown" href="#">TREINAMENTOS</a>
                        <ul class="dropdown-menu menu-treinamentos">
                            <li><a href="<?= RAIZSITE ?>/cursos/presencial" class="azul-fonte">PRESENCIAL</a></li>
                            <li><a href="<?= RAIZSITE ?>/cursos/online" class="azul-fonte">ONLINE</a></li>
                        </ul>
                    </li>
					<li><a class="Uppercase item-header azul-fonte size15" href="<?= RAIZSITE ?>/clientes">CLIENTES</a></li>
					<li><a class="Uppercase item-header azul-fonte size15" href="<?= RAIZSITE ?>/links">LINKS</a></li>
					<li><a class="Uppercase item-header azul-fonte size15" href="<?= RAIZSITE ?>/contato">CONTATO</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>