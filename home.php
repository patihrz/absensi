<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Adam-Pedia | Home Page</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
  <body class="loggedin">
		<nav class="navtop">
			<div>
			<h1>ABSENSI ONLINE<font size="-3">v1</font></h1>
			<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<br>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Form Absen Online</div>
    <div class="panel-body">
      <!-- membuat form  -->
      <!-- gunakan tanda [] untuk menampung array  -->
        <form action="proses.php" method="POST">
          <div class="control-group after-add-more">
            <label>Nama</label>
            <input type="text" name="nama[]" class="form-control">
            <label>Npm</label>
            <input type="text" name="npm[]" class="form-control">
            <label>Jenis Kelamin</label>
            <input type="text" name="jk[]" class="form-control">
            <label>Alamat</label>
            <input type="text" name="alamat[]" class="form-control">
            <label>Jurusan</label>
            <select class="form-control" name="jurusan[]">
                <option>Sistem Informasi</option>
                <option>Informatika</option>
                <option>Akuntansi</option>
                <option>Manajemen Informatika</option>
              </select>
            <br>
            <button class="btn btn-success add-more" type="button">
              <i class="glyphicon glyphicon-plus"></i> Add
            </button>
            <hr>
          </div>
          <button class="btn btn-success" type="submit">Submit</button>
        </form>

        <!-- class hide membuat form disembunyikan  -->
        <!-- hide adalah fungsi bootstrap 3, klo bootstrap 4 pake invisible  -->
        <div class="copy hide">
            <div class="control-group">
              <label>Nama</label>
              <input type="text" name="nama[]" class="form-control">
              <label>Npm</label>
              <input type="text" name="npm[]" class="form-control">
              <label>Jenis Kelamin</label>
              <input type="text" name="jk[]" class="form-control">
              <label>Alamat</label>
              <input type="text" name="alamat[]" class="form-control">
              <label>Jurusan</label>
              <select class="form-control" name="jurusan">
                <option>Sistem Informasi</option>
                <option>Informatika</option>
                <option>Akuntansi</option>
                <option>Manajemen Informatika</option>
              </select>
              <br>
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
              <hr>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<!-- fungsi javascript untuk menampilkan form dinamis  -->
<!-- penjelasan :
saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });

      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
</body>
</html>