<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::to('node_modules/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{URL::to('node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/js/gritter/css/jquery.gritter.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/lineicons/style.css')}}">
    {{-- Datatables --}}
    {{-- link rel="stylesheet"--}}
    <link rel="stylesheet" href="{{URL::to('admin/css/datatables.bootstrap.min.css')}}">
    {{-- bootstrap datepicker--}}
    <link rel="stylesheet" href="{{URL::to('node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}">
    {{-- Daterangepicker --}}
    <link rel="stylesheet" href="{{URL::to('node_modules/bootstrap-daterangepicker/daterangepicker.css')}}">
    {{-- jquery confirm --}}
    <link rel="stylesheet" href="{{URL::to('node_modules/jquery-confirm/dist/jquery-confirm.min.css')}}">
    <!-- Custom styles for this template -->
    <link href="{{URL::to('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::to('admin/css/style-responsive.css')}}" rel="stylesheet">

    {{-- <script src="{{URL::to('assets/js/chart-master/Chart.js')}}"></script> --}}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="#!" class="logo"><b>Admin Dashboard</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="#">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li class="mt">
                      <a href="#">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-address-card"></i>
                          <span>Data Master</span>
                      </a>
                      <ul class="sub">
                          <li>
                            <a  href="#"><i class="fa fa-users"></i> Siswa Terdaftar</a>
                          </li>
                          {{-- <li><a  href="#!"><i class="fa fa-graduation-cap"></i> Riwayat Pendidikan</a></li>
                          <li><a  href="#!"><i class="fa fa-user-circle"></i> Orang Tua/Wali</a></li> --}}
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  @yield('content')
              </div><!--/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="pull-right" style="margin-right:10px">
              Developed with <i class="fa fa-heart" style="color:red"></i> by <a href="http://easytech.co.id/">EasyTech</a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{URL::to('node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('node_modules/bootstrap-daterangepicker/moment.min.js')}}"></script>
    <script src="{{URL::to('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    {{-- DataTables --}}
    <script src="{{URL::to('node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::to('admin/js/datatables.bootstrap.min.js')}}"></script>
    {{-- Datepicker --}}
    <script src="{{URL::to('node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}" charset="utf-8"></script>
    {{-- Daterangepicker --}}
    <script src="{{URL::to('node_modules/bootstrap-daterangepicker/daterangepicker.js')}}" charset="utf-8"></script>
    {{-- jquery confirm --}}
    <script src="{{URL::to('node_modules/jquery-confirm/dist/jquery-confirm.min.js')}}" charset="utf-8"></script>
    {{-- toastr js --}}
    <script src="{{URL::to('node_modules/toastr/toastr.js')}}" charset="utf-8"></script>
    {{-- ChartJs --}}
    <script src="{{URL::to('node_modules/chart.js/dist/Chart.js')}}" charset="utf-8"></script>

    <script class="include" type="text/javascript" src="{{URL::to('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{URL::to('admin/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{URL::to('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('admin/js/jquery.sparkline.js')}}"></script>


    <!--common script for all pages-->
    <script src="{{URL::to('admin/js/common-scripts.js')}}"></script>

    <script type="text/javascript" src="{{URL::to('admin/js/gritter/js/jquery.gritter.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('admin/js/gritter-conf.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('admin/custom.js')}}"></script>
    @yield('customJs')
    <script type="text/javascript">
      $(document).ready(function() {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Hai admin',
            // (string | mandatory) the text inside the notification
            text: 'Selamat datang di halaman dashboard',
            // (string | optional) the image to display on the left
            image: '{{URL::to('admin/img/friends/fr-05.jpg')}}',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '10',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
      });
    </script>
  </body>
</html>
