<header class="main-header " id="header">

  <nav class="navbar navbar-static-top navbar-expand-lg">
    <!-- Sidebar toggle button -->
    <button id="sidebar-toggler" class="sidebar-toggle">
      <span class="sr-only">Toggle navigation</span>
    </button>
    <!-- start: search form -->
    <?php include_once("busqueda.php"); ?>
    <!-- end: search form -->

    <div class="navbar-right ">
      <ul class="nav navbar-nav">
        <!-- Github Link Button -->
        <li class="github-link mr-3">
          <a class="btn btn-outline-secondary btn-sm" href="https://github.com/tafcoder/sleek-dashboard" target="_blank">
            <span class="d-none d-md-inline-block mr-2">GitHub</span>
            <i class="mdi mdi-github-circle"></i>
          </a>
        </li>
        <li class="github-link mr-3">
          <a class="btn btn-outline-secondary btn-sm" href="example/" target="_blank">
            <span class="d-none d-md-inline-block mr-2">Documentación</span>
            <i class="mdi mdi-github-circle"></i>
          </a>
        </li>
        <!-- start: notificacion -->
        <?php include_once("notificacion.php"); ?>
        <!-- end: notificacion -->

        <!-- start: Cuenta de usuario -->
        <?php include_once("cuentas.php"); ?>
        <!-- end: Cuenta de usuario -->

      </ul>
    </div>
  </nav>

</header>
