<aside class="left-sidebar bg-sidebar">
  <div id="sidebar" class="sidebar sidebar-with-footer">
    <!-- Aplication Brand -->
    <?php include_once("logo.php"); ?>
    <!-- begin sidebar scrollbar -->
    <div class="sidebar-scrollbar">

      <!-- sidebar menu -->
      <ul class="nav sidebar-inner" id="sidebar-menu">

        <li class="has-sub active expand" >
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
            <i class="mdi mdi-view-dashboard-outline"></i>
            <span class="nav-text">CAU</span> <b class="caret"></b>
          </a>
          <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li  class="active" >
                <a class="sidenav-item-link" href="#">
                  <span class="nav-text">Crear usuario</span>
                </a>
              </li>
              <li>
                <a class="sidenav-item-link" href="#">
                  <span class="nav-text">Analytics</span>
                  <span class="badge badge-success">new</span>
                </a>
              </li>
            </div>
          </ul>
        </li>

        <li class="has-sub" >
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation"
              aria-expanded="false" aria-controls="documentation">
              <i class="mdi mdi-book-open-page-variant"></i>
              <span class="nav-text">Documentation</span> <b class="caret"></b>
            </a>
            <ul  class="collapse" id="documentation" data-parent="#sidebar-menu">
              <div class="sub-menu">

                <li class="section-title">Getting Started</li>
                <li><a class="sidenav-item-link" href="introduction.html"><span class="nav-text">Introduction</span></a></li>
                <li><a class="sidenav-item-link" href="setup.html"><span class="nav-text">Setup</span></a></li>
                <li><a class="sidenav-item-link" href="customization.html"><span class="nav-text">Customization</span></a></li>
                <li class="section-title">Layouts</li>

                <li  class="has-sub" >
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#headers" aria-expanded="false" aria-controls="headers">
                    <span class="nav-text">Layout Headers</span> <b class="caret"></b>
                  </a>
                  <ul class="collapse" id="headers">
                    <div class="sub-menu">
                      <li><a href="header-fixed.html">Header Fixed</a></li>
                      <li><a href="header-static.html">Header Static</a></li>
                      <li><a href="header-light.html">Header Light</a></li>
                      <li><a href="header-dark.html">Header Dark</a></li>
                    </div>
                  </ul>
                </li>

                <li class="has-sub">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#sidebar-navs" aria-expanded="false" aria-controls="sidebar-navs">
                    <span class="nav-text">layout Sidebars</span> <b class="caret"></b>
                  </a>
                  <ul class="collapse" id="sidebar-navs">
                    <div class="sub-menu">
                      <li><a href="sidebar-open.html">Sidebar Open</a></li>
                      <li><a href="sidebar-minimized.html">Sidebar Minimized</a></li>
                      <li><a href="sidebar-offcanvas.html">Sidebar Offcanvas</a></li>
                      <li><a href="sidebar-with-footer.html">Sidebar With Footer</a></li>
                      <li><a href="sidebar-without-footer.html">Sidebar Without Footer</a></li>
                      <li><a href="right-sidebar.html">Right Sidebar</a></li>
                    </div>
                  </ul>
                </li>

                <li><a class="sidenav-item-link" href="rtl.html"><span class="nav-text">RTL Direction</span></a></li>

              </div>
            </ul>
          </li>

        </ul></div>

    <hr class="separator" />

    <div class="sidebar-footer">
      <div class="sidebar-footer-content">
        <h6 class="text-uppercase"> Cpu Uses <span class="float-right">40%</span></h6>
        <div class="progress progress-xs">
          <div class="progress-bar active" style="width: 40%;" role="progressbar"></div>
        </div>
        <h6 class="text-uppercase">Memory Uses <span class="float-right">65%</span></h6>
        <div class="progress progress-xs">
          <div class="progress-bar progress-bar-warning" style="width: 65%;" role="progressbar"></div>
        </div>
      </div>
    </div>
  </div>
</aside>
