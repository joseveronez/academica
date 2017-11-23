<div id="viewpoint-footer"></div>
<div class="hidden-xs" id="contato" style="background: url('<?= RAIZSITE ?>/imagens/banner-rodape.jpg'); background-size: cover; background-position: center bottom; background-attachment: fixed; height: 350px;"></div>
<footer class="letter-spacing1">
	<div class="bg-azul">
		<div class="container conteudo-rodape">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h3 class="Roboto Regular branco-fonte Uppercase size30">Fale com<br>a gente</h3>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dados-contato">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-zero size13 branco-fonte">
					<div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 padding-zero">
						<p class="Roboto Regular Uppercase">Tel.: <a class="link-default branco-fonte" href="tel:3081 0979">(41) <span class="size18">3081-0979</span></a></p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 padding-zero">
						<a href="https://www.facebook.com/TSA-Consultoria-Engenharia-1010772618990625/" target="_blank"><img src="<?= RAIZSITE ?>/imagens/facebook-white.png" class="facebook-icon"></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 hidden-sm hidden-xs padding-zero">&nbsp;</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-zero branco-fonte size13 bloco-endereco">
					<p class="Roboto Medium Uppercase margin-zero">São Mateus do Sul/PR</p>
					<p class="Roboto margin-zero">PR 151 KM 453</p>
					<p class="Roboto margin-zero">Colônia Taquaral</p>
					<p class="Roboto margin-zero">CEP: 83.900-000</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-zero branco-fonte size13 bloco-endereco">
					<p class="Roboto Medium Uppercase margin-zero">São José dos Pinhais/PR</p>
					<p class="Roboto margin-zero">Rua Norberto de Brito, 2181</p>
					<p class="Roboto margin-zero">Centro • CEP: 83.005-290</p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
					<div class="google-maps">
					    <iframe id="iframeMaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.1273022933374!2d-49.196789558110126!3d-25.534136136277922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcf0afaf40b28f%3A0x7cf03286f865673c!2sR.+Norberto+de+Brito%2C+2181+-+Centro%2C+S%C3%A3o+Jos%C3%A9+dos+Pinhais+-+PR%2C+83005-290!5e0!3m2!1spt-BR!2sbr!4v1497739162074"></iframe>
					</div>
				</div>
			</div>
			<div class="col-lg-1 col-md-1 hidden-sm hidden-xs">&nbsp;</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
				<form class="form-horizontal Roboto branco-fonte size13" method="post" id="formulario" action="<?= RAIZSITE ?>/enviar">
					<p class="Medium Uppercase">Nome *</p>
					<input type="text" class="form-control" name="nome" required><br />

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-zero">
						<p class="Medium Uppercase">E-mail *</p>
						<input type="email" class="form-control" name="email" required><br />
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-zero">
						<p class="Medium Uppercase">Telefone *</p>
						<input type="text" class="form-control" name="telefone" maxlength="16" id="telefone" onkeyup="javascript:Trim();" onKeyPress="MascaraCelular(formulario.telefone);" onBlur="ValidaCelular(formulario.telefone);" required><br />
					</div>
					<p class="Medium Uppercase">Assunto *</p>
					<input type="text" class="form-control" name="assunto" required><br />

					<p class="Medium Uppercase">Mensagem *</p>
					<textarea class="form-control" cols="3" rows="8" name="mensagem" required></textarea>

					<button type="submit" class="btn btn-submit Medium Uppercase pull-right">Enviar</button>
				</form>
			</div>
		</div>
	</div>
	<div class="bg-azul-marinho">
		<div class="container conteudo-copyright">
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 Roboto branco-fonte">
				<p class="size14">© 2017 TSA • Todos os direitos reservados</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">&nbsp;</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 Roboto branco-fonte">
				<p class="size13"><a class="link-default branco-fonte" href="http://www.pepperscriacao.com" target="_blank">pepperscriacao<span class="azul-marinho-fonte">.com</span></a></p>
			</div>
		</div>
	</div>
</footer>
</body>
</html>

<script type="text/javascript">
</script>