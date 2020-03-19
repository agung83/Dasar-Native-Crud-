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
<h1 class="text-center bg-info" style=" height: 80px;"><span class="text-white font-italic font-weight-bold">Table Barang CV. Maju Jaya</span></h1>

  <table class="table table-bordered">
    <thead>
        <tr class="bg-secondary">
        <th>Nomor</th>
        <th>Id Barang</th>
        <th>Nama Barang</th>
        <th>Stok Barang</th>
        <th>Harga Barang</th>
        <th>Jenis Barang</th>
        <th>Tanggal Masuk</th>
        <th>Berat Barang</th>
        <th>Panjang Barang</th>
        <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
      <?php $nomor = 1; ?>
 <?php $ambil =  $koneksi ->query("SELECT * FROM tb_barang");
           while ( $pecah =  $ambil-> fetch_assoc()) {
 ?>
       <tr class="bg-dark">
            <td class="bg-secondary"><?php echo $nomor; ?></td>
            <td class="bg-warning"><?php echo $pecah['barang_id'] ?></td>
            <td class="bg-primary"><?php echo $pecah['barang_nama'] ?></td>
            <td class="bg-success"><?php echo $pecah['barang_stok'] ?></td>
            <td class="bg-info"><?php echo $pecah['barang_harga'] ?></td>
            <td class="bg-danger"><?php echo $pecah['barang_jenis'] ?></td>
            <td class="bg-info"><?php echo $pecah['barang_tglmasuk'] ?></td>
            <td class="bg-warning"><?php echo $pecah['barang_berat'] ?>   Kg</td>
            <td class="bg-primary"><?php echo $pecah['barang_panjang'] ?> Cm</td>
            <td> 
              <a href="" style="width: 69px;" class="btn btn-warning mb-1">Edit</a>
              <a href="" class="btn btn-danger">Hapus</a>
              <a href="" class="btn btn-success">Detail</a>
            </td>
            
       </tr>
       <?php $nomor++; ?>
           <?php } ?>
    </tbody>
  </table>
  <a href="tambah_barang.php" class="btn btn-primary mb-4">Tambah Data</a>


</div>









<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>