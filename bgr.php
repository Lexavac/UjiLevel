<?php 

  include 'koneksi.php';

  if (isset($_POST['simpan'])){ // mengecek apakah $_POST Simpan sudah pernah di buat jika sudah dia akan menampilkan data sesuai dari yang di isi di form

    $id_b = $_POST['id_b'];
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $condition = $_POST['condition'];
    $berat = $_POST['berat'];
    $jumlah = $_POST['jumlah'];
    $tgl_p = $_POST['tgl_p'];
    $tgl_k = $_POST['tgl_k'];
    $stat = $_POST['stat'];

    
    $sqla = "SET FOREIGN_KEY_CHECKS=0";
    $sqlb = "SET FOREIGN_KEY_CHECKS=1";
    
    $sql = "UPDATE brg SET nama_barang='$nama_barang', jenis_barang='$jenis_barang', condition='$condition', berat='$berat', jumlah='$jumlah', tgl_p='$tgl_p', tgl_k='$tgl_k', stat='$stat' WHERE id_b='id_b'";
    
    $query1 = mysqli_query($connect,$sqla);
    $query = mysqli_query($connect,$sql);
    $query3 = mysqli_query($connect,$sqlb);


    if($query){ // jika query berhasil di jalankan maka akan kembali ke tampilpelanggan.php
      header('Location: displaybrg1.php'); // true

    }else{
      header('Location: fbrg.php?status=gagal'); // false
    }
  }
