<?php
    $link = $_SERVER['REQUEST_URI'];
    $link_array = explode('/',$link);
    $page = end($link_array);
    
    if($page == "online"){
        $cursos = Cursos::sql("SELECT * FROM cursos WHERE tipo = 1");
    }elseif ($page == "presencial"){
        $cursos = Cursos::sql("SELECT * FROM cursos WHERE tipo = 2");
    }

    $pagina = PaginaCursos::sql("SELECT * FROM pagina_cursos",  SimpleOrm::FETCH_ONE);
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-header bg-azul branco-fonte">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <h3 class="Light MarginT4p MarginB4p">Cursos</h3>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-aqua branco-fonte PaddingB7p">
    <div class="container Relative">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginT5p padding-zero MarginT5p">
            <h4 class="Bold"><?= $pagina->titulo ?></h4>
            <span class="size18 Light"><?= $pagina->texto ?></span>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginB2p padding-zero">
            <div class="row padding-zero">
                <?php 
                    foreach($cursos as $curso){
                        ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 MarginT5p">
                                <a href="<?= RAIZSITE ?>/informacoes/<?= $curso->slug ?>" target="_blank" class="link-default">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero Relative padding-zero geral-bg" style="background-image: url('<?= RAIZSITE ?>/cms/uploads/<?= $curso->imagem ?>'); height: 200px;">
                                        <h3 class="text-img Absolute text-center branco-fonte margin-zero PaddingT2p PaddingB2p Light"><?= $curso->nome ?></h3>
                                    </div>
                                </a>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>