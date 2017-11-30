<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class PaginaCursosController extends Controller {


		public function gerenciar_pagina() {
			try {
                $dados = PaginaCursos::retrieveByPK(1);

				setSession('paginaAtual', 'pagina_cursos/gerenciar');
				setSession('blackPage', 'pagina_cursos/gerenciar-pagina');
				$this->renderView('pagina_cursos/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = PaginaCursos::retrieveByPK(1);
                
                $dados->titulo = $this->requestParametrosPost["titulo"];
                $dados->texto = $this->requestParametrosPost["texto"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/pagina_cursos/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
    }
?>