<?php 

include 'conn.php';

?>


<?php 
    $detail = $_GET['iddetail'];
   $ambil = $koneksi ->query("SELECT * FROM tb_barang WHERE barang_id = '$detail'");
         $pecah  = $ambil->fetch_assoc();
         
         

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="container bg-secondary pt-3 pb-5 pr-5 pl-5 mt-5 rounded">
<h2 class="text-center bg-primary"><?php echo $pecah['barang_nama']; ?></h2>
    <div class="row">



<div class="col-md-5">
    <div class="">
<img src="<?php echo $pecah['barang_gambar']; ?>" class="rounded" style="width: 100%; height: 400px;"  >
</div>
</div>


<div class="col-md-7 mt-5">

<table class="table table-striped">
     <thead>
            <tr>
            <th>id barang</th>
            <th>nama barang</th>
            <th>harga satuan</th>
            <th>supplier</th>
            <th>Berat Barang</th>
            <th>Panjang Barang</th>   
            </tr>
    </thead>
    <tbody>



            <tr>
                <td><?php echo $pecah['barang_id']; ?></td>
                <td><?php echo $pecah['barang_nama'] ?></td>
                <td><?php echo $pecah['barang_harga'] ?></td>
                <td><?php echo $pecah['supplier'] ?></td>
                <td><?php echo $pecah['barang_berat'] ?> Kg</td>
                <td><?php echo $pecah['barang_panjang'] ?> Cm</td>


            </tr>


    </tbody>

</table>
<a href="databarang.php" class="btn btn-danger" >Kembali</a>
</div>



    </div>
</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>