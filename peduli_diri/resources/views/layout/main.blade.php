<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../Assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="../Assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../Assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../Assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../Assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../Assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../Assets/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../Assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="../Assets/images/logo.svg"
                        class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../Assets/images/logo-mini.svg"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-primary fs-30" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary fs-30" aria-current="page" href="/perjalanan">Catatan
                            Perjalanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary fs-30" aria-current="page" href="#">Isi Daftar</a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas text-center" id="sidebar">
                <div class="">
                    <img src="../img/Zeta.jpg" class="rounded w-75 mt-3" alt="...">
                    <h4 class="mt-3 text-primary">Nama : Vestia Zeta</h>
                        <h6 class="mt-3 text-primary">Nik : 0082199023090</h6>
                </div>
            </nav>

            <div class="main-panel">

             @yield('content')

            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="../Assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="../Assets/vendors/chart.js/Chart.min.js"></script>
        <script src="../Assets/vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="../Assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="../Assets/js/dataTables.select.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../Assets/js/off-canvas.js"></script>
        <script src="../Assets/js/hoverable-collapse.js"></script>
        <script src="../Assets/js/template.js"></script>
        <script src="../Assets/js/settings.js"></script>
        <script src="../Assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="../Assets/js/dashboard.js"></script>
        <script src="../Assets/js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->
</body>

</html>
