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

    $sqla = "SET FOREIGN_KEY_CHECKS=0";
    $sqlb = "SET FOREIGN_KEY_CHECKS=1";

    $sql = "INSERT INTO ssw VALUES('$id_s','$id_b', '$name', '$Tall', '$Birth', '$Gender', '$Addres', '$age', '$grade', '$telephone', '$email') ";

    $query1 = mysqli_query($connect,$sqla);
    $query2 = mysqli_query($connect,$sql);
    $query3 = mysqli_query($connect,$sqlb);

    if($query2){
      header('Location: eth.php');

    }else{
      header('Location: simpan.php?status=gagal');
    }
  }

?>