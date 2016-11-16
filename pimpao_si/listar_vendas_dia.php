<!DOCTYPE html>
<?php
require_once("seguranca.php");
if ($_SESSION['userAuthenticated']===NULL) {
    header("Location: ".$_SG['paginaLogin']."");
}
?>
<html>

<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />

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
<meta name="msapplication-TileImage" content="../static/custom/favicon/ms-icon-144x144-pimpao.png">
<meta name="theme-color" content="#ffffff">


<title>Vendas do Dia - SI Pimpão</title>
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
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse ">
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
  <div class="header-seperation">
    <ul class="nav pull-left notifcation-center visible-xs visible-sm">
     <li class="dropdown">
      <a href="#main-menu" data-webarch="toggle-left-side">
        <div class="iconset top-menu-toggle-white"></div>
      </a>
     </li>
    </ul>
      <!-- BEGIN LOGO -->

      <div class="container">
        <div id="element">
          <a href="../index.php">
            <img src="../static/custom/logo.png" class="logo" alt=""  width="250" height="60" align="middle" style="margin: 0px 10px 0px -15px"/>
          </a>
        </div>
      </div>

      <!-- END LOGO -->
      <ul class="nav pull-right notifcation-center">
        <li class="dropdown hidden-xs hidden-sm">
     <!--     <a href="index.html" class="dropdown-toggle active" data-toggle="">
            <div class="iconset top-home"></div>
          </a> -->
        </li>
        <li class="dropdown hidden-xs hidden-sm">
<!--          <a href="email.html" class="dropdown-toggle" >
            <div class="iconset top-messages"></div><span class="badge">2</span>
          </a> -->
        </li>
    <li class="dropdown visible-xs visible-sm">
      <a href="#" data-webarch="toggle-right-side">
        <div class="iconset top-chat-white "></div>
      </a>
    </li>
      </ul>
      </div>
      <!-- END RESPONSIVE MENU TOGGLER -->
      <div class="header-quick-nav" >
      <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="pull-left">
        <ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >
            <div class="iconset top-menu-toggle-dark" ></div>
            </a> </li>
        <!--</ul>
        <ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" >
            <div class="iconset top-reload"></div>
            </a> </li>
          <li class="quicklinks"> <span class="h-seperate"></span></li>
          <li class="quicklinks"> <a href="#" class="" >
            <div class="iconset top-tiles"></div>
            </a> </li>
      <li class="m-r-10 input-prepend inside search-form no-boarder">
        <span class="add-on"> <span class="iconset top-search"></span></span>
         <input name="" type="text"  class="no-boarder " placeholder="Search Dashboard" style="width:250px;">
      </li>
      </ul>-->
    </div>
   <!-- END TOP NAVIGATION MENU -->
   <!-- BEGIN CHAT TOGGLER -->
    <div class="pull-right">
     <ul class="nav quick-section">
      <li class="quicklinks">
        <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
          <div class="iconset top-settings-dark "></div>
        </a>
        <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
          <li>
            <li class="start "> <a href="/perfil/{{user.pk}}"> <i class="fa fa-user" style="color: white"></i><span class="title">&nbsp;&nbsp;Meu Perfil</span></a>
            <a href="../pimpao_si/logout.php"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a>
          </li>
       </ul>
      </li>
    </ul>
      </div>
     <!-- END CHAT TOGGLER -->
      </div>
      </div>
      <!-- END TOP NAVIGATION MENU -->

  </div>
  <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
  <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar " id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper" >
      <div class="user-info-wrapper" >
<!--         <div class="profile-wrapper"> <img src="../static/demo/HTML/assets/img/profiles/avatar.jpg"  alt="" data-src="../static/demo/HTML/assets/img/profiles/avatar.jpg" data-src-retina="../static/demo/HTML/assets/img/profiles/avatar2x.jpg" width="69" height="69" /> </div>
 -->        <div class="user-info">
          <div class="greeting">Menu</div>
<!--           <div class="username">Biossistec Jr.</span></div>
          <div class="status">Status<a href="#">
            <div class="status-icon green"></div>
            Online</a></div>
 -->        </div>
      </div>
      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
      <!-- <p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p> -->
      <br>
      <ul>
<!-- COMEÇO DE Menu Lateral -->
        <li class="start "> <a href="../pimpao_si/listar_produtos.php"> <i class="fa fa-dropbox" style="color: white"></i><span class="title">Produtos em estoque</span> </a>

        <li class="start "> <a href="../pimpao_si/listar_vendas_dia.php"> <i class="fa fa-shopping-cart" style="color: white"></i><span class="title">Vendas do dia</span> </a>

        <li class="start "> <a> <i class="fa fa-shopping-cart" style="color: white"></i><span class="title">Vendas do mês</span> </a>
          <ul class="sub-menu">
              <?php
              $servidor="localhost";
              $username="root";
              $password="";
              $database="si_pimpao";

              $db = mysqli_connect($servidor,$username,$password,$database);
              if (mysqli_connect_errno()) { echo "Erro de conexão!"; exit;}

              $seleciona = "SELECT * FROM vendedora ORDER BY nome ASC";
              $query=mysqli_query($db,$seleciona);
              $i=0;
              while($row = mysqli_fetch_array($query)){
                  echo "<li><a href='listar_vendas_mes.php?vendedora=$row[1]'>";
                  echo $row[1];
                  echo "</a></li>";
              }
              ?>
           </ul>

        </li>
        <li class="start "> <a href="../pimpao_si/listar_vendedoras.php"> <i class="fa fa-users" style="color: white"></i><span class="title">Vendedoras</span> </a>
<!-- {# FIM DE Menu Lateral#} -->
      </ul>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
  <!-- <div class="footer-widget">
    <div class="progress transparent progress-small no-radius no-margin">
      <div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="79%" style="width: 79%;"></div>
    </div>
    <div class="pull-right">
      <div class="details-status"> <span class="animate-number" data-value="86" data-animation-duration="560">86</span>% </div>
      <a href="lockscreen.html"><i class="fa fa-power-off"></i></a></div>
  </div> -->
  <!-- END SIDEBAR -->
  <!-- BEGIN PAGE CONTAINER-->
<!--   <div class="page-content"> </div>
 -->    <!-- <div id="portlet-config" class="modal hide">
     <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>-->
<!--     <div class="content">
 -->    <!--   <div class="page-title"> <i class="icon-custom-left"></i>
      </div>
  </div> -->
    <div class="content">
    <div class="page-title">
      <h3>Home</h3>
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

</script>

<!-- Chamamos o block da mãe aqui -->


<link href="../static/demo/HTML/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../static/demo/HTML/assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<link href="../static/demo/HTML/assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
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

<!-- BEGIN CONTAINER -->

<div class="page-content">
<div class="clearfix"></div>
      <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h3>Lista de Vendas do Dia: <strong><?php echo date('d-m-Y'); ?></strong><span class="semi-bold"></span> </h3>
              <div class="tools"></div>
            </div>
            <div class="grid-body ">
                <a href="cadastrar_vendas.php">
                    <button type="button" class="btn btn-primary btn-cons" style='background-color: #01eeea'>Cadastrar Venda</button>
                </a>
              <table class="table" id="example2" >
               <thead>
                 <tr>
                   <th>Vendedora</th>
                   <th>Valor</th>
                   <th>Forma de Pagamento</th>
                 </tr>
                </thead>
                <tbody>
                    <?php
                    // include "classes.php";

                    $servidor="localhost";
                    $username="root";
                    $password="";
                    $database="si_pimpao";

                    $db = mysqli_connect($servidor,$username,$password,$database);
                    if (mysqli_connect_errno()) { echo "Erro de conexão!"; exit;}

                    $seleciona = "SELECT * FROM venda WHERE data = CURDATE()";
                    $query=mysqli_query($db,$seleciona);
                    $i=0;
                    while($row = mysqli_fetch_array($query)){
                        echo "<tr>";
                        echo "<td>";
                        echo $row[2];
                        echo "</td>";
                        echo "<td>";
                        echo $row[1];
                        echo "</td>";
                        echo "<td>";
                        echo $row[4];
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../static/demo/HTML/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="../static/demo/HTML/assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript" ></script>
<script src="../static/demo/HTML/assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="../static/demo/HTML/assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="../static/demo/HTML/assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<!-- END PAGE LEVEL JS INIT -->
<script src="../static/custom/javascript/datatables-editado.js" type="text/javascript"></script>

</div>

</body>
</html>
