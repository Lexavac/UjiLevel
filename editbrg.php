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
  
  <link rel="stylesheet" href="crt2.css">

</head>
<body>
  <header>
    
  
  
  <nav>
    <a href="index.php" class="brand">
      LX.
    </a>
  </div>

  <div class="container">
      <div>
      </div>
      <div class="line">
        <div></div>
      </div>
      <ul>
        <li><a class="s"href="eth.php"><img src="./ss.svg" alt=""> Siswa</a></li>
        <li><a class="b" href="displaybrg1.php"><img src="./bb.svg" alt=""> Barang</a></li>
      </ul>
    </div>

    <div class="aes">
        </div>
        <h1 class="ha"> <img src="sc.svg" alt=""> </i></h1>

        <div class="srcs">
        <form action="searchfn.php" GET>
          <input class="src" type="text" name="search" placeholder="     Search Now..")>
        </form>
      </div>

      <div class="sq">
        <div></div>
      </div>

      

    </div>
  </nav>


    <div class="dash">
      <div>
        <h1>Dashboard.</h1>
        <p>Hi , Welcome To Data Siswa</p>
      </div>
    </div>

    <div class="vrr">
      <div><a href="eth.php"> <img src="./ar.svg" alt=""> </a></div>
    </div>



          
          <form action="funbrg.php" method="post">
            <table>

                <tr class="pi">
                  <td class="nm">ID Item</td>
                  <td class="nm">:</td>
                  <td><input class="input" type="text" name="id_b" value="<?php echo $data ['id_b'] ?>" ></td>
  
                <tr class="pi">
                  <td class="nm">Item Name</td>
                  <td class="nm">:</td>
                  <td><input class="input" type="text" name="nama_barang" value="<?php echo $data ['nama_barang'] ?>"></td>
                </tr>
                <tr class="pi">
                  <td class="nm">Item Type</td>
                  <td class="nm">:</td>
                  <td><input class="input" type="text" name="jenis_barang" value="<?php echo $data ['jenis_barang'] ?>"></td>
                </tr>
                <tr class="pi">
                  <td class="nm">Condition</td>
                  <td class="nm">:</td>
                  <td><input class="input" type="text" name="keadaan" value="<?php echo $data ['keadaan'] ?>"></td>
                </tr>
                
                <tr class="pi">
                  <td class="nm">Heavy</td>
                  <td class="nm">:</td>
                  <td><input class="input" type="text" name="berat" placeholder="Heavy" value="<?php echo $data ['berat'] ?>"></td>
                </tr>

                
                    <tr class="pii">
                      <td class="nm">Total</td>
                      <td class="nm">:</td>
                      <td><input class="input" type="text" name="jumlah" placeholder="Total" value="<?php echo $data ['jumlah'] ?>"></td>
                    </tr>

              <tr class="pii">
                <td class="nm">Date Return</td>
                <td class="nm">:</td>
                <td><input class="input" type="date" name="tgl_p" value="<?php echo $data ['tgl_p'] ?>"></td>
              </tr>

              <tr class="pii">
                <td class="nm">Date Borrow</td>
                <td class="nm">:</td>
                <td><input class="input" type="date" name="tgl_k" value="<?php echo $data ['tgl_k'] ?>"></td>
              </tr>

              <tr class="pii">
                <td class="nm">Stats</td>
                <td class="nm">:</td>
                <td><input class="input" type="text" name="stat" value="<?php echo $data ['stat'] ?>"></td>
              </tr>
              
              <tr class="piii">
                <td class="nm"></td>
                <td class="nm"></td>
                <td><input class="submit" type="submit" name="simpan" value="simpan"></td>
              </tr>


              




            </table>
          </form>

    <div class="user">
      <h5>Hi , Lexavac.</h5>
      <img src="acc.svg" alt="">
    </div>


  </main>
</header>

</body>
</html>