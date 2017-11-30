<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class BannersController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'banners/gerenciar');
				setSession('blackPage', 'banners/novos-dados');
				$this->renderView('banners/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new Banners();
                $dados->titulo = $this->requestParametrosPost["titulo"];
                if (!empty($_FILES['imagem']['name'])) {
                    $handle = new upload($_FILES['imagem']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->imagem = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->caminho = $this->requestParametrosPost["caminho"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/banners/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = Banners::all();
                
                setSession('paginaAtual', 'banners/gerenciar');
                setSession('blackPage', 'banners/gerenciar-dados');
                $this->renderView('banners/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = Banners::retrieveByPK($id);

            setSession('paginaAtual', 'banners/gerenciar');
            setSession('blackPage', 'banners/gerenciar-dados');
            $this->renderView('banners/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = Banners::retrieveByPK($id);
                $dados->titulo = $this->requestParametrosPost["titulo"];
                if (!empty($_FILES['imagem']['name'])) {

                    $this->excluir_arquivo($dados->imagem);

                    $handle = new upload($_FILES['imagem']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->imagem = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->caminho = $this->requestParametrosPost["caminho"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/banners/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = Banners::retrieveByPk($id);
                $this->excluir_arquivo($dados->imagem);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/banners/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function salva_ordem() {
            $ordens = $this->requestParametrosPost['ordens'];
            var_dump($ordens);
            unset($ordens[0]);
            $dados = Banners::all();
            foreach ($dados as $dado) {
                $dado->ordem = null;
                $dado->save();
            }
            foreach ($ordens as $key => $value) {
                $dado = Banners::retrieveByPK($value);
                $dado->ordem = $key;
                $dado->save();
            }
            echo 'Certo';
        }
    }
?>