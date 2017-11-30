<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class LinksController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'links/gerenciar');
				setSession('blackPage', 'links/novos-dados');
				$this->renderView('links/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new Links();
                $dados->nome = $this->requestParametrosPost["nome"];
                $dados->caminho = $this->requestParametrosPost["caminho"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/links/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = Links::all();
                
                setSession('paginaAtual', 'links/gerenciar');
                setSession('blackPage', 'links/gerenciar-dados');
                $this->renderView('links/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = Links::retrieveByPK($id);

            setSession('paginaAtual', 'links/gerenciar');
            setSession('blackPage', 'links/gerenciar-dados');
            $this->renderView('links/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = Links::retrieveByPK($id);
                $dados->nome = $this->requestParametrosPost["nome"];
                $dados->caminho = $this->requestParametrosPost["caminho"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/links/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = Links::retrieveByPk($id);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/links/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>