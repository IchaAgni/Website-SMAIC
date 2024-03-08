<?php
include 'koneksi.php'; // Pastikan titik koma setelah ini

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan bahwa file telah diunggah dengan benar
    if(isset($_FILES['image'])){
        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_ext = strtolower(end(explode('.', $file_name)));
        
        $extensions = array("jpeg","jpg","png");
        
        // Validasi ekstensi dan ukuran file
        if(in_array($file_ext, $extensions) === false){
            $errors[] = "Ekstensi file tidak diizinkan, silakan pilih file JPEG atau PNG.";
        }
        
        if($file_size > 2097152){
            $errors[] = 'Ukuran file harus tepat 2 MB';
        }
        
        if(empty($errors)){
           // Pastikan Anda menggunakan '/' di akhir jalur direktori
           move_uploaded_file($file_tmp, "/admin/foto/berita/" . $file_name);

            $judul = $_POST['judul'];
            $tgl = $_POST['tgl'];
            $detail = $_POST['detail'];

            var_dump($file_name, $judul, $tgl, $detail);
            die();

            // Query untuk menyimpan data baru ke dalam database
            $query = "INSERT INTO berita (foto, judul, tgl, detail) VALUES ('$file_name', '$judul', '$tgl', '$detail')";
            
            // Eksekusi query
            if(mysqli_query($conn, $query)) {
                // Data berhasil disimpan, arahkan ke Berita.php
                header("Location: Berita.php");
                exit(); // Pastikan kode berhenti di sini setelah header location
            } else {
                echo "ERROR: Gagal mengeksekusi query: $query. " . mysqli_error($conn);
            }
        } else {
            print_r($errors);
        }
    } else {
        echo "ERROR: Tidak ada file yang diunggah atau file tidak ditemukan.";
    }
} else {
    echo "ERROR: Metode pengiriman form harus POST.";
}
?>
