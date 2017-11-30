<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class InformativosController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'informativos/gerenciar');
				setSession('blackPage', 'informativos/novos-dados');
				$this->renderView('informativos/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new Informativos();
                $dados->data = $this->requestParametrosPost["data"];
                $dados->descricao = $this->requestParametrosPost["descricao"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/informativos/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = Informativos::all();
                
                setSession('paginaAtual', 'informativos/gerenciar');
                setSession('blackPage', 'informativos/gerenciar-dados');
                $this->renderView('informativos/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = Informativos::retrieveByPK($id);

            setSession('paginaAtual', 'informativos/gerenciar');
            setSession('blackPage', 'informativos/gerenciar-dados');
            $this->renderView('informativos/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = Informativos::retrieveByPK($id);
                $dados->data = $this->requestParametrosPost["data"];
                $dados->descricao = $this->requestParametrosPost["descricao"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/informativos/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = Informativos::retrieveByPk($id);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/informativos/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>