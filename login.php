<?php include_once("barra_cabecera.php"); ?>

  <body class="" id="body">
      <div class="container d-flex flex-column justify-content-between vh-100">
      <div class="row justify-content-center mt-5">
        <div class="col-xl-5 col-lg-6 col-md-10">
          <div class="card">
            <div class="card-header bg-primary">
              <div class="app-brand">
                <a href="#">
                  <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                      <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                      <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                  </svg>
                  <span class="brand-name">Sistema IC</span>
                </a>
              </div>
            </div>
            <div class="card-body p-5">

              <h3 class="text-dark mb-5 text-center">Iniciar sesión</h3>
              <form action="/index.html">
                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input type="email" class="form-control input-lg" id="username" aria-describedby="emailHelp" placeholder="Usuario">
                  </div>
                  <div class="form-group col-md-12 ">
                    <input type="password" class="form-control input-lg" id="password" placeholder="*******">
                  </div>
                  <div class="col-md-12">
                    <!-- <div class="d-flex my-2 justify-content-between">
                      <div class="d-inline-block mr-3">
                        <label class="control control-checkbox">Remember me
                          <input type="checkbox" />
                          <div class="control-indicator"></div>
                        </label>

                      </div>
                      <p><a class="text-blue" href="#">Forgot Your Password?</a></p>
                    </div> -->
                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Iniciar sesión</button>
                    <!-- <p>¿Aún no tienes una cuenta?
                      <a class="text-blue" href="sign-up.html">Sign Up</a>
                    </p> -->
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="copyright pl-0">
        <p class="text-center">&copy; 2018 Copyright Sleek Dashboard Bootstrap Template by
          <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
        </p>
      </div> -->
      <?php include_once("barra_footer.php"); ?>
    </div>

</body>
</html>
