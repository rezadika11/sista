<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Peserta Seminar | Sistem Informasi Seminar Tugas Akhir </title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../dist/css/custom.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php include('../layout/navbar.php') ?>
        <?php include('../layout/sidebar.php') ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Daftar Peserta Seminar</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Seminar</a></li>
                                <li class="breadcrumb-item active">Peserta Seminar</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2">
                                <tr>
                                    <td width="141"> Seminar Mahasiswa</td>
                                    <td width="20">:</td>
                                    <td width="274">0102002</td>
                                </tr>
                            </div>
                            <div class="row mb-2">
                                <div class="col-8">
                                    <table>
                                        <tr>
                                            <td width="60">Judul</td>
                                            <td>:</td>
                                            <td>Rancang Bangun Aplikasi Seminar Tugas Akhir Berbasis Web Menggunakan MVC Framwork</td>
                                        </tr>
                                    </table>


                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-8">
                                    <table>

                                        <tr>
                                            <td width="120">Waktu Seminar</td>
                                            <td>:</td>
                                            <td>Senin, 4 Januari 2021, 10.00</td>
                                        </tr>
                                    </table>

                                </div>

                            </div>


                            <div class="text-center">
                                <h4>DAFTAR PESERTA SEMINAR</h4>
                            </div>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>No.</th>
                                    <th>NIM</th>
                                    <th>Mahasiswa/i</th>
                                    <th>Prodi</th>
                                    <th>Waktu</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>01020001</td>
                                    <td>Diego Armando</td>
                                    <td>Sistem Informasi</td>
                                    <td>S1</td>
                                    <td>Diterima</td>
                                    <td>
                                        <a href="#">Edit</a> | <a href="#">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2 </td>
                                    <td>01020001</td>
                                    <td>Diego Armando</td>
                                    <td>Sistem Informasi</td>
                                    <td>S1</td>
                                    <td>Diterima</td>
                                    <td>
                                        <a href="#">Edit</a> | <a href="#">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>01020001</td>
                                    <td>Diego Armando</td>
                                    <td>Sistem Informasi</td>
                                    <td>S1</td>
                                    <td>Diterima</td>
                                    <td>
                                        <a href="#">Edit</a> | <a href="#">Delete</a>
                                    </td>
                                </tr>

                            </table>
                            <a href="#" class="btn btn-primary mt-3">Tambah Peserta Seminar</a>
                        </div>
                    </div>

                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <?php include('../layout/footer.php') ?>