<html>

<!-- FAVICON RELATED -->
<link rel="apple-touch-icon" sizes="57x57" href="../static/custom/favicon/ms-icon-144x144-pimpao.png">
<link rel="apple-touch-icon" sizes="60x60" href="../static/custom/favicon/ms-icon-144x144-pimpao.png">
<link rel="apple-touch-icon" sizes="72x72" href="../static/custom/favicon/ms-icon-144x144-pimpao.png">
<link rel="apple-touch-icon" sizes="76x76" href="../static/custom/favicon/ms-icon-144x144-pimpao.png">
<link rel="apple-touch-icon" sizes="114x114" href="../static/custom/favicon/ms-icon-144x144-pimpao.png">
<link rel="apple-touch-icon" sizes="120x120" href="../static/custom/favicon/ms-icon-144x144-pimpao.png">
<link rel="apple-touch-icon" sizes="144x144" href="../static/custom/favicon/ms-icon-144x144-pimpao.png">
<link rel="apple-touch-icon" sizes="152x152" href="../static/custom/favicon/ms-icon-144x144-pimpao.png">
<link rel="apple-touch-icon" sizes="180x180" href="../static/custom/favicon/ms-icon-144x144-pimpao.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../static/custom/favicon/ms-icon-144x144-pimpao.png">
<link rel="icon" type="image/png" sizes="32x32" href="../static/custom/favicon/ms-icon-144x144-pimpao.png">
<link rel="icon" type="image/png" sizes="96x96" href="../static/custom/favicon/ms-icon-144x144-pimpao.png">
<link rel="icon" type="image/png" sizes="16x16" href="../static/custom/favicon/ms-icon-144x144-pimpao.png">
<link rel="manifest" href="../static/custom/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../static/custom/favicon/balaozinho.png">
<meta name="theme-color" content="#ffffff">


<title>SI Pimpão</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- BEGIN HEAD -->
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN PLUGIN CSS -->
<link href="../static/demo/HTML/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../static/demo/HTML/assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../static/demo/HTML/assets/plugins/bootstrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="../static/demo/HTML/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="../static/demo/HTML/assets/plugins/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="../static/demo/HTML/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<!-- END PLUGIN CSS -->
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="../static/demo/HTML/webarch/css/webarch.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->

<!-- Begin notifications -->
<link rel="stylesheet" type="text/css" href="../static/demo/HTML/assets/plugins/bootstrap-toastr/toastr.min.css"/>
<!-- End notifications -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<!--<body style="background-color: #339933">-->
<!-- PARA COLOCAR IMAGEM NO FUNDO -->
<body class="error-body no-top lazy"  data-original="../static/custom/background3.png"  style="background-image: url('../static/custom/favicon/balaozinho.png')">

<div class="container">
  <div class="row login-container animated fadeInUp">
    <div class="col-md-7 col-md-offset-2 tiles white no-padding">
      <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10">
        <h2 class="normal">
          Bem vindo ao <b style="color:#fcc400">SI Pimpão</b>
        </h2>
        <p>
      </div>
      <div class="tiles grey p-t-20 p-b-20 no-margin text-black tab-content">
        <div role="tabpanel" class="tab-pane active" id="tab_login">
          <form class="animated fadeIn validate" role="form" method="post">
            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="col-md-6 col-sm-6">
                <input class="form-control" id="username" name="login" placeholder="Usuário" type="username" required>
              </div>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" id="password" name="senha" placeholder="Senha" type="password" required>
              </div>
            </div>
            <br>
            <div class="row p-1-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="control-group col-md-6">
                <div role="tablist" "align: right">
                  <button method="post" type="submit" class="btn btn-primary btn-cons" style="background-color:#01eeea">Login</a>
                  </button>
                </div>
                <br>
                <div class="checkbox checkbox check-success">
                  <a href="/recuperar_senha/">Problemas para logar?</a>&nbsp;&nbsp; <input id="checkbox1" type="checkbox" value="1">
                </div>

              </div>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
</div>
<!-- END CONTAINER -->

<script src="../static/demo/HTML/assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<!-- BEGIN JS DEPENDECENCIES--> 
<script src="../static/demo/HTML/assets/plugins/jquery/jquery-1.11.3.min.js" type="text/javascript"></script> 
<script src="../static/demo/HTML/assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="../static/demo/HTML/assets/plugins/jquery-block-ui/jqueryblockui.min.js" type="text/javascript"></script> 
<script src="../static/demo/HTML/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="../static/demo/HTML/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="../static/demo/HTML/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="../static/demo/HTML/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="../static/demo/HTML/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<!-- END CORE JS DEPENDECENCIES--> 
<!-- BEGIN CORE TEMPLATE JS --> 
<script src="../static/demo/HTML/webarch/js/webarch.js" type="text/javascript"></script> 
<script src="../static/demo/HTML/assets/js/chat.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS -->
        
</body>

</html>