<!-- Begin page -->
<main class="h-100">

    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="javascript:void(0)" target="_self" class="btn btn-light btn-44 menu-btn">
                    <i class="bi bi-list"></i>
                </a>
            </div>
            <div class="col align-self-center text-center">
                <div class="logo-small">
                    <img src="<?= base_url('template/') ?>assets1/img/logo-royallion-members.png" class="logo-small-img-1" alt="Royal Lion Members">
                    <img src="<?= base_url('template/') ?>assets1/img/logo.png" class="logo-small-img-2" alt="Royal Lion Members">
                    <h5>Royal Lion Members</h5>
                </div>
            </div>
            <div class="col-auto">

                <a href="#!" target="_self" class="btn btn-light btn-44">
                    <i class="bi bi-bell"></i>
                    <span class="count-indicator"></span>
                </a>
            </div>
        </div>
    </header>
    <!-- Header ends -->

    <!-- main page content -->
    <div class="main-container container">
        <!-- welcome user -->
        <div class="row mb-4">
            <div class="col-auto">
                <div class="avatar avatar-50 shadow rounded-10">
                    <!-- <img src="<?= base_url('template/') ?>assets1/img/user1.jpg" alt=""> -->
                    <img src="<?= $this->session->userdata('usuario_foto') ?>" alt="">
                </div>
            </div>
            <div class="col align-self-center ps-0">
                <h4 class="text-color-theme text-capitalize"><span class="fw-normal">Hola</span>,
                    <?= $this->session->userdata('usuario_nombre') . ' ' . $this->session->userdata('usuario_apellido'); ?>
                </h4>
                <?php $date = date("H");
                echo "<p class='text-muted'>";
                if ($date < 12) echo "Buenos dias";
                else if ($date < 18) echo "Buenas tardes";
                else echo "Buenas noches";
                echo "</p>"; ?>
            </div>
        </div>

        <div class="table">
            <div class="row mb-3">
                <div class="col">
                    <h5 class="title text-color-theme">Saldos Renta Fija<br><small class="fw-normal text-black-50">Hoy, <?php echo date('d / m / Y'); ?> </small>
                    </h5>
                </div>
            </div>

            <div id="imported_csv_data_fija"></div>
        </div>

        <h5 class="title"><small class="fw-normal text-black-50">La utilidad al momento de la venta está sujeta a las condiciones del mercado.</small>
        </h5>

        <div class="table">
            <div id="imported_csv_data_total"></div>
        </div>

        <script>
            $(document).ready(function() {

                // TABLA SALDOS
                load_data_fija();

                function load_data_fija() {
                    $.ajax({
                        url: "<?php echo base_url(); ?>importar_saldos/load_data_fija/<?php echo $this->session->userdata('usuario_id_cliente'); ?>",
                        method: "POST",
                        success: function(data) {
                            $('#imported_csv_data_fija').html(data);
                        }
                    })
                }

                //TABLA TOTALES
                load_data_total();

                function load_data_total() {
                    $.ajax({
                        url: "<?php echo base_url(); ?>importar_saldos/load_data_total/<?php echo $this->session->userdata('usuario_id_cliente'); ?>",
                        method: "POST",
                        success: function(data) {
                            $('#imported_csv_data_total').html(data);
                        }
                    })
                }

            });
        </script>



        <!-- Dark mode switch -->
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="darkmodeswitch">
                            <label class="form-check-label text-muted px-2 " for="darkmodeswitch">Modo Oscuro</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Saving targets -->
        <!-- <div class="row mb-3">
                <div class="col">
                    <h6 class="title">Objetivos</h6>
                </div>
                <div class="col-auto">

                </div>
            </div>
            <div class="row mb-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="circle-small">
                                        <div id="circleprogressone"></div>
                                        <div class="avatar avatar-30 alert-primary text-primary rounded-circle">
                                            <i class="bi bi-globe"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto align-self-center ps-0">
                                    <p class="small mb-1 text-muted">Acciones</p>
                                    <p>60<span class="small">%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="circle-small">
                                        <div id="circleprogresstwo"></div>
                                        <div class="avatar avatar-30 alert-success text-success rounded-circle">
                                            <i class="bi bi-cash-stack"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto align-self-center ps-0">
                                    <p class="small mb-1 text-muted">Mercado Internacional</p>
                                    <p>85<span class="small">%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-40 alert-danger text-danger rounded-circle">
                                        <i class="bi bi-house"></i>
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="small text-muted mb-0">Prestamos</p>
                                            <p>3510.00 $</p>
                                        </div>
                                        <div class="col-auto text-end">
                                            <p class="small text-muted mb-0">Proximo Pago</p>
                                            <p class="small">1 Aug 2022</p>
                                        </div>
                                    </div>

                                    <div class="progress alert-danger h-4">
                                        <div class="progress-bar bg-danger w-50" role="progressbar" aria-valuenow="25"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

        <!-- Blogs -->
        <!-- <div class="row mb-3">
            <div class="col">
                <h6 class="title">Noticias Royal Lion</h6>
            </div>
            <div class="col-auto align-self-center">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <a href="blog-details.html" class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-60 shadow-sm rounded-10 coverimg">
                                    <img src="<?= base_url('template/') ?>assets1/img/news.jpg" alt="">
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="text-color-theme mb-1">Bolsa de Valores</p>
                                <p class="text-muted size-12">Es importante que conozcas que no solo puedes invertir en acciones, sino también en bonos, papeles comerciales, entre otros.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <a href="blog-details.html" class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-60 shadow-sm rounded-10 coverimg">
                                    <img src="<?= base_url('template/') ?>assets1/img/news1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="text-color-theme mb-1">'¿Para qué me sirve invertir?'</p>
                                <p class="text-muted size-12">Una buena inversión hace crecer tu dinero y te ayuda a tener un patrimonio para el futuro, destina parte de tus ahorros en instrumentos financieros.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <a href="blog-details.html" class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-60 shadow-sm rounded-10 coverimg">
                                    <img src="<?= base_url('template/') ?>assets1/img/news2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="text-color-theme mb-1">¿La ganancia de las acciones?</p>
                                <p class="text-muted size-12">La ganancia de capital es la diferencia entre el precio de venta y el precio de compra de una acción. Esta diferencia, representa su rendimiento.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div> -->

    </div>
    <!-- main page content ends -->


</main>
<!-- Page ends-->