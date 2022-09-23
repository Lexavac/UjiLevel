<?php

  include 'koneksi.php';

  if (isset($_POST['simpan'])){

    $id_b = $_POST['id_b'];
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $keadaan = $_POST['keadaan'];
    $berat = $_POST['berat'];
    $jumlah = $_POST['jumlah'];
    $tgl_p = $_POST['tgl_p'];
    $tgl_k = $_POST['tgl_k'];
    $stat = $_POST['stat'];


    $sql = "UPDATE brg SET
    nama_barang='$nama_barang', 
    jenis_barang='$jenis_barang', 
    keadaan = '$keadaan',
    berat = '$berat',
    jumlah = '$jumlah',
    tgl_p = '$tgl_p',
    tgl_k = '$tgl_k',
    stat = '$stat'


    WHERE id_b='$id_b'";


    $sqla = "SET FOREIGN_KEY_CHECKS=0";
    $sqlb = "SET FOREIGN_KEY_CHECKS=1";



    $query1 = mysqli_query($connect,$sqla);
    $query = mysqli_query($connect,$sql);
    $query3 = mysqli_query($connect,$sqlb);




    if($query){
      header('Location: displaybrg1.php');

    }else{
      header('Location: funceddit.php?status=gagal');
    }
  }

  var_dump($keadaan)

?>