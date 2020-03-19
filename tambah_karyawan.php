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
<h1 class="text-center bg-info " style=" height: 80px;"><span class="text-white font-italic font-weight-bold">Input Karyawan CV. Maju Jaya</span></h1>

<form action="" method="post" class="mt-4">

    <div class="form-group">
        <label >Nama Karyawan</label>
        <input type="text" name="nama" class="form-control">
    </div>

    <div class="form-group">
        <label>Umur Karyawan</label>
        <input type="text" name="umur" class="form-control">
    </div>

    <div class="form-group">
        <label>Tempat Tgl Lahir Karyawan</label>
        <input type="text" name="ttl" class="form-control">
    </div>

    <div class="form-group">
        <label>Agama Karyawan</label>
        <input type="text" name="agama" class="form-control">
    </div>

    <div class="button">
    <button name="simpan" value="submit" class="btn btn-info" >Simpan</button>
    </div>

</form>

<?php 
             if (isset($_POST['simpan'])) {
            
                    $nama     = $_POST['nama'];
                    $umur     = $_POST['umur'];
                    $ttl      = $_POST['ttl'];
                    $agama    = $_POST['agama'];   


//  echo $sql =  "INSERT INTO tb_karyawan (
//    karyawan_nama,
//    karyawan_umur,
//    karyawan_tempatt,
 //   karyawan_agama)
 //   VALUES (
 //       '$nama',
//        '$umur',
 //       '$ttl',
 //       '$agama')");

 //       exit;

                
                

                $koneksi -> query("INSERT INTO tb_karyawan (
                                                            karyawan_nama,
                                                            karyawan_umur,
                                                            karyawan_tempatttl,
                                                            karyawan_agama)
                                                            VALUES (
                                                                '$nama',
                                                                '$umur',
                                                                '$ttl',
                                                                '$agama')");

echo "
<script>

alert('data tersimpan')
window.location='datakaryawan.php'

</script>";


}





?>






















</div>









<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>