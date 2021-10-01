
<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"> -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Universitas Bumigorra</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mhs.php">Data Mahasiswa</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="dosen.php">Data Dosen</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
	<div class="container">
		<div class="alert alert-info"><a href="https://shimozuki.github.io/">Data Dosen</a></div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>NIM</th>
					<th>Nama Mahasiswa</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>

				<?php 
                require 'config.php';
                $no = 0;
                $query = mysqli_query($conn, "SELECT * FROM dosen");
                while ($row=mysqli_fetch_object($query))
                {
                    $no++;
				 ?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $row->nip; ?></td>
					<td><?= $row->nama_dosem; ?></td>
					<td><?= $row->alamat; ?></td>
					<td>
						<a href="hapus.php?nip=<?= $row->nip; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Del</a>
						<a href="edit.php?nip=<?= $row->nip; ?>" class="btn btn-warning">Edit</a>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>
