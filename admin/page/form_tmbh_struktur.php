<?php

include "pondasi/kepala.php";
include "pondasi/kiri.php";


?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Tambah Data Struktur</h3>
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
                        <h4 class="box-title">Form Struktur</h4>
                        <ul class="box-controls pull-right">
                            <li><a class="box-btn-close" href="struktur.php"></a></li>
                            <li><a class="box-btn-slide" href="#"></a></li>
                        </ul>
                    </div>
                    <!-- /.box-header -->
                    
                    <?php 
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            $sql = mysqli_query($conn, "SELECT * FROM struktur where id='$id'");
                            while ($b = mysqli_fetch_assoc($sql)) {
                    ?>
                    <form class="form" action="act_edit_struktur.php" method="post" enctype="multipart/form-data">
                        <div class="box-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label>Foto</label> 
                                        <input type="hidden" name="id" value="<?php echo $b['id'] ?>" class="form-control">
                                        <input type="file" name="image" value="<?php echo $b['foto'] ?>" class="form-control" required>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="button" class="btn btn-danger btn-outline">
                                <a href="struktur.php"> <i class="ti-arrow-alt"></i> Batal
                                </a></button>
                            &nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary btn-outline">
                                <i class="ti-save-alt"></i> Simpan
                            </button>
                        </div>
                    </form>
                    <?php      
                              }
                        } else {
                    ?>
                            <form class="form" action="act_tmbh_struktur.php" method="post" enctype="multipart/form-data">
                        <div class="box-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input type="file" name="image" class="form-control" required>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="button" class="btn btn-danger btn-outline">
                                <a href="struktur.php"> <i class="ti-arrow-alt"></i> Batal
                                </a></button>
                            &nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary btn-outline">
                                <i class="ti-save-alt"></i> Simpan
                            </button>
                        </div>
                    </form>
                    <?php
                        }
                    ?>
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