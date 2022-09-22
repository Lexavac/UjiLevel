<?php 

include 'koneksi.php';

if(isset($_GET['id_b'])){
  header ('Location: displaybrg1.php');
}

$id_b = $_GET['id_b'];
$sql = "DELETE FROM brg WHERE id_b = '$id_b'";


$sqla = "SET FOREIGN_KEY_CHECKS=0";
$sqlb = "SET FOREIGN_KEY_CHECKS=1";

$query1 = mysqli_query($connect,$sqla);
$query = mysqli_query($connect,$sql);
$query3 = mysqli_query($connect,$sqlb);

if($query){
  header('Location: displaybrg1.php');// jika query berhasil di jalankan maka akan mengeluarkan statement seperti di bawah ini 

}else{
  header('Location: hapus.php?status=gagal');
}



?>