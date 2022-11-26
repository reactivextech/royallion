 <!-- loader section -->
 <div class="container-fluid loader-wrap">
     <div class="row h-100">
         <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
             <div class="loader-cube-wrap loader-cube-animate mx-auto">
                 <img src="<?= base_url('template/') ?>assets1/img/logo-royallion-members.png" alt="Logo">
             </div>
             <p class="mt-4">Haz un seguimiento a tu inversión<br><strong>Cargando...</strong></p>
         </div>
     </div>
 </div>
 <!-- loader section ends -->

 <!-- Begin page content -->
 <main class="container-fluid h-100">
     <div class="row h-100 overflow-auto">
         <div class="col-12 text-center mt-auto px-0">
             <header class="header">
                 <div class="row">
                     <div class="col-auto"></div>
                     <div class="col">
                         <div class="logo-small logo-login-xl">
                             <img src="<?= base_url('template/') ?>assets1/img/logo-royallion-members.png" alt="">
                             <!-- <h5>Royal Lion Members</h5> -->
                         </div>
                     </div>
                     <div class="col-auto"></div>
                 </div>
             </header>
         </div>
         <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center text-center py-4">
             <h1 class="mb-4 text-color-theme">Iniciar Sesión</h1>
             <form data-parsley-validate novalidate class="was-validated needs-validation" method="post" autocomplete="off" id="formLogin">
                 <div class="form-group form-floating mb-3 is-valid">
                     <input type="text" class="form-control" value="" id="email" placeholder="Username" name="usuario_user" required="">
                     <label class="form-control-label" for="email">Usuario</label>
                 </div>

                 <div class="form-group form-floating is-invalid mb-3">
                     <input type="password" class="form-control " id="password" placeholder="Password" name="usuario_pass">
                     <label class="form-control-label" for="password">Contraseña</label>
                     <!-- <button type="button" class="text-danger tooltip-btn" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="Ingrese una contraseña valida" id="passworderror">
                            <i class="bi bi-info-circle"></i>
                        </button> -->
                 </div>
                 <div id="forgotPass"></div>
                 <p class="mb-5 text-center p-1">
                     <a href="javascript:void(0)" class="">
                         ¿No recuerdas tu contraseña?
                     </a>
                 </p>

                 <button type="submit" class="btn btn-lg btn-default w-100 mb-4 shadow" id="login" onclick="enviar_datos()">
                     Entrar
                 </button>
             </form>
             <!-- <p class="mb-2 text-muted">¿No tienes cuenta?</p>
             <a href="signup.html" target="_self" class="">
                 Registrarse <i class="bi bi-arrow-right"></i>
             </a> -->

         </div>
         <div class="col-12 text-center mt-auto">
             <div class="row justify-content-center p-5">
                 <div class="col-auto">
                     <p class="text-muted">O puedes visitarnos en:</p>
                 </div>
                 <div class="col-auto ps-0">
                     <a href="../">www.royallioninvestment.com</a>
                 </div>
             </div>
         </div>
     </div>
 </main>