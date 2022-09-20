<?php 

include 'koneksi.php';

if(isset($_GET['id_b'])){
  header ('Location: display1.php');
}

$id_b = $_GET['id_b'];
$sql = "DELETE FROM brg WHERE id_b = '$id_b'";
$query = mysqli_query($connect,$sql);

if($query){
  header('Location: eth.php');// jika query berhasil di jalankan maka akan mengeluarkan statement seperti di bawah ini 

}else{
  header('Location: hapus.php?status=gagal');
}



?>