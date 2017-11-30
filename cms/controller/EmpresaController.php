<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class EmpresaController extends Controller {


		public function gerenciar_pagina() {
			try {
                $dados = Empresa::retrieveByPK(1);

				setSession('paginaAtual', 'empresa/gerenciar');
				setSession('blackPage', 'empresa/gerenciar-pagina');
				$this->renderView('empresa/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = Empresa::retrieveByPK(1);
                
                if (!empty($_FILES['banner']['name'])) {
                    $handle = new upload($_FILES['banner']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->banner = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->texto = $this->requestParametrosPost["texto"];
                $dados->titulo_objetivo = $this->requestParametrosPost["titulo_objetivo"];
                $dados->texto_objetivo = $this->requestParametrosPost["texto_objetivo"];
                $dados->titulo_missao = $this->requestParametrosPost["titulo_missao"];
                $dados->texto_missao = $this->requestParametrosPost["texto_missao"];
                $dados->titulo_equipe = $this->requestParametrosPost["titulo_equipe"];
                $dados->texto_equipe = $this->requestParametrosPost["texto_equipe"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/empresa/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
    }
?>