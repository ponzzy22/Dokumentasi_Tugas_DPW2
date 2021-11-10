<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Ponsianus Jopi Tugas DPW</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
</head>

<body>

<!-- BAGIAN PANEL KIRI -->
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar.png">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        BOBA GARDEN
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="/">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="user">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Pengguna</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="v_cost">
                            <i class="nc-icon nc-notes"></i>
                            <p>pengeluaran</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="produk">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Produk</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="v_keranjang">
                            <i class="nc-icon nc-atom"></i>
                            <p>Keranjang</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="v_peta">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Peta</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="v_notiv">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifikasi</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


@include('layout.v_nav')

@yield('content')
           <!-- HALAMAN UTAMA -->
          
@include('layout.v_space')

            <!-- BAGIAN KAKI -->
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Beranda
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Perusahaan
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog! go blog
                                </a>
                            </li>
                        </ul>

                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="#">BobaGarden</a> copyright All
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>



<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script> 
<!-- <script src="../assets/js/plugins/bootstrap-notify.js"></script> -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>

</html>
