<!-- Footer -->
<!-- <footer class="footer">
    <div class="container">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active" href="<?= base_url() ?>">
                    <span>
                        <i class="nav-icon bi bi-house"></i>
                        <span class="nav-text">Inicio</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>">
                    <span>
                        <i class="nav-icon bi bi-laptop"></i>
                        <span class="nav-text">Estadisticas</span>
                    </span>
                </a>
            </li>
            <li class="nav-item centerbutton">
                <div class="nav-link">
                    <span class="theme-radial-gradient">
                        <i class="close bi bi-x"></i>
                        <img src="<?= base_url('template/') ?>assets1/img/centerbutton.svg" class="nav-icon" alt="" />
                    </span>
                    <div class="nav-menu-popover justify-content-between">
                        <button type="button" class="btn btn-lg btn-icon-text" onclick="window.location.replace(<?= base_url() ?>);">
                            <i class="bi bi-credit-card size-32"></i><span>Pagar</span>
                        </button>

                        <button type="button" class="btn btn-lg btn-icon-text" onclick="window.location.replace(<?= base_url() ?>);">
                            <i class="bi bi-arrow-up-right-circle size-32"></i><span>Aumentar</span>
                        </button>

                        <button type="button" class="btn btn-lg btn-icon-text" onclick="window.location.replace(<?= base_url() ?>);">
                            <i class="bi bi-receipt size-32"></i><span>Retirar</span>
                        </button>

                        <button type="button" class="btn btn-lg btn-icon-text" onclick="window.location.replace(<?= base_url() ?>);">
                            <i class="bi bi-arrow-down-left-circle size-32"></i><span>Bloquear</span>
                        </button>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>">
                    <span>
                        <i class="nav-icon bi bi-gift"></i>
                        <span class="nav-text">Recompensas</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>">
                    <span>
                        <i class="nav-icon bi bi-wallet2"></i>
                        <span class="nav-text">Cartera</span>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</footer> -->
<!-- Footer ends-->

<!-- PWA app install toast message -->
<!-- <div class="position-fixed bottom-0 start-50 translate-middle-x  z-index-10">
    <div class="toast mb-3" role="alert" aria-live="assertive" aria-atomic="true" id="toastinstall" data-bs-animation="true">
        <div class="toast-header">
            <img src="<?= base_url('template/') ?>assets1/img/favicon32.png" class="rounded me-2" alt="...">
            <strong class="me-auto">Instala Royal Lion APP</strong>
            <small>Ahora</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <div class="row">
                <div class="col">
                    Click "Instalar" para instalarlo en tu Movil.
                </div>
                <div class="col-auto align-self-center ps-0">
                    <button class="btn-default btn btn-sm" id="addtohome">Instalar</button>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Required jquery and libraries -->
<script src="<?= base_url('template/assets1/js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?= base_url('template/assets1/js/popper.min.js') ?>"></script>
<script src="<?= base_url('template/assets1/vendor/bootstrap-5/js/bootstrap.bundle.min.js') ?>"></script>

<script src="<?= base_url('template/assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('template/assets/js/') ?>jquery-ui.min.js" type="text/javascript"></script>
<script src="<?= base_url('template/assets/js/detect.js') ?>"></script>
<script src="<?= base_url('template/assets/js/fastclick.js') ?>"></script>
<script src="<?= base_url('template/assets/js/jquery.slimscroll.js') ?>"></script>
<script src="<?= base_url('template/assets/js/jquery.blockUI.js') ?>"></script>
<script src="<?= base_url('template/assets/js/waves.js') ?>"></script>
<script src="<?= base_url('template/assets/js/wow.min.js') ?>"></script>
<script src="<?= base_url('template/assets/js/jquery.nicescroll.js') ?>"></script>
<script src="<?= base_url('template/assets/js/jquery.scrollTo.min.js') ?>"></script>


<!-- Datatables-->
<script src="<?= base_url('template/assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('template/assets/plugins/datatables/dataTables.bootstrap.js') ?>"></script>
<script src="<?= base_url('template/assets/plugins/datatables/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('template/assets/plugins/datatables/buttons.bootstrap.min.js') ?>"></script>
<script src="<?= base_url('template/assets/plugins/datatables/jszip.min.js') ?>"></script>
<script src="<?= base_url('template/assets/plugins/datatables/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('template/assets/plugins/datatables/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('template/assets/plugins/datatables/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('template/assets/plugins/datatables/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('template/assets/plugins/datatables/dataTables.fixedHeader.min.js') ?>"></script>
<script src="<?= base_url('template/assets/plugins/datatables/dataTables.keyTable.min.js') ?>"></script>
<script src="<?= base_url('template/assets/plugins/datatables/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('template/assets/plugins/datatables/responsive.bootstrap.min.js') ?>"></script>
<script src="<?= base_url('template/assets/plugins/datatables/dataTables.scroller.min.js') ?>"></script>
<!-- Datatables highlight -->
<script src="<?= base_url('template/assets/plugins/datatables/dataTables.searchHighlight.min.js') ?>"></script>
<script src="<?= base_url('template/assets/plugins/datatables/jquery.highlight.js') ?>"></script>
<!-- Datatable init js -->
<script src="<?= base_url('template/assets/pages/jquery.datatables.init.js') ?>"></script>


<!-- Plugins Js -->
<script src="<?= base_url('template/assets/plugins/multiselect/js/jquery.multi-select.js') ?>"></script>
<script src="<?= base_url('template/assets/plugins/jquery-quicksearch/jquery.quicksearch.js') ?>"></script>
<script src="<?= base_url('template/assets/plugins/select2/dist/js/select2.min.js') ?>"></script>


<!-- Sweet Alert js -->
<script src="<?= base_url('template/assets/plugins/bootstrap-sweetalert/') ?>sweet-alert.min.js"></script>
<script src="<?= base_url('template/assets/pages/') ?>jquery.sweet-alert.init.js"></script>
<!-- Toastr js -->
<script src="<?= base_url('template') ?>/assets/plugins/toastr/toastr.min.js"></script>
<!-- Validation js (Parsleyjs) -->
<script type="text/javascript" src="<?= base_url('template/assets/plugins/') ?>parsleyjs/dist/parsley.min.js"></script>


<!-- cookie js -->
<script src="<?= base_url('template/assets1/js/jquery.cookie.js') ?>"></script>

<!-- Customized jquery file  -->
<script src="<?= base_url('template/assets1/js/main.js') ?>"></script>
<script src="<?= base_url('template/assets1/js/color-scheme.js') ?>"></script>

<!-- PWA app service registration and works -->
<script src="<?= base_url('template/assets1/js/pwa-services.js') ?>"></script>

<!-- Chart js script -->
<script src="<?= base_url('template/assets1/vendor/chart-js-3.3.1/chart.min.js') ?>"></script>

<!-- Progress circle js script -->
<script src="<?= base_url('template/assets1/vendor/progressbar-js/progressbar.min.js') ?>"></script>

<!-- swiper js script -->
<script src="<?= base_url('template/assets1/vendor/swiperjs-6.6.2/swiper-bundle.min.js') ?>"></script>

<!-- page level custom script -->
<script src="<?= base_url('template/assets1/js/app.js') ?>"></script>

<!-- App js -->
<script src="<?= base_url('template/assets/js/jquery.core.js') ?>"></script>
<script src="<?= base_url('template/assets/js/jquery.app.js') ?>"></script>
<!-- Se cargan las funciones JS -->
<script src="<?= base_url('template/assets/js/app/' . $archivoJS . '.js') ?>"></script>
<script src="<?= base_url('template/assets/js/app/Footer.js') ?>"></script>

</body>

</html>