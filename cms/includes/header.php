<body style="background-color:#d9d9d9">
	<div class="fluid">
    	<section>
            <nav class="navbar navbar-fixed-top collapse navbar-collapse" role="navigation">
                <div class="fluid">
                    <div class="collapse navbar-collapse collapse">
                        <ul class="nav navbar-nav pull-right">
                            <li>
                            	<a onClick="perfil()" id="iconeComberweb">
                                    <img src="<?= logoEmpresa ?>" class="img-responsive" style="height: 40px;">
                                </a>
                            </li>
                        </ul>
                	</div>
            	</div>
            </nav>
        </section>
        
        <section>
        	<div id="wrapper">
                <div id="sidebar-wrapper" style="background-color:#17181b">
                	<ul class="lista">

						<li class="item <?php if($_SESSION["paginaAtual"] == "pagina_inicial/") echo "menu-active-side" ?>">
                            <a href="<?= caminhoSite ?>/pagina_inicial/"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Pagina Home
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>

						<li class="item <?php if($_SESSION["paginaAtual"] == "pagina_inicial/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Pagina Home
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "pagina_inicial/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "banners/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/banners/novos-dados">Novo Banner</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "banners/gerenciar-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/banners/gerenciar-dados">Gerenciar Banner</a>
	                        </li>
                    	</ul>

						<li class="item <?php if($_SESSION["paginaAtual"] == "empresa/") echo "menu-active-side" ?>">
                            <a href="<?= caminhoSite ?>/empresa/"><i class="fa fa-building" aria-hidden="true"></i>&nbsp;&nbsp;Empresa
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>

						<li class="item <?php if($_SESSION["paginaAtual"] == "servicos/") echo "menu-active-side" ?>">
                            <a href="<?= caminhoSite ?>/servicos/"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;Servicos
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>

						<li class="item <?php if($_SESSION["paginaAtual"] == "pagina_cursos/") echo "menu-active-side" ?>">
                            <a href="<?= caminhoSite ?>/pagina_cursos/"><i class="fa fa-address-card" aria-hidden="true"></i>&nbsp;&nbsp;Cursos
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>

						<li class="item <?php if($_SESSION["paginaAtual"] == "pagina_cursos/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-address-card" aria-hidden="true"></i>&nbsp;&nbsp;Cursos
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "pagina_cursos/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "cursos/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/cursos/novos-dados">Novo Curso</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "cursos/gerenciar-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/cursos/gerenciar-dados">Gerenciar Cursos</a>
	                        </li>
                    	</ul>

						<li class="item <?php if($_SESSION["paginaAtual"] == "pagina_clientes/") echo "menu-active-side" ?>">
                            <a href="<?= caminhoSite ?>/pagina_clientes/"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;Clientes
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>

						<li class="item <?php if($_SESSION["paginaAtual"] == "pagina_clientes/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;Clientes
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "pagina_clientes/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "clientes/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/clientes/novos-dados">Novo cliente</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "clientes/gerenciar-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/clientes/gerenciar-dados">Gerenciar clientes</a>
	                        </li>
                    	</ul>

						<li class="item <?php if($_SESSION["paginaAtual"] == "links/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-link" aria-hidden="true"></i>&nbsp;&nbsp;Links
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "links/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "links/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/links/novos-dados">Novo Link</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "links/gerenciar-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/links/gerenciar-dados">Gerenciar Links</a>
	                        </li>
                    	</ul>

						<li class="item <?php if($_SESSION["paginaAtual"] == "contato/") echo "menu-active-side" ?>">
                            <a href="<?= caminhoSite ?>/contato/"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;&nbsp;Contato
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>

						<li class="item <?php if($_SESSION["paginaAtual"] == "configuracoes/") echo "menu-active-side" ?>">
                            <a href="<?= caminhoSite ?>/configuracoes/"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;&nbsp;Configurações
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>

						<li class="item <?php if($_SESSION["paginaAtual"] == "/") echo "menu-active-side" ?>">
                            <a href="<?= caminhoSite ?>//"><i class="fa " aria-hidden="true"></i>&nbsp;&nbsp;
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>

						<li class="item <?php if($_SESSION["paginaAtual"] == "informativos/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;&nbsp;Informativos
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "informativos/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "informativos/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/informativos/novos-dados">Novo Informativo</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "informativos/gerenciar-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/informativos/gerenciar-dados">Gerenciar Informativos</a>
	                        </li>
                    	</ul>
						<li class="item">
                            <a href="<?= caminhoSite ?>/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Logout</a>
                        </li>
					</ul>
                </div>
            </div>
        </section>