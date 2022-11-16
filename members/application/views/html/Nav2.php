<!-- Sidebar main menu -->
<div class="sidebar-wrap  sidebar-pushcontent">
    <!-- Add overlay or fullmenu instead overlay -->
    <div class="closemenu text-muted">Cerrar Menu</div>
    <div class="sidebar dark-bg">
        <!-- user information -->
        <div class="row my-3">
            <div class="col-12 ">
                <div class="card shadow-sm bg-opac text-white border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <figure class="avatar avatar-44 rounded-15">
                                    <!-- <img src="<?= base_url('template/') ?>assets1/img/user1.jpg" alt=""> -->
                                    <img src="<?= $this->session->userdata('usuario_foto') ?>" alt="">
                                </figure>
                            </div>
                            <div class="col px-0 align-self-center">
                                <p class="mb-1"><?= $this->session->userdata('usuario_user'); ?></p>
                                <!-- <p class="text-muted size-12">Caracas, VE</p> -->
                            </div>
                            <div class="col-auto">
                                <a href="javascript:void(0)" class="btn btn-44 btn-light menu-btn">
                                    <i class="bi bi-box-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-opac text-white border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3>
                                        <?php
                                        if ($totales ==  null) {
                                            echo "0";
                                        } else {
                                            echo $totales->total;
                                            // foreach ($totales as $tot) {
                                            //     echo $tot;
                                            // }
                                        }
                                        ?>
                                    </h3>
                                </div>
                                <div class="col-auto">
                                    <p class="text-muted">TOTAL CARTERA</p>
                                </div>
                                <div class="col text-end">
                                    <!-- <p class="text-muted"><a href="#">+ Aumentar</a> </p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- user menu navigation -->
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills">

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?= base_url() ?>dashboard" role="button">
                            <div class="avatar avatar-40 rounded icon"><i class="bi bi-house-door-fill"></i></div>
                            <div class="col">Inicio</div>
                            <div class="arrow">
                                <i class="bi bi-plus plus"></i>
                            </div>
                        </a>
                    </li>
                    <!-- <?php foreach ($menus as $menu) { ?>
                        <?php if (isset($menu->children)) { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="<?= base_url() . $menu->menu_controlador ?>" role="button" aria-expanded="false">
                                    <div class="avatar avatar-40 rounded icon"><i class="bi bi-person"></i></div>
                                    <div class="col"><?= $menu->menu_nombre ?></div>
                                    <div class="arrow">
                                        <i class="bi bi-plus plus"></i> <i class="bi bi-dash minus"></i>
                                    </div>
                                </a>
                            <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">
                                    <div class="avatar avatar-40 rounded icon"><i class="<?= $menu->menu_icono ?>"></i></div>
                                    <div class="col"><?= $menu->menu_nombre ?></div>
                                    <div class="arrow"><i class="<?= $menu->menu_icono2 ?>"></i></div>
                                </a>
                            <?php } ?>

                            <?php if (isset($menu->children)) { ?>
                                <ul class="dropdown-menu">
                                    <?php foreach ($menu->children as $child) { ?>
                                        <li>
                                            <a class="dropdown-item nav-link" href="<?= base_url($child->menu_controlador) ?>">
                                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-calendar2"></i></div>
                                                <div class="col"><?= $child->menu_nombre ?></div>
                                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                            </li>
                        <?php } ?> -->

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login/cerrar_sesion') ?>" tabindex="-1">
                            <div class="avatar avatar-40 rounded icon"><i class="bi bi-box-arrow-right"></i></div>
                            <div class="col">Salir</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sidebar main menu ends -->