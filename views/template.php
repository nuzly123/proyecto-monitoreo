<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monitoreo | AeroSosa</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="views/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="views/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="views/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="views/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="views/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="views/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="views/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="views/plugins/summernote/summernote-bs4.min.css">

    <!-- CSS PARA DATATABLES -->
    <link rel="stylesheet" href="views/plugins/datatables/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="views/plugins/datatables-responsive/css/responsive.bootstrap4.css" />

</head>




<?php
if (isset($_SESSION['login']) && $_SESSION['login'] == "OK") {
    echo '<body class="hold-transition sidebar-mini">';
    //<!-- Site wrapper -->
    echo '<div class="wrapper">';
?>
    <!-- NAVBAR / HEADER -->
    <?php
    include "views/pages/modules/header.php";
    ?>
    <!-- MENU -->
    <?php
    include "views/pages/modules/menu.php";
    ?>

    <div class="content-wrapper">
        <?php
        /* MENU - NAVEGACION */
        if (isset($_GET['ruta'])) {

            /* PAGINAS PRINCIPALES */
            if (
                $_GET['ruta'] == 'users' ||
                $_GET['ruta'] == 'empleados' ||
                $_GET['ruta'] == 'tripulacion' ||
                $_GET['ruta'] == 'aeronaves' ||
                $_GET['ruta'] == 'empleados' ||
                $_GET['ruta'] == 'monitoreo'
            ) {
                include "views/pages/" . $_GET["ruta"] . ".php";

                /* CONFIGURACION */
            } else if (
                $_GET['ruta'] == 'aeropuertos' ||
                $_GET['ruta'] == 'ciudades' ||
                $_GET['ruta'] == 'departamentos' ||
                $_GET['ruta'] == 'estaciones'
            ) {
                include "views/pages/config/" . $_GET["ruta"] . ".php";

                /* MAS OPCIONES */
            } else if (
                $_GET['ruta'] == 'perfil' ||
                $_GET['ruta'] == 'dashboard' ||
                $_GET['ruta'] == 'signout'
            ) {
                include "views/pages/" . $_GET["ruta"] . ".php";
            } else {
                include "views/pages/404.php";
            }
        }
        ?>

    </div>
    <!-- /.content-wrapper -->

    <!-- FOOTER -->
    <?php
    include "views/pages/modules/footer.php";
    ?>
<?php
} else {
    echo '<body class="hold-transition sidebar-mini login-page">';
    include "views/pages/modules/login.php";
}
?>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="views/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="views/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="views/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline 
<script src="views/plugins/sparklines/sparkline.js"></script>-->
<!-- JQVMap
<script src="views/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="views/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<script src="views/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="views/plugins/moment/moment.min.js"></script>
<script src="views/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="views/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="views/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="views/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="views/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="views/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="views/dist/js/pages/dashboard.js"></script>

<!-- SCRIPT PARA DATATABLES -->
<script src="views/plugins/datatables/jquery.dataTables.js"></script>
<script src="views/plugins/datatables-responsive/js/dataTables.responsive.js"></script>
<script src="views/js/template.js"></script>

</body>

</html>