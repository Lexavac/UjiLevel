<?php 

  include 'koneksi.php';

  if (isset($_POST['simpan'])){ // mengecek apakah $_POST Simpan sudah pernah di buat jika sudah dia akan menampilkan data sesuai dari yang di isi di form

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


    //header : membuka lokasi 
    //sql: menyiapkan data 
    //query : menjalankan perintah dari sqll 


    if($query){ // jika query berhasil di jalankan maka akan kembali ke tampilpelanggan.php
      header('Location: eth.php'); // true

    }else{
      header('Location: edit.php?status=gagal'); // false
    }
  }

?>