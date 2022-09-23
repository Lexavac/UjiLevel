<?php 

include 'koneksi.php';

if(isset($_GET['id_s'])){
  header ('Location: eth.php');
}

$id = $_GET['id_s'];
$sql = "DELETE FROM ssw WHERE id_s = '$id'";
$query = mysqli_query($connect,$sql);

if($query){
  header('Location: eth.php');
}else{
  header('Location: delete.php?status=gagal');
}



?>