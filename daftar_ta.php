<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Daftar TA | Sistem Informasi Seminar Tugas Akhir</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="dist/css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="container">

            <div class="text-center mt-4">
                <h3>Sistem Informasi Seminar Tugas Akhir - SISTA</h3>
            </div>
            <div class="container mt-5">
                <a href="">Home</a> |
                <a href="">Jadwal</a> |
                <a href="">Daftar Seminar</a> |
                <a href="">Berita</a> |
                <a href="">About</a>
                <div class="card mt-3">
                    <div class="card-body">
                        <h6>Pendaftaran Seminar berlaku untuk Mahasiswa yang telah mendapatkan persetujuan dari Pembimbing TA </h6>
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
                                <div class="row">
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
                                <button type="submit" class="btn btn-primary">Daftar</button>

                            </form>

                        </fieldset>

                    </div>
                </div>

            </div>
        </div>