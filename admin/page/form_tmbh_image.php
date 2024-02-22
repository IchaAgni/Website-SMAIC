 <?php

include "pondasi/kepala.php";
include "pondasi/kiri.php";


?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Tambah Image Slider</h3>
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
                        <h4 class="box-title">Form Image Slider</h4>
                        <ul class="box-controls pull-right">
                            <li><a class="box-btn-close" href="index.php"></a></li>
                            <li><a class="box-btn-slide" href="#"></a></li>
                        </ul>
                    </div>
                    <!-- /.box-header -->
                    
                    <?php 
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            $sql = mysqli_query($conn, "SELECT * FROM image_slider where id='$id'");
                            while ($b = mysqli_fetch_assoc($sql)) {
                    ?>
                    <form class="form" action="act_edit_image.php" method="post" enctype="multipart/form-data">
                        <div class="box-body">

                            <div class="row">
                                <div class="col-md-12">
                                     <div class="form-group">
                                        <label>Gambar Slider</label>
                                        <input type="hidden" name="id" value="<?php echo $b['id'] ?>" class="form-control">
                                        <input type="file" name="image" value="<?php echo $b['foto'] ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="basicInput">Urutan Gambar Slider</label>
                                        <select name="urutan" class="form-control">
                                        <option value="">-- Pilih --</option>
                                        <option value="0">Pertama</option>
                                        <option value="1">Kedua</option>
                                        <option value="2">Ketiga</option>
                                        </select>         
                                    </div>
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input type="text" name="judul" value="<?php echo $b['judul'] ?>" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="button" class="btn btn-danger btn-outline">
                                <a href="image_slider.php"> <i class="ti-arrow-alt"></i> Batal
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
                            <form class="form" action="act_tmbh_image.php" method="post" enctype="multipart/form-data">
                        <div class="box-body">

                            <div class="row">
                                <div class="col-md-12">
                                     <div class="form-group">
                                        <label>Gambar Slider</label>
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="basicInput">Urutan Gambar Slider</label>
                                        <select name="urutan" class="form-control">
                                        <option value="">-- Pilih --</option>
                                        <option value="0">Pertama</option>
                                        <option value="1">Kedua</option>
                                        <option value="2">Ketiga</option>
                                        </select>         
                                    </div>
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input type="text" name="judul" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="button" class="btn btn-danger btn-outline">
                                <a href="image_slider.php"> <i class="ti-arrow-alt"></i> Batal
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