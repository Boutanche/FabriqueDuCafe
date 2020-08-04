<!-- End Wrapper -->
    </div>
</div>
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; La Fabrique du Café 2020</span><br>
                    <span>Copyright &copy; BiBi Informatique 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <?php include ('./lib/get_destroy.php');?>
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Fermer votre session ?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Selectionner "Fermer" si vous souhaitez fermer votre session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                        <a class="btn btn-primary" href="./index.php?deconnexion=1">Fermer</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card Modal -->
        <?php include './lib/methode_ajax.php';?>
        <div class="modal modal_card_position fade" id="CardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="card_modal" id="CardModal">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal_card_number">Numéro de la carte : <span id="card_number"><?php echo $this_card_id;?></span></h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-header">
                        <h5 class="modal-title" id="card_tiltle">Nom du propriétaire de la carte : <span><?php echo $message_modal_test;?></span></h5>
                    </div>
                    <div class="modal-body">Selectionner "Fermer" si vous souhaitez fermer votre session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                        <a class="btn btn-primary" href="./index.php?page=search_card">Fermer</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="./vendor/jquery/jquery.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="./vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="./js/sb-admin-2.min.js"></script>
        <!-- Page level plugins -->
        <script src="./vendor/chart.js/Chart.min.js"></script>
        <script src="./vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="./vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Page level custom scripts -->
        <script src="./js/demo/chart-area-demo.js"></script>
        <script src="./js/demo/chart-pie-demo.js"></script>
        <script src="./js/demo/datatables-demo.js"></script>
        <script src="./js/card_modal.js"></script>
    </body>
</html>