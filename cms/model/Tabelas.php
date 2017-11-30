<?php
	include caminhoFisico . '/orm/SimpleOrm.class.php';
	include caminhoFisico . '/orm/Connection.php';
	SimpleOrm::useConnection($mysqli, bancoDeDados);

	class Usuarios extends SimpleOrm {
		protected static
    	$table = 'usuarios';
	}

	class PaginaInicial extends SimpleOrm {
		protected static
		$table = 'pagina_inicial';
	}

	class Banners extends SimpleOrm {
		protected static
		$table = 'banners';
	}

	class Empresa extends SimpleOrm {
		protected static
		$table = 'empresa';
	}

	class Servicos extends SimpleOrm {
		protected static
		$table = 'servicos';
	}

	class PaginaCursos extends SimpleOrm {
		protected static
		$table = 'pagina_cursos';
	}

	class Cursos extends SimpleOrm {
		protected static
		$table = 'cursos';
	}

	class PaginaClientes extends SimpleOrm {
		protected static
		$table = 'pagina_clientes';
	}

	class Clientes extends SimpleOrm {
		protected static
		$table = 'clientes';
	}

	class Links extends SimpleOrm {
		protected static
		$table = 'links';
	}

	class Contato extends SimpleOrm {
		protected static
		$table = 'contato';
	}

	class Configuracoes extends SimpleOrm {
		protected static
		$table = 'configuracoes';
	}

	class Informativos extends SimpleOrm {
		protected static
		$table = 'informativos';
	}
?>