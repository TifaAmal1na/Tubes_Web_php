<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISTEM INFORMASI DUAAKUN.ID</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-light sidebar sidebar-light accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <img src="./img/logo.jpeg" style="width: 100%;">
            </a>

            <li class="nav-item">
                <a class="nav-link" href="home.php?page=dash">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="home.php?page=admin">
                    <i class="fas fa-fw fa-user-check"></i>
                    <span>Data Admin</span></a>
            </li>

             <li class="nav-item">
                <a class="nav-link"  href="home.php?page=tutor">
                    <i class="fas fa-fw fa-user-alt"></i>
                    <span>Data Tutor</span></a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="home.php?page=pengguna">
                    <i class="fas fa-fw fa-user-graduate"></i>
                    <span>Data Pengguna</span></a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="home.php?page=kelas">
                    <i class="fas fa-fw fa-file-archive"></i>
                    <span>Kelas</span></a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="home.php?page=transaksi">
                    <i class="fas fa-fw fa-history"></i>
                    <span>Riwayat Transaksi</span></a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href=""data-toggle="modal" data-target="#logoutModal"> 
                    <i class="fas fa-fw fa-power-off"></i>
                    <span>Logout</span></a>
            </li>


        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-warning topbar mb-4 static-top shadow">

                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php //sesion_start();
                                   $username = $_SESSION['username'];
                                    ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#nama">>
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <div class="container-fluid bg-warning">

                        <div class="card shadow">
                            <?php
                            $page = $_GET["page"];
                            if($page == "dash"){
                                include "dash.php";
                            }

                            if($page == "admin"){
                                include "admin.php";
                            }

                            if($page == "formInsertAdmin"){
                                include "formInsertAdmin.php";
                            }

                            if($page == "editAdmin"){
                                include "formEditAdmin.php";
                            }

                            if ($page=="tutor"){
                                include "tutor.php";
                            }

                            if($page == "formInsertTutor"){
                                include "formInsertTutor.php";
                            }
                            
                            if($page == "editTutor"){
                                include "formEditTutor.php";
                            }

                            if($page == "pengguna"){
                                include "pengguna.php";
                            }
                            if($page == "formInsertPengguna"){
                                include "formInsertPengguna.php";
                            }
                            
                            if($page == "formEditPengguna"){
                                include "formEditPengguna.php";
                            }
    
                            if($page == "kelas"){
                                include "kelas.php";
                            }

                            if($page == "transaksi"){
                                include "transaksi.php";
                            }

                            if($page == "logout"){
                                include "logout.php";
                            }

                            ?>
                        </div>

                </div>

            </div>

            <footer class="sticky-footer bg-warning">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    </div>
                </div>
            </footer>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

     <div class="modal fade" id="nama" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-secondary text-white text-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                    <img src="./img/profile.jpg" style="width: 150%;"></h5><br>
                    <div class="">
                    </div>
                </div>
                <div class="modal-body">
                
                    USERNAME : 
                <?php //sesion_start();
 
                if (isset($_SESSION['username'])) {
                 echo $_SESSION['username'];
                    } ?>
                </div>
               
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>