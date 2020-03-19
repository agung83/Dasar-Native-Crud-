<?php 
include 'conn.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>

<title>Table Responsive</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<body>


<div class="container bg-light shadow-lg mt-5  pt-4 pb-4 pl-4 pr-4">
<h1 class="text-center bg-info" style=" height: 80px;"><span class="text-white font-italic font-weight-bold">Table Karyawan CV. Maju Jaya</span></h1>

  <table class="table table-bordered">
    <thead>
        <tr class="bg-secondary">
        <th>Nomor</th>
        <th>Id Karyaawan</th>
        <th>Nama Karyaawan</th>
        <th>Umur Karyaawan</th>
        <th>Tempat Tgl-Lahir</th>
        <th>Agama</th>
        <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
    <?php 
        $ambil = $koneksi ->query("SELECT * FROM tb_karyawan");
                while ($pecah = $ambil ->fetch_assoc() ) {
    ?>
        <tr class="bg-dark">
            <td class="bg-primary"><?php echo $nomor ?></td>
            <td class="bg-secondary"><?php echo $pecah['karyawan_id'] ?></td>
            <td class="bg-warning"><?php echo $pecah['karyawan_nama'] ?></td>
            <td class="bg-primary"><?php echo $pecah['karyawan_umur'] ?></td>
            <td class="bg-success"><?php echo $pecah['karyawan_tempatttl'] ?></td>
            <td class="bg-info"><?php echo $pecah['karyawan_agama'] ?></td>
            <td> 
                <a href="" style="width: 69px;" class="btn btn-warning mb-1">Edit</a>
                <a href="" class="btn btn-danger">Hapus</a>
            </td>
            
        </tr>
        <?php $nomor++; ?>
        <?php } ?>

    </tbody>
</table>
<a href="tambah_karyawan.php" class="btn btn-primary mb-4">Tambah Data</a>


</div>









<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>