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


<div class="container bg-light shadow-lg mt-2  pt-4 pb-4 pl-4 pr-4">
<h1 class="text-center bg-info" style=" height: 80px;"><span class="text-white font-italic font-weight-bold">Input Data</span></h1>
<a href="databarang.php" class="btn btn-primary mb-5">Kembali</a>


<form action="" method="POST" style="width: 50%;">

    <div class="form-group">
    <label for="exampleInputEmail1">Nama Barang</label>
    <input type="text" name="nama" class="form-control" >
    </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Stok Barang</label>
    <input type="text" name="stok" class="form-control" >
    </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Harga Barang</label>
    <input type="number" name="harga" class="form-control" >
    </div>

    <div class="form-group">
    <label for="exampleInputEmail1">jenis Barang</label>
    <input type="text" name="jenis" class="form-control" >
    </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Tgl Masuk Barang</label>
    <input type="date" name="tglmasuk" class="form-control" >
    </div>

    <div class="form-group">
    <label for="exampleInputEmail1">supplier</label>
    <input type="text" name="supplier" class="form-control" >
    </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Gambar Format .jpg</label>
    <input type="text" name="gambar" class="form-control" placeholder="contoh : agung.jpg  <----- harus buat titik jpg nya" >
    </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Berat Barang</label>
    <input type="number" name="berat" class="form-control">
    </div>
    
    <div class="form-group">
    <label for="exampleInputPassword1">Panjang Barang</label>
    <input type="number" name="panjang" class="form-control" >
    </div>
    
    
    <button  name="save" type="submit" class="btn btn-danger">Submit</button>

</form>
<?php

if (isset($_POST['save'])) {

    $txt_nama      = $_POST['nama'];
    $txt_stok      = $_POST['stok'];
    $txt_harga     = $_POST['harga'];
    $txt_jenis     = $_POST['jenis'];
    $txt_tglmasuk  = $_POST['tglmasuk'];
    $txt_supplier  = $_POST['supplier'];
    $txt_gambar  = $_POST['gambar'];
    $txt_berat     = $_POST['berat'];
    $txt_panjang   = $_POST['panjang'];

// echo $sql = "INSERT INTO tb_barang   
// ( barang_nama,
//     barang_stok,
//     barang_harga,
//     barang_jenis,
//     barang_tglmasuk,
//     barang_berat,
//     barang_panjang) 
//     VALUES (
//     '$txt_nama',
//     '$txt_stok',
//     '$txt_harga',
//     '$txt_jenis',
//     '$txt_tglmasuk',
//     '$txt_berat',
//     '$txt_panjang')";
//     exit;

    $koneksi ->query("INSERT INTO tb_barang   
                                            ( barang_nama,
                                                barang_stok,
                                                barang_harga,
                                                barang_jenis,
                                                barang_tglmasuk,
                                                supplier,
                                                barang_gambar,
                                                barang_berat,
                                                barang_panjang)
                                                 
                                                VALUES (
                                                '$txt_nama',
                                                '$txt_stok',
                                                '$txt_harga',
                                                '$txt_jenis',
                                                '$txt_tglmasuk',
                                                '$txt_supplier',
                                                '$txt_gambar',
                                                '$txt_berat',
                                                '$txt_panjang' )");
                                               


echo "
<script>

alert('data tersimpan mas bro')
window.location='databarang.php'

</script>";



}






?>













</div>









<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>