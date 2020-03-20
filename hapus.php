<?php 
 $id_hapus  =  $_GET['idhapus'];
include 'conn.php';

$koneksi ->query("DELETE FROM tb_barang WHERE barang_id = '$id_hapus'");

echo "
<script>
alert('data terhapus')
window.location='databarang.php';


</script>";



?>