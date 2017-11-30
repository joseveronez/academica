<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class PaginaClientesController extends Controller {


		public function gerenciar_pagina() {
			try {
                $dados = PaginaClientes::retrieveByPK(1);

				setSession('paginaAtual', 'pagina_clientes/gerenciar');
				setSession('blackPage', 'pagina_clientes/gerenciar-pagina');
				$this->renderView('pagina_clientes/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = PaginaClientes::retrieveByPK(1);
                
                $dados->texto = $this->requestParametrosPost["texto"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/pagina_clientes/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
    }
?>