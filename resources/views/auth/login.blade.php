<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contatos! | </title>

    <link rel="icon" type="image/x-icon" href="https://images.tcdn.com.br/static_inst/site/vendedor/tray-cdn/themes/vendedor/img/favicon.ico?2018">

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
<body id="login-body" class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form id="form-login" class="form-horizontal" role="form" method="POST" action="/auth/login">
                    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                    <h1>Contatos</h1>
                    <div>
                        <input id="email" name="email" type="text" class="form-control" placeholder="Email" required=""/>
                    </div>
                    <div>
                        <input id="password" name="password" type="password" class="form-control" placeholder="Senha" required=""/>
                    </div>
                    <div>
                        <button class="btn btn-default submit" type="submit" id="btn_login">Entrar</button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <div class="clearfix"></div>
                        <div>
                            <h1><i class="fa fa-user"></i> Contatos Laravel!</h1>
                            <p>©2018 All Rights Reserved. </p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>

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
