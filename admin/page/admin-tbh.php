<?php

include "pondasi/kepala.php";
include "pondasi/kiri.php";


?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Tambah Akun Admin</h3>
                <div class="d-inline-block align-items-center">
                    <nav>

                    </nav>
                </div>
            </div>

        </div>
    </div>


    <!-- Main content -->
    <section class="content">


        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Form Admin </h4>
                        <ul class="box-controls pull-right">
                            <li><a class="box-btn-close" href="testi.php"></a></li>
                            <li><a class="box-btn-slide" href="#"></a></li>
                        </ul>
                    </div>
                    <!-- /.box-header -->


                    <form class="form" action="admin-act-tbh.php" method="post">
                        <div class="box-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama </label>
                                        <input type="text" name="nm_user" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" required>

                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" required>

                                    </div>
                                    <div class="form-group">
                                        <label>Level</label>
                                        <select name="level" class="form-control" required>
                                            <option value="admin">Admin</option>
                                        </select>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="button" class="btn btn-danger btn-outline">
                                <a href="admin.php"> <i class="ti-arrow-alt"></i> Batal
                                </a></button>
                            &nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary btn-outline">
                                <i class="ti-save-alt"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>




        </div>

    </section>
    <!-- /.content -->
</div>
<?php


include "pondasi/kaki.php";


?>