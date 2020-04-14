<!-- start: cabecera -->
<?php include_once("barra_cabecera.php"); ?>
<!-- end: cabecera -->

    <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
      <script>
        NProgress.configure({ showSpinner : false });
        NProgress.start();
      </script>

      <div id="toaster"></div>

      <div class="wrapper">
        <!--
            ====================================
            ——— LEFT SIDEBAR WITH FOOTER
            =====================================
        -->
        <?php include_once("barra_lateral.php"); ?>

        <div class="page-wrapper">

          <!-- start: Header -->
          <?php include_once("barra_header.php"); ?>
          <!-- end: Header -->

          <!-- start: contentair body -->
          <div class="content-wrapper">
            <div class="content">
              xx
            </div>
          </div>
          <!-- end: contentair body -->

          <!-- start: footer -->
          <?php include_once("barra_footer.php"); ?>
          <!-- end: footer -->
        </div>
      </div>

  <!-- start: inferior -->
  <?php include_once("barra_inferior.php") ?>
  <!-- end: inferior -->
