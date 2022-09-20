<?php
include 'koneksi.php';

$id_b = $_GET['id_b']; // menangkap data atau emngambil data melalui url
$sql = "SELECT * FROM brg WHERE id_b = '$id_b'";
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
  <link rel="stylesheet" href="edtt.css">
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
        <li><a class="s"href="eth.php"><img src="./Timeline.svg" alt=""> Siswa</a></li>
        <li><a class="b" href="displaybrg1.php"><img src="./Timeline.svg" alt=""> Barang</a></li>
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

          <h4 class="ii">ID Item :</h4><input class="input" type="number" name="id_b" placeholder="ID Item"value="<?php echo $data ['id_b'] ?>" ><br>
          <h4 class="ii">Item Name :</h4><input class="input" type="text" name="nama_barang" placeholder="Item Name"value="<?php echo $data ['nama_barang'] ?>" ><br>
          <h4 class="ii">Type :</h4><input class="input" type="date" name="jenis_barang" placeholder="Type"value="<?php echo $data ['jenis_barang'] ?>" ><br>
          <h4 class="ii">Condition :</h4><input class="input" type="text" name="condition" placeholder="Condition"value="<?php echo $data ['condition'] ?>" ><br>
          <h4 class="ii">Heavy :</h4><input class="input" type="text" name="berat" placeholder="Heavy"value="<?php echo $data ['berat'] ?>" ><br>
          <h4 class="ii">Total :</h4><input class="input" type="text" name="jumlah" placeholder="Total"value="<?php echo $data ['jumlah'] ?>" ><br>
          <h4 class="ii">Date Borrow :</h4><input class="input" type="date" name="tgl_p" placeholder="Date Borrow"value="<?php echo $data ['tgl_p'] ?>" ><br>
          <h4 class="ii">Date Return :</h4><input class="input" type="date" name="tgl_k" placeholder="Date Return"value="<?php echo $data ['tgl_k'] ?>" ><br>
          <h4 class="ii">Status :</h4><input class="input" type="text" name="status" placeholder="Status"value="<?php echo $data ['status'] ?>" ><br>
          <input class="submit" type="submit" name="simpan" value="simpan">
          
      
  
  
  
  
  
  
  
  
  
  
  
  
  
    </form>

  </main>
</header>

</body>
</html>