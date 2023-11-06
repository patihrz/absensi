<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Succes!</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/components.css" rel="stylesheet" type="text/css" />
</head>

<?php
    //membuat koneksi
    $con = mysqli_connect("localhost", "root", "", "phplogin");

    
    //memasukkan data ke array
        $nama       = $_POST['nama'];
        $npm        = $_POST['npm'];
        $jk         = $_POST['jk'];
        $alamat     = $_POST['alamat'];
        $jurusan    = $_POST['jurusan'];

        $total = count($nama);


    //melakukan perulangan input
    for($i=0; $i<$total; $i++){

        mysqli_query($con, "insert into latihan set
            nama    = '$nama[$i]',
            npm        = $npm[$i],
            jk      = '$jk[$i]',
            alamat  = '$alamat[$i]',
            jurusan = '$jurusan[$i]'
        ");
    }

    //kembali ke halaman sebelumnya
    echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
<strong> Sukses..!</strong> Absen Berhasil Tersimpan.
</div>';
echo '<meta http-equiv="refresh" content="3;url=home.php">';