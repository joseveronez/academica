<?php
    $dados = $_SESSION["parametrosView"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-flag" aria-hidden="true"></i>&nbsp;Banners Home - Gerenciar</h1>
            <h4 class="sub-title">Banners</h4>

            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><i class="fa fa-flag" aria-hidden="true"></i>&nbsp;&nbsp;Banners <button type="button" id="btnSalvaOrdem" class="btn btn-success sr-only">Salvar Ordem</button></h3>
                </div>
                <div class="box-content">
        			<div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                	<th>Ordem</th>
                                    <th>titulo</th>
                                    <th>imagem</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($dados as $item) {
                                ?>
                                <tr class="ordenacao" data-id="<?= $item->id ?>">
					                <td>
                                    	<?= $item->ordem ?>
                               		</td>
					                <td>
                                    	<?= $item->titulo ?>
                               		</td>
					                <td>
                                    	<?= $item->imagem ?>
                               		</td>
                                    <td>
                                        <center>
                                            <a href="<?= caminhoSite ?>/banners/editar-dados/<?= $item->id ?>"><button type="button" class="btn btn-default btn-editar"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Editar</button></a>
                                        </center>
                                    </td>
					                <td>
                                        <center>
                                            <a href="<?= caminhoSite ?>/banners/excluir-dados/<?= $item->id ?>" class="btnDeleteAjax"><button type="button" class="btn btn-default btn-excluir"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></a>
                                        </center>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
        		</div>
            </div><br>
        </section>
        <?php include caminhoFisico . "/view/parts/footer.php" ?>
    </div>
</div>
<script type="text/javascript">
    $("#example").dataTable({
        "pageLength": 50
    });

    $(document).ready(function() {
        $(".btnDeleteAjax").click(function(event) {
            /* Act on the event */
            event.preventDefault();
            var href = $(this).attr("href");
            var ele = $(this);
            swal({
                title: "Deseja realmente excluir?",
                text: "Você tem certeza que deseja excluir este item?",
                type: "warning", 
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Sim, pode excluir!",
                closeOnConfirm: false
            }, function(){
                $.ajax({
                    url: href
                })
                .done(function(data) {
                    console.log("success");
                    swal("Removido!", "Item removido com sucesso!", "success");
                    location.reload();
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });
            });
        });
    });
</script>
<script type="text/javascript" src="<?= caminhoSite ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript">
    $("#example").dataTable({
        "pageLength": 50
    });

    $(document).ready(function() {
    	var fixHelper = function(e, ui) {
            ui.children().each(function() {
                $(this).width($(this).width());
            });
            return ui;
        };
        
        $("#example tbody").sortable({
            helper: fixHelper
        }).disableSelection();

        $("#example tbody").on("sortchange", function( event, ui ) {
            if ($("#btnSalvaOrdem").hasClass("sr-only")) {
                $("#btnSalvaOrdem").removeClass("sr-only");
            }
        } );

        $("#btnSalvaOrdem").click(function(event) {
            var cont = 1;
            var ordem = [];
            $(".ordenacao").each(function(index, el) {
                ordem[cont] = $(this).attr("data-id");
                cont++;
            });
            $.ajax({
                url: "<?= caminhoSite ?>/banners/salva-ordem",
                type: "POST",
                data: {ordens: ordem},
            })
            .done(function(data) {
                console.log("success");
                console.log(data);
                location.reload();
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
        });
    });
</script>