<?php
	$prefixos['usuarios']['login'] =  array('Controller' => 'UsuariosController', 'Method' => 'login', 'logado' => false);
	$prefixos['usuarios']['faz_login'] =  array('Controller' => 'UsuariosController', 'Method' => 'faz_login', 'logado' => false);
	
	$prefixos['usuarios']['recuperar-senha'] =  array('Controller' => 'UsuariosController', 'Method' => 'recuperar_senha', 'logado' => false);
	$prefixos['usuarios']['email'] =  array('Controller' => 'UsuariosController', 'Method' => 'email', 'logado' => false);
	$prefixos['usuarios']['verificacao'] =  array('Controller' => 'UsuariosController', 'Method' => 'verificacao', 'logado' => false);
	$prefixos['usuarios']['nova-senha'] =  array('Controller' => 'UsuariosController', 'Method' => 'nova_senha', 'logado' => false);
	$prefixos['usuarios']['salvar-senha'] =  array('Controller' => 'UsuariosController', 'Method' => 'salvar_senha', 'logado' => false);

	$routes['teste'] = array('Controller' => 'TesteController', 'Method' => 'teste', 'logado' => false);
	$routes['senha'] = array('Controller' => 'TesteController', 'Method' => 'senha', 'logado' => false);
	$routes['gerarSenha'] = array('Controller' => 'TesteController', 'Method' => 'gerarSenha', 'logado' => false);
	$routes['comparaSenha'] = array('Controller' => 'TesteController', 'Method' => 'comparaSenha', 'logado' => false);
	$routes['verificaSenha'] = array('Controller' => 'TesteController', 'Method' => 'verificaSenha', 'logado' => false);

	$routes['home'] = array('Controller' => 'HomeController', 'Method' => 'index', 'logado' => true);
	$routes['nao-logado'] = array('Controller' => 'UsuariosController', 'Method' => 'nao_logado', 'logado' => false);
	$routes['logout'] = array('Controller' => 'UsuariosController', 'Method' => 'logout', 'logado' => true);
	$routes['default'] = array('Controller' => 'DefaultController', 'Method' => 'index', 'logado' => true);

	$prefixos['testando']['testando-rotas'] = array('Controller' => 'TestandoRotasController', 'Method' => 'testando_rotas', 'logado' => true);

	$prefixos['pagina_inicial']['gerenciar-pagina'] = array('Controller' => 'PaginaInicialController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['pagina_inicial']['atualizar-pagina'] = array('Controller' => 'PaginaInicialController', 'Method' => 'atualizar_pagina', 'logado' => true);

	$prefixos['banners']['novos-dados'] = array('Controller' => 'BannersController', 'Method' => 'novos_dados', 'logado' => true);
	$prefixos['banners']['salvar-dados'] = array('Controller' => 'BannersController', 'Method' => 'salvar_dados', 'logado' => true);
	$prefixos['banners']['gerenciar-dados'] = array('Controller' => 'BannersController', 'Method' => 'gerenciar_dados', 'logado' => true);
	$prefixos['banners']['editar-dados'] = array('Controller' => 'BannersController', 'Method' => 'editar_dados', 'logado' => true);
	$prefixos['banners']['atualizar-dados'] = array('Controller' => 'BannersController', 'Method' => 'atualizar_dados', 'logado' => true);
	$prefixos['banners']['excluir-dados'] = array('Controller' => 'BannersController', 'Method' => 'excluir_dados', 'logado' => true);
	$prefixos['banners']['salva-ordem'] = array('Controller' => 'BannersController', 'Method' => 'salva_ordem', 'logado' => true);

	$prefixos['empresa']['gerenciar-pagina'] = array('Controller' => 'EmpresaController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['empresa']['atualizar-pagina'] = array('Controller' => 'EmpresaController', 'Method' => 'atualizar_pagina', 'logado' => true);

	$prefixos['servicos']['gerenciar-pagina'] = array('Controller' => 'ServicosController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['servicos']['atualizar-pagina'] = array('Controller' => 'ServicosController', 'Method' => 'atualizar_pagina', 'logado' => true);

	$prefixos['pagina_cursos']['gerenciar-pagina'] = array('Controller' => 'PaginaCursosController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['pagina_cursos']['atualizar-pagina'] = array('Controller' => 'PaginaCursosController', 'Method' => 'atualizar_pagina', 'logado' => true);

	$prefixos['cursos']['novos-dados'] = array('Controller' => 'CursosController', 'Method' => 'novos_dados', 'logado' => true);
	$prefixos['cursos']['salvar-dados'] = array('Controller' => 'CursosController', 'Method' => 'salvar_dados', 'logado' => true);
	$prefixos['cursos']['gerenciar-dados'] = array('Controller' => 'CursosController', 'Method' => 'gerenciar_dados', 'logado' => true);
	$prefixos['cursos']['editar-dados'] = array('Controller' => 'CursosController', 'Method' => 'editar_dados', 'logado' => true);
	$prefixos['cursos']['atualizar-dados'] = array('Controller' => 'CursosController', 'Method' => 'atualizar_dados', 'logado' => true);
	$prefixos['cursos']['excluir-dados'] = array('Controller' => 'CursosController', 'Method' => 'excluir_dados', 'logado' => true);

	$prefixos['pagina_clientes']['gerenciar-pagina'] = array('Controller' => 'PaginaClientesController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['pagina_clientes']['atualizar-pagina'] = array('Controller' => 'PaginaClientesController', 'Method' => 'atualizar_pagina', 'logado' => true);

	$prefixos['clientes']['novos-dados'] = array('Controller' => 'ClientesController', 'Method' => 'novos_dados', 'logado' => true);
	$prefixos['clientes']['salvar-dados'] = array('Controller' => 'ClientesController', 'Method' => 'salvar_dados', 'logado' => true);
	$prefixos['clientes']['gerenciar-dados'] = array('Controller' => 'ClientesController', 'Method' => 'gerenciar_dados', 'logado' => true);
	$prefixos['clientes']['editar-dados'] = array('Controller' => 'ClientesController', 'Method' => 'editar_dados', 'logado' => true);
	$prefixos['clientes']['atualizar-dados'] = array('Controller' => 'ClientesController', 'Method' => 'atualizar_dados', 'logado' => true);
	$prefixos['clientes']['excluir-dados'] = array('Controller' => 'ClientesController', 'Method' => 'excluir_dados', 'logado' => true);

	$prefixos['links']['novos-dados'] = array('Controller' => 'LinksController', 'Method' => 'novos_dados', 'logado' => true);
	$prefixos['links']['salvar-dados'] = array('Controller' => 'LinksController', 'Method' => 'salvar_dados', 'logado' => true);
	$prefixos['links']['gerenciar-dados'] = array('Controller' => 'LinksController', 'Method' => 'gerenciar_dados', 'logado' => true);
	$prefixos['links']['editar-dados'] = array('Controller' => 'LinksController', 'Method' => 'editar_dados', 'logado' => true);
	$prefixos['links']['atualizar-dados'] = array('Controller' => 'LinksController', 'Method' => 'atualizar_dados', 'logado' => true);
	$prefixos['links']['excluir-dados'] = array('Controller' => 'LinksController', 'Method' => 'excluir_dados', 'logado' => true);

	$prefixos['contato']['gerenciar-pagina'] = array('Controller' => 'ContatoController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['contato']['atualizar-pagina'] = array('Controller' => 'ContatoController', 'Method' => 'atualizar_pagina', 'logado' => true);

	$prefixos['configuracoes']['gerenciar-pagina'] = array('Controller' => 'ConfiguracoesController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['configuracoes']['atualizar-pagina'] = array('Controller' => 'ConfiguracoesController', 'Method' => 'atualizar_pagina', 'logado' => true);

	$prefixos['informativos']['novos-dados'] = array('Controller' => 'InformativosController', 'Method' => 'novos_dados', 'logado' => true);
	$prefixos['informativos']['salvar-dados'] = array('Controller' => 'InformativosController', 'Method' => 'salvar_dados', 'logado' => true);
	$prefixos['informativos']['gerenciar-dados'] = array('Controller' => 'InformativosController', 'Method' => 'gerenciar_dados', 'logado' => true);
	$prefixos['informativos']['editar-dados'] = array('Controller' => 'InformativosController', 'Method' => 'editar_dados', 'logado' => true);
	$prefixos['informativos']['atualizar-dados'] = array('Controller' => 'InformativosController', 'Method' => 'atualizar_dados', 'logado' => true);
	$prefixos['informativos']['excluir-dados'] = array('Controller' => 'InformativosController', 'Method' => 'excluir_dados', 'logado' => true);
?>