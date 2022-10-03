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
  
  <link rel="stylesheet" href="crt2.css">

</head>
<body>
  <header>
    
  
  
    <nav>
      <a href="" class="brand">
        LX.
      </a>
    </div>
  
    <div class="container">
        <div>
        </div>
  
        </div>
        <ul>
        <li><a class="s"href="eth.php"><img src="./muak.svg" alt=""></a></li>
          <li><a class="b"href="eth2.php"><img src="./et2.svg" alt=""></a></li>
          <li><a class="c"href="eth3.php"><img src="./et3.svg" alt=""> </a></li>
          <li><a class="d"href="eth4.php"><img src="./et4.svg" alt=""> </a></li>
          <!-- <li><a class="b" href="displaybrg1.php"><img src="./b.svg" alt=""> Barang</a></li> -->
        </ul> 
      </div>

    <div class="aes">
        </div>
        <h1 class="ha"> <img src="sc.svg" alt=""> </i></h1>

      <div class="sq">
        <div></div>
      </div>

      

    </div>
  </nav>


    <div class="dash">
      <div>
        <h1>Dashboard.</h1>
        <p>Hi , Welcome To Create Data Siswa</p>
      </div>
    </div>
  
  
    </form>
    <div class="user">
      <h5>Hi , Lexavac.</h5>
      <img src="acc.svg" alt="">
    </div>


  </main>
</header>

</body>
</html>
          
          <form action="funceddit.php" method="post">
            <table>

                <tr class="pi">
                  <td class="nm">ID User</td>
                  <td class="nm">:</td>
                  <td><input class="input" type="text" name="id_s" value="<?php echo $data ['id_s'] ?>"></td>
  
                <tr class="pi">
                  <td class="nm">ID Item</td>
                  <td class="nm">:</td>
                  <td><input class="input" type="text" name="id_b" value="<?php echo $data ['id_b'] ?>"></td>
                </tr>
                <tr class="pi">
                  <td class="nm">Name</td>
                  <td class="nm">:</td>
                  <td><input class="input" type="text" name="name" value="<?php echo $data ['name'] ?>"></td>
                </tr>
                <tr class="pi">
                  <td class="nm">Tall</td>
                  <td class="nm">:</td>
                  <td><input class="input" type="text" name="Tall" value="<?php echo $data ['Tall'] ?>"></td>
                </tr>
                <tr class="pi">
                  <td class="nm">Births</td>
                  <td class="nm">:</td>
                  <td><input class="input" type="date" name="Birth" value="<?php echo $data ['Birth'] ?>"></td>
                </tr>
                <tr class="pi">
                  <td class="nm">Gender</td>
                  <td class="nm">:</td>
                  <td>
                    <select class="input" name="Gender">
                      <option value="<?php echo $data ['Gender'] ?>"><?php echo $data ['Gender'] ?></option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </td>
                </tr>
                
                
                
                
                
                
                    <tr class="pii">
                      <td class="nm">Addres</td>
                      <td class="nm">:</td>
                      <td><input class="input" type="text" name="Addres"value="<?php echo $data ['Addres'] ?>"></td>
                    </tr>

              <tr class="pii">
                <td class="nm">Age</td>
                <td class="nm">:</td>
                <td><input class="input" type="text" name="age"value="<?php echo $data ['age'] ?>"></td>
              </tr>

              <tr class="pii">
                <td class="nm">Grade</td>
                <td class="nm">:</td>
                <td><select class="input" name="grade" >
                  <option value="<?php echo $data ['grade'] ?>"><?php echo $data ['grade'] ?></option>
                  <option value="X">X</option>
                  <option value="XI">XI</option>
                  <option value="XII">XII</option>
                </select>
              </td>
              </tr>

              <tr class="pii">
                <td class="nm">Telp</td>
                <td class="nm">:</td>
                <td><input class="input" type="number" name="telephone"value="<?php echo $data ['telephone'] ?>"></td>
              </tr>

              <tr class="pii">
                <td class="nm">Email</td>
                <td class="nm">:</td>
                <td><input class="input" type="email" name="email"value="<?php echo $data ['email'] ?>"></td>
              </tr>
              
              <tr class="piii">
                <td class="nm"></td>
                <td class="nm"></td>
                <td><input class="submit" type="submit" name="simpan" value="simpan"></td>
              </tr>


              




            </table>
          </form>
      
  
  
  
  
  
  
  
  
  
  
  
  
  
    </form>
    <div class="user">
      <h5>Hi , Lexavac.</h5>
      <img src="acc.svg" alt="">
    </div>


  </main>
</header>

</body>
</html>