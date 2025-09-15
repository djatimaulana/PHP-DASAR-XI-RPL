<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
        <!-- Menghubungkan CDN Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
        <!-- Menghubungkan CDN Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Menghubungkan CDN Icon Bootstrap -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid bg-primary-subtle py-5">
    <div class="container">
    <div class="card">
    <div class="card-header">
    edit siswa
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-3">
            <img src="foto/<?=$_GET['foto'] ?>" class="rounded" style="width: 100%;">
            </div>
            <div class="col-6">
               <form>
  <div class="mb-3">
    <label for="nisn" class="form-label">NISN</label>
    <input type="number" value="<?= $_GET['nisn'] ?>" class="form-control" id="nisn">
    <div id="nama" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" value="<?= $_GET['nama'] ?>" class="form-control">
  </div>
   <div class="mb-3">
    <label for="kelas" class="form-label">Kelas</label>
    <input type="text" value="<?= $_GET['kelas'] ?>" class="form-control">
  </div>
   <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" value="<?= $_GET['alamat'] ?>" class="form-control">
  </div>
   <div class="mb-3">
    <label for="Gender" class="form-label">Gender</label>
    <input type="text" value="<?= $_GET['gender'] ?>" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="data_siswa.php" class="btn btn-warning">kembali</a>
        </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>