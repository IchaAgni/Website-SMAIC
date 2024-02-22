<?php

include "pondasi/kepala.php";
include "pondasi/kiri.php";


?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Edit Data Admin </h3>
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
                    <?php
                    $id = $_GET['id'];
                    $sql = mysqli_query($conn, "SELECT * FROM admin where id='$id'");
                    while ($b = mysqli_fetch_assoc($sql)) {

                    ?>

                        <form class="form" action="admin-act-edit.php" method="post">
                            <div class="box-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama User</label>
                                            <input type="hidden" name="id" value="<?php echo $b['id'] ?>" class="form-control">
                                            <input type="text" name="nm_user" value="<?php echo $b['nm_user'] ?>" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username" value="<?php echo $b['username'] ?>" required></input>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" value="<?php echo $b['password'] ?>" required></input>
                                        </div>
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select name="level" class="form-control" required>
                                                <option value="admin">Admin</option>
                                            </select>

                                        </div>
                                    </div>

                                </div>

                            </div> <?php } ?>
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