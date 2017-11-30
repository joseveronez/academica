<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class ContatoController extends Controller {


		public function gerenciar_pagina() {
			try {
                $dados = Contato::retrieveByPK(1);

				setSession('paginaAtual', 'contato/gerenciar');
				setSession('blackPage', 'contato/gerenciar-pagina');
				$this->renderView('contato/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = Contato::retrieveByPK(1);
                
                $dados->titulo = $this->requestParametrosPost["titulo"];
                $dados->email_formulario = $this->requestParametrosPost["email_formulario"];
                $dados->mapa = $this->requestParametrosPost["mapa"];
                $dados->endereco = $this->requestParametrosPost["endereco"];
                $dados->numero = $this->requestParametrosPost["numero"];
                $dados->complemento = $this->requestParametrosPost["complemento"];
                $dados->bairro = $this->requestParametrosPost["bairro"];
                $dados->cidade = $this->requestParametrosPost["cidade"];
                $dados->uf = $this->requestParametrosPost["uf"];
                $dados->telefone = $this->requestParametrosPost["telefone"];
                $dados->whatsapp = $this->requestParametrosPost["whatsapp"];
                $dados->email_contato = $this->requestParametrosPost["email_contato"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/contato/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
    }
?>