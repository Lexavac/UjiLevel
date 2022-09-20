<?php

  include 'koneksi.php';

  if (isset($_POST['simpan'])){

    $id_b = $_POST['id_b'];
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $condition = $_POST['condition'];
    $berat = $_POST['berat'];
    $jumlah = $_POST['jumlah'];
    $tgl_p = $_POST['tgl_p'];
    $tgl_k = $_POST['tgl_k'];
    $status = $_POST['status'];

    $sqla = "SET FOREIGN_KEY_CHECKS=0";
    $sqlb = "SET FOREIGN_KEY_CHECKS=1";
    $sql = "INSERT INTO brg VALUES('$id_b','$nama_barang', '$jenis_barang', '$condition', '$berat', '$jumlah', '$tgl_p', '$tgl_k', '$status') ";

    $query1 = mysqli_query($connect,$sqla);
    $query2 = mysqli_query($connect,$sql);
    $query3 = mysqli_query($connect,$sqlb);


    if($query){
      header('Location: displaybrg1.php');

    }else{
      header('Location: simpan.php?status=gagal');
    }
  }

?>