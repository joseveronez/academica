<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class PaginaInicialController extends Controller {


		public function gerenciar_pagina() {
			try {
                $dados = PaginaInicial::retrieveByPK(1);

				setSession('paginaAtual', 'pagina_inicial/gerenciar');
				setSession('blackPage', 'pagina_inicial/gerenciar-pagina');
				$this->renderView('pagina_inicial/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = PaginaInicial::retrieveByPK(1);
                
                $dados->titulo_objetivo = $this->requestParametrosPost["titulo_objetivo"];
                $dados->texto_objetivo = $this->requestParametrosPost["texto_objetivo"];
                $dados->titulo_parallax = $this->requestParametrosPost["titulo_parallax"];
                $dados->texto_parallax = $this->requestParametrosPost["texto_parallax"];
                $dados->titulo_parallax_2 = $this->requestParametrosPost["titulo_parallax_2"];
                $dados->texto_parallax_2 = $this->requestParametrosPost["texto_parallax_2"];
                if (!empty($_FILES['imagem_parallax']['name'])) {
                    $handle = new upload($_FILES['imagem_parallax']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->imagem_parallax = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/pagina_inicial/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
    }
?>