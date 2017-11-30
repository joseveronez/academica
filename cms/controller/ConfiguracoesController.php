<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class ConfiguracoesController extends Controller {


		public function gerenciar_pagina() {
			try {
                $dados = Configuracoes::retrieveByPK(1);

				setSession('paginaAtual', 'configuracoes/gerenciar');
				setSession('blackPage', 'configuracoes/gerenciar-pagina');
				$this->renderView('configuracoes/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = Configuracoes::retrieveByPK(1);
                
                if (!empty($_FILES['logo_header']['name'])) {
                    $handle = new upload($_FILES['logo_header']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->logo_header = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->facebook = $this->requestParametrosPost["facebook"];
                $dados->twitter = $this->requestParametrosPost["twitter"];
                $dados->instagram = $this->requestParametrosPost["instagram"];
                $dados->copyright = $this->requestParametrosPost["copyright"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/configuracoes/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
    }
?>