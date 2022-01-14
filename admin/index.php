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

    <title> Dashboard | Sistem Informasi Seminar Tugas Akhir </title>

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
                            <h1 class="m-0 text-dark">Kelola Seminar Mahasiswa</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Seminar</a></li>
                                <li class="breadcrumb-item active">Kelola Seminar</li>
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
                            <a href="#" class="btn btn-primary">Tambah Seminar Baru</a>
                            <table class="table table-bordered table-striped mt-3 ">
                                <tr>
                                    <th>No.</th>
                                    <th>NIM</th>
                                    <th>Mahasiswa/i</th>
                                    <th>Seminar</th>
                                    <th>Waktu</th>
                                    <th>Ruangan</th>
                                    <th>Peserta</th>
                                    <th>Action</th>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>01020001</td>
                                    <td>Diego Armando</td>
                                    <td>Proposal</td>
                                    <td>10.00 04-01-2021</td>
                                    <td>Online</td>
                                    <td>10 (view)</td>
                                    <td>
                                        <a href="#">Edit</a> | <a href="#">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>01020001</td>
                                    <td>Diego Armando</td>
                                    <td>Proposal</td>
                                    <td>10.00 04-01-2021</td>
                                    <td>Online</td>
                                    <td>10 (view)</td>
                                    <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>01020001</td>
                                    <td>Diego Armando</td>
                                    <td>Proposal</td>
                                    <td>10.00 04-01-2021</td>
                                    <td>Online</td>
                                    <td>10 (view)</td>
                                    <td> <a href="#">Edit</a> | <a href="#">Delete</a></td>

                                </tr>
                            </table>
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