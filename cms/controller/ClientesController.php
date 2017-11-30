<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class ClientesController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'clientes/gerenciar');
				setSession('blackPage', 'clientes/novos-dados');
				$this->renderView('clientes/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new Clientes();
                if (!empty($_FILES['logo']['name'])) {
                    $handle = new upload($_FILES['logo']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->logo = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->nome = $this->requestParametrosPost["nome"];
                $dados->caminho = $this->requestParametrosPost["caminho"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/clientes/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = Clientes::all();
                
                setSession('paginaAtual', 'clientes/gerenciar');
                setSession('blackPage', 'clientes/gerenciar-dados');
                $this->renderView('clientes/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = Clientes::retrieveByPK($id);

            setSession('paginaAtual', 'clientes/gerenciar');
            setSession('blackPage', 'clientes/gerenciar-dados');
            $this->renderView('clientes/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = Clientes::retrieveByPK($id);
                if (!empty($_FILES['logo']['name'])) {

                    $this->excluir_arquivo($dados->logo);

                    $handle = new upload($_FILES['logo']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->logo = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->nome = $this->requestParametrosPost["nome"];
                $dados->caminho = $this->requestParametrosPost["caminho"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/clientes/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = Clientes::retrieveByPk($id);
                $this->excluir_arquivo($dados->logo);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/clientes/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>