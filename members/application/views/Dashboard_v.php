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
                <!-- <a href="notifications.html" target="_self" class="btn btn-light btn-44">
                        <i class="bi bi-bell"></i>
                        <span class="count-indicator"></span>
                    </a> -->
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

        <!-- money request received -->
        <!-- <div class="row mb-4 hideonprogress">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-44 shadow-sm rounded-10">
                                    <img src="<?= base_url('template/') ?>assets1/img/user3.jpg" alt="">


                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="small mb-1"><a href="profile.html" class="fw-medium">Shelvey</a> <span class="text-muted">Ha adquirido fondos de liquidez</span></p>
                                <p>150 <span class="text-muted">$</span> <small class="text-muted">Hace 1 minuto</small>
                                </p>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-44 btn-default shadow-sm">
                                    <i class="bi bi-arrow-up-right-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0">
                        <div class="col-12">
                            <div class="progress bg-none h-2 hideonprogressbar" data-target="hideonprogress">
                                <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- swiper credit cards -->
        <div class="row mb-3">
            <div class="col-12 px-0">
                <div class="swiper-container cardswiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="<?php echo base_url() . "saldos_variable"; ?>">
                                <div class="card dark-bg">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-auto align-self-center">
                                                <!-- <img src="./assets/img/masterocard.png" alt=""> -->
                                            </div>
                                            <div class="col align-self-center text-end">
                                                <p class="small">
                                                    <!-- <span class="text-uppercase size-10">Nuevo</span><br> -->
                                                    <!-- <span class="text-muted">09/24</span> -->
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="fw-normal mb-2">
                                                    FONDOS DE RENTA VARIABLE
                                                    <!-- <span class="small text-muted">USD</span> -->
                                                </h4>
                                                <!-- <p class="mb-0 text-muted size-12">1200,00</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="<?php echo base_url() . "saldos_fija"; ?>">
                                <div class="card dark-bg">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-auto align-self-center">
                                                <!-- <img src="./assets/img/masterocard.png" alt=""> -->
                                            </div>
                                            <div class="col align-self-center text-end">
                                                <p class="small">
                                                    <!-- <span class="text-uppercase size-10">Validity</span><br>
                                                    <span class="text-muted">06/25</span> -->
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="fw-normal mb-2">
                                                    FONDOS DE RENTA FIJA
                                                    <!-- <span class="small text-muted">USD</span> -->
                                                </h4>
                                                <!-- <p class="mb-0 text-muted size-12">900,00</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Transactions -->
        <!-- <div class="row mb-3 d-flex justify-content-between">
            <div class="col-auto">
                <h6 class="title">Acciones<br><small class="fw-normal text-muted">Hoy, <?php echo date('d M Y'); ?> </small>
                </h6>
            </div>
            <div class="col-auto align-self-center">
                <p>Precio de Compra</p>
            </div>
            <div class="col-auto align-self-center">
                <p>Mercado</p>
            </div>
            <div class="col-auto align-self-center">
                <p>Disponible</p>
            </div>
            <div class="col-auto align-self-center">
                <p>Valor</p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 px-0">
                <ul class="list-group list-group-flush bg-none">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-50 shadow rounded-10 ">
                                    <img src="<?= base_url('template/') ?>assets1/img/company4.jpg" alt="">
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="text-color-theme mb-0">XYZ</p>
                                <p class="text-muted size-12">33710</p>
                            </div>
                            <div class="col align-self-center text-end">
                                <p class="mb-0">2</p>
                                <p class="text-muted size-12"></p>
                            </div>
                            <div class="col align-self-center text-end">
                                <p class="mb-0">3</p>
                                <p class="text-muted size-12"></p>
                            </div>
                            <div class="col align-self-center text-end">
                                <p class="mb-0">500</p>
                                <p class="text-muted size-12"></p>
                            </div>
                            <div class="col align-self-center text-end">
                                <p class="mb-0">0,35</p>
                                <p class="text-muted size-12"></p>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-50 shadow rounded-10 ">
                                    <img src="<?= base_url('template/') ?>assets1/img/company5.png" alt="">
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="text-color-theme mb-0">BNB</p>
                                <p class="text-muted size-12">33710</p>
                            </div>
                            <div class="col align-self-center text-end">
                                <p class="mb-0">1</p>
                                <p class="text-muted size-12"></p>
                            </div>
                            <div class="col align-self-center text-end">
                                <p class="mb-0">1</p>
                                <p class="text-muted size-12"></p>
                            </div>
                            <div class="col align-self-center text-end">
                                <p class="mb-0">10</p>
                                <p class="text-muted size-12"></p>
                            </div>
                            <div class="col align-self-center text-end">
                                <p class="mb-0">0,82</p>
                                <p class="text-muted size-12"></p>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-50 shadow rounded-10 ">
                                    <img src="<?= base_url('template/') ?>assets1/img/company6.png" alt="">
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="text-color-theme mb-0">BTC</p>
                                <p class="text-muted size-12">33710</p>
                            </div>
                            <div class="col align-self-center text-end">
                                <p class="mb-0">3</p>
                                <p class="text-muted size-12"></p>
                            </div>
                            <div class="col align-self-center text-end">
                                <p class="mb-0">4</p>
                                <p class="text-muted size-12"></p>
                            </div>
                            <div class="col align-self-center text-end">
                                <p class="mb-0">19</p>
                                <p class="text-muted size-12"></p>
                            </div>
                            <div class="col align-self-center text-end">
                                <p class="mb-0">1,35</p>
                                <p class="text-muted size-12"></p>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-50 shadow rounded-10 ">
                                    <img src="<?= base_url('template/') ?>assets1/img/company3.png" alt="">
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="text-color-theme mb-0">BCV</p>
                                <p class="text-muted size-12">33710</p>
                            </div>
                            <div class="col align-self-center text-end">
                                <p class="mb-0">5</p>
                                <p class="text-muted size-12"></p>
                            </div>
                            <div class="col align-self-center text-end">
                                <p class="mb-0">2</p>
                                <p class="text-muted size-12"></p>
                            </div>
                            <div class="col align-self-center text-end">
                                <p class="mb-0">8</p>
                                <p class="text-muted size-12"></p>
                            </div>
                            <div class="col align-self-center text-end">
                                <p class="mb-0">0,4</p>
                                <p class="text-muted size-12"></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div> -->

        <div class="table">
            <div class="row mb-3">
                <div class="col">
                    <h5 class="title text-color-theme">Saldos<br><small class="fw-normal text-black-50">Hoy, <?php echo date('d / m / Y'); ?> </small>
                    </h5>
                </div>
            </div>

            <div id="imported_csv_data_variable"></div>
        </div>

        <h5 class="title"><small class="fw-normal text-black-50">La utilidad al momento de la venta está sujeta a las condiciones del mercado.</small>
        </h5>

        <div class="table">
            <div id="imported_csv_data_total"></div>
        </div>

        <script>
            $(document).ready(function() {

                // TABLA SALDOS
                load_data_variable();

                function load_data_variable() {
                    $.ajax({
                        url: "<?php echo base_url(); ?>importar_saldos/load_data_variable/<?php echo $this->session->userdata('usuario_id_cliente'); ?>",
                        method: "POST",
                        success: function(data) {
                            $('#imported_csv_data_variable').html(data);
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

        <!-- <div class="table">
            <table class="shadow-md">
                <thead>
                    <tr>
                        <th scope="col">Total</th>
                        <th scope="col">Total invertido</th>
                        <th scope="col">Utilidad</th>
                        <th scope="col">Saldo disponible</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Total invertido">321</td>
                        <td data-label="Total">123</td>
                        <td data-label="Utilidad">198</td>
                        <td data-label="Saldo disponible">321</td>
                    </tr>
                </tbody>
            </table>
        </div> -->

        <!-- connection -->
        <!-- <div class="row mb-3">
                <div class="col">
                    <h6 class="title">Connections</h6>
                </div>
                <div class="col-auto">
                    <a href="userlist.html" class="small">View all</a>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 px-0">
                    <div class="swiper-container connectionwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="profile.html" class="card text-center">
                                    <div class="card-body">
                                        <figure class="avatar avatar-50 shadow-sm mb-1 rounded-10">
                                            <img src="./assets/img/user4.jpg" alt="">
                                        </figure>
                                        <p class="text-color-theme size-12 small">Nicolas</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="profile.html" class="card text-center">
                                    <div class="card-body">
                                        <figure class="avatar avatar-50 shadow-sm mb-1 rounded-10">
                                            <img src="./assets/img/user2.jpg" alt="">
                                        </figure>
                                        <p class="text-color-theme size-12 small">Shelvey</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="profile.html" class="card text-center">
                                    <div class="card-body">
                                        <figure class="avatar avatar-50 shadow-sm mb-1 rounded-10">
                                            <img src="./assets/img/user3.jpg" alt="">
                                        </figure>
                                        <p class="text-color-theme size-12 small">Amenda</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="profile.html" class="card text-center">
                                    <div class="card-body">
                                        <figure class="avatar avatar-50 shadow-sm mb-1 rounded-10">
                                            <img src="./assets/img/user1.jpg" alt="">
                                        </figure>
                                        <p class="text-color-theme size-12 small">RXL15</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="profile.html" class="card text-center">
                                    <div class="card-body">
                                        <figure class="avatar avatar-50 shadow-sm mb-1 rounded-10">
                                            <img src="./assets/img/user4.jpg" alt="">
                                        </figure>
                                        <p class="text-color-theme size-12 small">Nicolas</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="profile.html" class="card text-center">
                                    <div class="card-body">
                                        <figure class="avatar avatar-50 shadow-sm mb-1 rounded-10">
                                            <img src="./assets/img/user2.jpg" alt="">
                                        </figure>
                                        <p class="text-color-theme size-12 small">Shelvey</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="profile.html" class="card text-center">
                                    <div class="card-body">
                                        <figure class="avatar avatar-50 shadow-sm mb-1 rounded-10">
                                            <img src="./assets/img/user3.jpg" alt="">
                                        </figure>
                                        <p class="text-color-theme size-12 small">Amenda</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="profile.html" class="card text-center">
                                    <div class="card-body">
                                        <figure class="avatar avatar-50 shadow-sm mb-1 rounded-10">
                                            <img src="./assets/img/user1.jpg" alt="">
                                        </figure>
                                        <p class="text-color-theme size-12 small">RXL15</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        <!-- offers banner -->
        <!-- <div class="row mb-4">
            <div class="col-12">
                <div class="card theme-bg text-center">
                    <div class="card-body">
                        <div class="row">
                            <div class="col align-self-center">
                                <h1>15% OFF</h1>
                                <p class="size-12 text-muted">
                                    En cada aumento de USD en tu cartera, la oferta de lanzamiento obtiene un 5% adicional
                                </p>
                                <div class="tag border-dashed border-opac">
                                    BILLPAY15OFF
                                </div>
                            </div>
                            <div class="col-6 align-self-center ps-0">
                                <img src="<?= base_url('template/') ?>assets1/img/offergraphics.png" alt="" class="mw-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

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