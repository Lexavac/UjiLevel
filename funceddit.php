<?php

  include 'koneksi.php';

  if (isset($_POST['simpan'])){

    $id_s = $_POST['id_s'];
    $id_b = $_POST['id_b'];
    $name = $_POST['name'];
    $Tall = $_POST['Tall'];
    $Birth = $_POST['Birth'];
    $Gender = $_POST['Gender'];
    $Addres = $_POST['Addres'];
    $age = $_POST['age'];
    $grade = $_POST['grade'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];

    $sql = "UPDATE ssw SET id_b='$id_b', name='$name', Tall='$Tall', Birth='$Birth', Gender='$Gender', Addres='$Addres', age='$age', grade='$grade', telephone='$telephone', email='$email' WHERE id_s='$id_s'";
    $query = mysqli_query($connect,$sql);



    if($query){
      header('Location: eth.php');

    }else{
      header('Location: simpan.php?status=gagal');
    }
  }

?>