<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <link href="/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet" type="text/css"/>
    <link href="/gentelella/vendors/animate.css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.css" rel="stylesheet"
          type="text/css"/>
    <link href="/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="/gentelella/build/css/custom.min.css" rel="stylesheet" type="text/css"/>
    <link href="/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/izitoast/dist/css/iziToast.min.css" rel="stylesheet" type="text/css"/>
</head>

<body class="nav-md footer_fixed">
<div class="container body">
    <div class="main_container">


        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/home" class="site_title"><i class="fa fa-shopping-cart"></i> <span>Contatos Laravel</span></a>
                </div>

                <div class="clearfix"></div>
                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="/images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Bem-vindo,</span>
                        <h2> COLOCAR USER HERE </h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>GERAL</h3>
                        <ul class="nav side-menu">
                            <li><a href="/home"><i class="fa fa-home"></i> Home </a></li>
                            <li><a><i class="fa fa-edit"></i> Cadastros <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/contatos">Contatos</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="/images/img.jpg" alt="">DESCRIÇÃO USER HERE
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="/auth/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('conteudo')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Contatos by <a href="https://github.com/perez0711">Perez</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>


<script src="/gentelella/vendors/jquery/dist/jquery.js"></script>
<script src="/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/gentelella/vendors/fastclick/lib/fastclick.js"></script>
<script src="/gentelella/vendors/nprogress/nprogress.js"></script>
<script src="/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/gentelella/vendors/select2/dist/js/select2.min.js"></script>
<script src="/gentelella/vendors/select2/dist/js/i18n/pt-BR.js"></script>
<script src="/gentelella/vendors/select2/dist/js/i18n/es.js"></script>
<script src="/izitoast/dist/js/iziToast.min.js"></script>
<script src="/gentelella/build/js/custom.min.js"></script>
<script src="/js/generic-izitoast-menssage.js"></script>

</body>
</html>