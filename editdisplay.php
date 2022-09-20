<?php
include 'koneksi.php';

$id_s = $_GET['id_s']; // menangkap data atau emngambil data melalui url
$sql = "SELECT * FROM ssw WHERE id_s = '$id_s'";
$query = mysqli_query($connect,$sql);
$data = mysqli_fetch_assoc($query); // mengambil data dari sql lalu di ubah dalam bentuk baris dan nama indeks array nya di ubah dalam bentuk column

if(mysqli_num_rows($query) < 1 ) { // jika nilai balik dari query menampilkan kurang dari 1 baris data maka akan mengeluarkan steatment 
  die("Data Tidak Ditemukan");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lexavac Web Design</title>

  <!-- --------- Unicons Icons --------- -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="shortcut icon" href="favicon.SVG" type="image/SVG+xml">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oswald:wght@200;300;400;500;600;700&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100&display=swap" rel="stylesheet"> 
  <!-- --------- CSS Files --------- -->
  <link rel="stylesheet" href="editeth.css">
</head>
<body>
  <header>
    
    <main>
  
  <nav>
    <a href="index.html" class="brand">
      <span>EL</span>xavac.
    </a>
  </div>

  <div class="container">
      <div>
      </div>
      <div class="line">
        <div></div>
      </div>
      <ul>
        <li><a class="s"href="index.html"><img src="./Timeline.svg" alt=""> Siswa</a></li>
        <li><a class="b" href="#about"><img src="./Timeline.svg" alt=""> Barang</a></li>
      </ul>
    </div>

    <div class="aes">
      <div class="src">
          <h2 class="ha"><i class="uil uil-search"></i> Search Now.....</h2>
      </div>

      <div class="sq">
        <div></div>
      </div>

      <div class="bck">
        <h3 class="bc"> <a href=""><i class="uil uil-angle-left"></i>Back To Dashboard</a></h3>
      </div>

    </div>
  </nav>

    <div class="dash">
      <div>
        <h1>Dashboard.</h1>
        <p>Hi , Welcome To Data Siswa</p>
      </div>
    </div>

    <div class="vrs">
      <div></div>
    </div>

    </div>

    <form action="funceddit.php" method="post">

          <h4 class="ii">ID User :</h4><input class="input" type="text" name="id_s" placeholder="Your ID" value="<?php echo $data ['id_s'] ?>" ><br>
          <h4 class="ii">ID Item :</h4><input class="input" type="number" name="id_b" placeholder="Your ID"value="<?php echo $data ['id_b'] ?>" ><br>
          <h4 class="ii">Name :</h4><input class="input" type="text" name="name" placeholder="Your ID"value="<?php echo $data ['name'] ?>" ><br>
          <h4 class="ii">Tall :</h4><input class="input" type="text" name="Tall" placeholder="Your ID"value="<?php echo $data ['Tall'] ?>" ><br>
          <h4 class="ii">Birth :</h4><input class="input" type="date" name="Birth" placeholder="Your ID"value="<?php echo $data ['Birth'] ?>" ><br>
          <h4 class="ii">Gender :</h4><input class="input" type="text" name="Gender" placeholder="Your ID"value="<?php echo $data ['Gender'] ?>" ><br>
          <h4 class="ii">Addres :</h4><input class="input" type="text" name="Addres" placeholder="Your ID"value="<?php echo $data ['Addres'] ?>" ><br>
          <h4 class="ii">Age :</h4><input class="input" type="text" name="age" placeholder="Your ID"value="<?php echo $data ['age'] ?>" ><br>
          <h4 class="ii">Grade :</h4><input class="input" type="text" name="grade" placeholder="Your ID"value="<?php echo $data ['grade'] ?>" ><br>
          <h4 class="ii">Telephone :</h4><input class="input" type="number" name="telephone" placeholder="Your ID"value="<?php echo $data ['telephone'] ?>" ><br>
          <h4 class="ii">Email :</h4><input class="input" type="email" name="email" placeholder="Your ID"value="<?php echo $data ['email'] ?>" ><br>
          <input class="submit" type="submit" name="simpan" value="simpan">
          
      
  
  
  
  
  
  
  
  
  
  
  
  
  
    </form>

  </main>
</header>

</body>
</html>