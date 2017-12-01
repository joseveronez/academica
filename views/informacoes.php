<?php
    $link = $_SERVER['REQUEST_URI'];
    $link_array = explode('/',$link);
    $page = end($link_array);
    $cursos = Cursos::sql("SELECT * FROM cursos WHERE slug = '$page'", SimpleOrm::FETCH_ONE);
    $rand = Cursos::sql("SELECT * FROM cursos WHERE slug != '$page' ORDER BY RAND() LIMIT 9");
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-header bg-azul branco-fonte">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <h3 class="Light MarginT4p MarginB4p">Curso - Gestão de Pessoas</h3>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-aqua branco-fonte PaddingB5p">
    <div class="container Relative">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginT7p">
            <div class="hidden-lg hidden-md hidden-sm col-xs-12 MarginB5p padding-zero">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero Relative padding-zero geral-bg" style="background-image: url('<?= RAIZSITE ?>/imagens/consultoria.png'); height: 200px;">
                    <h3 class="text-img Absolute text-center margin-zero PaddingT2p PaddingB2p Light" style="">Nome do Curso</h3>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-zero">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                     <h4 class="Bold MarginT0p">Objetivo</h4>
                     <span class="size18 Light"><?= $cursos->descricao ?></span>
                     <h4 class="Bold MarginT3p">Carga Horária: <span class="size25 azul-fonte"><?= $cursos->carga_horaria ?></span></h4>
                     <h3 class="Bold azul-fonte"><?= $cursos->localidade ?><span class="Light">(opção de localidade)</span></h3>
                     
                     <h4 class="Bold branco-fonte MarginT3p">Requisitos</h4>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginT3p">
                         <span class="size18"><?= $cursos->requisitos ?></span>
                     </div>
                     <a href="<?= RAIZSITE ?>/contato" target="_blank" class="btn btn-default btn-informacoes MarginT5p">Mais Informações</a>
                 </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-zero">
                <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs padding-zero Relative padding-zero geral-bg" style="background-image: url('<?= RAIZSITE ?>/cms/uploads/<?= $cursos->imagem ?>'); height: 200px;">
                    <h3 class="text-img Absolute text-center margin-zero PaddingT2p PaddingB2p Light" style=""><?= $cursos->nome ?></h3>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginT3p">
                    <a href="<?= $cursos->link_matricula ?>" target="_blank" class="btn btn-default btn-matricula">matricule-se</a>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginT5p MarginB2p">
            <h4 class="Bold">Conheça também</h4>
             <div class="owl-carousel owl-theme MarginT1p MarginB1p" id="opcoes">
                 <?php 
                    foreach($rand as $curso){
                    ?>
                        <a href="<?= RAIZSITE ?>/informacoes/<?= $curso->slug ?>" target="_blank">
                            <div class="geral-bg Relative" style="background-image: url('<?= RAIZSITE ?>/cms/uploads/<?= $curso->imagem ?>'); height: 200px;">
                                <h3 class="text-img Absolute text-center margin-zero PaddingT2p PaddingB2p Light branco-fonte"><?= $curso->nome ?></h3>
                            </div>
                        </a>
                    <?php
                    }
                 ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#opcoes').owlCarousel({
	       /* loop: true, */
	       margin: 20,
	       nav: false,
	       dots: false,
	       autoplay: true,
            loop: true,
	       responsive:{
	           0:{
	               items:1
	           },
	           768:{
	               items:3
	           },
	           992:{
	               items:3
	           }
	       }
	   });
    });
</script>