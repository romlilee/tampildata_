<?php 
require 'config.php';
  if(isset($_POST['submit'])) {
    $nim = htmlspecialchars($_POST['nim']); 
    $nama = htmlspecialchars($_POST['nama']);
    $prodi = htmlspecialchars($_POST['prodi']);
        $query = mysqli_num_rows(mysqli_query($conn, "SELECT *  FROM mahasiswa WHERE nim=$nim"));

        if($query > 0){
          echo "<script>window.alert('NIM yang anda masukan sudah ada')
      window.location='daftarmhs.php'</script>";
        }else{
          $daftar = mysqli_query($conn, "INSERT INTO mahasiswa VALUE ('$nim','$nama','$prodi')");

          header("Location: mhs.php" );
        }
    }
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"> -->
</head>
<body>
<div class="alert alert-info">Daftar Dosen</div>
<form method="POST" action="">
  <div class="form-group">
    <label for="exampleFormControlInput1">nim</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="nim">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">prodi</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="prodi">
  </div>
  <div class="form-group">
  <button type="submit" name="submit" class="btn btn-primary">OK</button>
  </div>
</form>

	</div>

</body>
</html>
