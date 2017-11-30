<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class CursosController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'cursos/gerenciar');
				setSession('blackPage', 'cursos/novos-dados');
				$this->renderView('cursos/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new Cursos();
                $dados->nome = $this->requestParametrosPost["nome"];
                $dados->tipo = $this->requestParametrosPost["tipo"];
                $dados->slug = $this->requestParametrosPost["slug"];
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
                $dados->descricao = $this->requestParametrosPost["descricao"];
                $dados->carga_horaria = $this->requestParametrosPost["carga_horaria"];
                $dados->localidade = $this->requestParametrosPost["localidade"];
                $dados->requisitos = $this->requestParametrosPost["requisitos"];
                $dados->link_matricula = $this->requestParametrosPost["link_matricula"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/cursos/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = Cursos::all();
                
                setSession('paginaAtual', 'cursos/gerenciar');
                setSession('blackPage', 'cursos/gerenciar-dados');
                $this->renderView('cursos/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = Cursos::retrieveByPK($id);

            setSession('paginaAtual', 'cursos/gerenciar');
            setSession('blackPage', 'cursos/gerenciar-dados');
            $this->renderView('cursos/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = Cursos::retrieveByPK($id);
                $dados->nome = $this->requestParametrosPost["nome"];
                $dados->tipo = $this->requestParametrosPost["tipo"];
                $dados->slug = $this->requestParametrosPost["slug"];
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
                $dados->descricao = $this->requestParametrosPost["descricao"];
                $dados->carga_horaria = $this->requestParametrosPost["carga_horaria"];
                $dados->localidade = $this->requestParametrosPost["localidade"];
                $dados->requisitos = $this->requestParametrosPost["requisitos"];
                $dados->link_matricula = $this->requestParametrosPost["link_matricula"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/cursos/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = Cursos::retrieveByPk($id);
                $this->excluir_arquivo($dados->imagem);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/cursos/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>