<?php 

include 'koneksi.php';

if(isset($_GET['id'])){
  header ('Location: display1.php');
}

$id_pelanggan = $_GET['id_pelanggan'];
$sql = "DELETE FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'";
$query = mysqli_query($connect,$sql);

if($query){
  header('Location: tampilpelanggan.php');// jika query berhasil di jalankan maka akan mengeluarkan statement seperti di bawah ini 

}else{
  header('Location: hapus.php?status=gagal');
}



?>