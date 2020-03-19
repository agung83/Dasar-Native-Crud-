<?php 
        $txt_nama      = $_POST['nama'];
        $txt_stok      = $_POST['stok'];
        $txt_harga     = $_POST['harga'];
        $txt_jenis     = $_POST['jenis'];
        $txt_tglmasuk  = $_POST['tglmasuk'];
        $txt_berat     = $_POST['berat'];
        $txt_panjang   = $_POST['panjang'];

    include 'conn.php';


    $koneksi ->query("INSERT INTO `tb_barang`(`barang_nama`, 
                                            `barang_stok`, 
                                            `barang_harga`,
                                            `barang_jenis`,
                                            `barang_tglmasuk`,
                                            `barang_berat`,
                                            `barang_panjang`)
                                                VALUES (
                                                '$txt_nama',
                                                '$txt_stok',
                                                '$txt_harga',
                                                '$txt_jenis',
                                                '$txt_tglmasuk',
                                                '$txt_berat',
                                                '$txt_panjang'
                                                )");

 //  header('location: resonsivetable.php');
echo " <script>
alert('data tersimpan');
window.location='index.php';
</script>";                                             







?>

