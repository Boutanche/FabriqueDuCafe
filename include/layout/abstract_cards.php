<div class="container-fluid">
<?php include ('./lib/post_all_cards.php');?>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is an "Usine à Gaz" : This is doc for v.2.0 <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Points</th>
                        <th>Date de création</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Points</th>
                        <th>Date de création</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach ($ar_all_card as $key => $tb_card){
                            echo '    <tr class="line_customer"><td><a class="dropdown-item" href="#" data-toggle="modal" data-target="#CardModal" id="'.$tb_card['id_customer'].'">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    '.$tb_card['lastname'].'
                </a></td><td>'.$tb_card['firstname'].'</td><td>'.$tb_card['fidel_point'].'<td>'.$tb_card['creation_date'].'</td></tr>';
                        };?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php echo ('Spy : $number_modify = ' .$number_modify); ?>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Card Modal -->
<div class="modal modal_card_position fade" id="CardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php include './lib/fucking_ajax_methode.php';?>
    <div class="modal-dialog" role="document">
        <div class="card_modal" id="CardModal">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_card_number">Numéro de la carte : <span id="card_number"></span></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="row modal-body">
                <div class="col-6">
                    <h6 class="modal-title" id="card_tiltle">Propriétaire de la carte :</h6>
                </div>
                <div class="col-6">
                    <h6 class="modal-dialog" id="card_title"><span id="card_firstname"></span></h6>
                    <h6 class="modal-dialog"><span id="card_name"></span>&nbsp</h6>
                </div>
                <div class="col-12">
                    <h6 class="modal-dialog">Version Alpha : Annuler pour accéder à modification de cette carte, dans cette version.</h6>
                </div>
            </div>
            <hr class="modal-body">
            <div class="row modal-body">
                <div class="col-6">
                    <h6>Nombre de points : <span id="card_points"></span></h6>
                </div>
                <div class="col-6">
                    <h6>Commentaires : <span id="card_comment"></span></h6>
                </div>
            </div>
            <div class="row modal-body">
                <div class="col-4">
                    <div class="btn btn-danger" type="button" id="set_zero">Utiliser les points</div>
                </div>
                <div class="col-4">
                    <div class="btn btn-success" type="button" id="add_one_point">Ajouter un point</div>
                </div>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer" id="">
                <form class="user" action="./index.php?page=modify_card" method="POST" id="card_user>">
                    <div id="modify">
                        <!--Here AJAX respond Btn for modify-->
                    </div>
                </form>
                <a class="btn btn-primary" href="./index.php?page=search_card">Fermer</a>
            </div>
        </div>
    </div>
</div>