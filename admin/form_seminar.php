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

    <title> Form Seminar | Sistem Informasi Seminar Tugas Akhir </title>

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
                            <h1 class="m-0 text-dark">Form Seminar/Sidang Mahasiswa</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Seminar</a></li>
                                <li class="breadcrumb-item active">Form Seminar</li>
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
                            <a href="#" class="btn btn-primary mb-3">Tambah Seminar Baru</a>
                            <fieldset class="scheduler-border3">
                                <legend class="scheduler-border3">Form Peserta Seminar TA</legend>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="email" class="col-2 col-form-label">NIM :</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-2">Judul TA :</label>
                                                <div class="col-sm-10">
                                                    <textarea name="judul_ta" class="form-control" id="" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Nama :</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="email" class=" col-sm-3 col-form-label">Seminar :</label>
                                                <div class="col-sm-8">
                                                    <select name="seminar" id="" class="form-control">
                                                        <option value="">Proposal</option>
                                                        <option value="">Skripsi</option>
                                                        <option value="">Tugas Akhir</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Prodi :</label>
                                                <div class="col-sm-8">
                                                    <select name="prodi" id="" class="form-control">
                                                        <option>- Pilih Prodi -</option>
                                                        <option value="si">Sistem Informasi</option>
                                                        <option value="ti">Teknik Informatika</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="email" class=" col-sm-3 col-form-label">Pembimbing :</label>
                                                <div class="col-sm-8">
                                                    <select name="seminar" id="" class="form-control">
                                                        <option value="">Sirajul Munir, S.Si, M.Kom.</option>
                                                        <option value="">Sirajul Munir, S.Si, M.Kom.</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-4 col-form-label">Tanggal Seminar :</label>
                                                <div class="col-sm-6">
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="email" class=" col-sm-3 col-form-label">Penguji 1 :</label>
                                                <div class="col-sm-8">
                                                    <select name="seminar" id="" class="form-control">
                                                        <option value="">Sirajul Munir, S.Si, M.Kom.</option>
                                                        <option value="">Sirajul Munir, S.Si, M.Kom.</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">Ruangan :</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="email" class=" col-sm-3 col-form-label">Penguji 2 :</label>
                                                <div class="col-sm-8">
                                                    <select name="seminar" id="" class="form-control">
                                                        <option value="">Sirajul Munir, S.Si, M.Kom.</option>
                                                        <option value="">Sirajul Munir, S.Si, M.Kom.</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="#" class="btn btn-danger">Hapus</a>

                                </form>

                            </fieldset>
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