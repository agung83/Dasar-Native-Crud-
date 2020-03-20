<?php include'conn.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h2 class="text-center bg-info">Dasar Crud</h2>
        <h3 class="text-center">Edit Data</h3>
        <a href="databarang.php" class="btn btn-success mb-3">Kembali</a>
        
        <?php 
            $edit = $_GET['idedit'];
            
           $ambil = $koneksi->query("SELECT * FROM tb_barang where barang_id = '$edit'");
            $pecah = $ambil->fetch_assoc();
           //var_dump($pecah);
            
            
        ?>

        <form action="" method="POST">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" class="form-control" value="<?php echo $pecah['barang_nama']; ?>">
                </div>

                <div class="form-group">
                    <label>Stok Barang</label>
                    <input type="text" class="form-control" value=" <?php echo $pecah['barang_stok']; ?>">
                </div>

                <div class="form-group">
                    <label>Harga Barang</label>
                    <input type="number" class="form-control" value="<?php echo $pecah['barang_harga']; ?>" >
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">jenis Barang</label>
                    <input type="text" name="jenis" class="form-control" value="<?php  echo $pecah['barang_jenis']; ?>" >
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tgl Masuk Barang</label>
                    <input type="date" name="tglmasuk" class="form-control" value="<?php echo $pecah['barang_tglmasuk']; ?>" >
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">supplier</label>
                    <input type="text" name="supplier" class="form-control" value="<?php echo $pecah['supplier']; ?>" >
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Gambar Format .jpg</label>
                    <input type="text" name="gambar" class="form-control" placeholder="" value="<?php echo $pecah['barang_gambar']; ?>" >
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Berat Barang</label>
                    <input type="number" name="berat" class="form-control" value="<?php echo $pecah['barang_berat']; ?>" >
                </div>
                    
                <div class="form-group">
                    <label for="exampleInputPassword1">Panjang Barang</label>
                    <input type="number" name="panjang" class="form-control" value="<?php echo $pecah['barang_panjang']; ?>" >
                </div>

                <button  name="edit" type="submit" class="btn btn-danger">Edit</button>

        </form>






    </div>









</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</html>