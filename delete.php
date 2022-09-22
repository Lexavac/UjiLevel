<?php 

include 'koneksi.php';

if(isset($_GET['id_s'])){
  header ('Location: eth.php');
}

$id_s = $_GET['id_s'];
$sql = "DELETE FROM ssw WHERE id_s = '$id_s'";
$query = mysqli_query($connect,$sql);

if($query){
  header('Location: eth.php');// jika query berhasil di jalankan maka akan mengeluarkan statement seperti di bawah ini 

}else{
  header('Location: hapus.php?status=gagal');
}



?>