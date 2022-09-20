<?php
include 'koneksi.php';//memanggil
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tampil Pelanggan</title>

  <link rel="stylesheet" href="style.css">
</head>
<body>
<h4 class="sub-heading"> <a href="pelanggan.html">ADD NEW DATA</a>
</h4> 

<div class="content">
        <!-- <span>PHP CRUD TABLE ENJOYERS.</span> -->
      </div>

      <form action="" GET>
        <input type="text" name="search" value="<?php if(isset($_GET['search'])){
          echo $_GET['search']; } ?>">
      </form>
                  
                  <div class="table">
                    <table>

                      <thead>
  
                        <tr>
                          <th>ID</th>
                          <th>Item code</th>
                          <th>Name</th>
                          <th>Age</th>
                          <th>Grade</th>
                          <th>Telephone</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
    
  <?php
  
  if(isset($_GET['search'])){
    $pencarian = $_GET['search'];
    $query = "SELECT * FROM ssw WHERE id_s LIKE '%".$pencarian."%'"; 
  }else{
    $query = "SELECT * FROM ssw";
  }
    
    $see = mysqLi_query ($connect,$query);
    while($data = mysqLi_fetch_array($see)){  
    
  echo 

  
  "<tr>
     <td>.$data[id_s].</td> 
     <td><a href='display2.php?id_b=".$data['id_b']."'>$data[id_b]</a></td>
     <td>.$data[name].</td>
     <td>.$data[age].</td>
     <td>.$data[grade].</td>
     <td>.$data[telephone].</td>
     <td>.$data[email].</td>

     <td>
     <a href='formedit.php?id_s=".$data['id_s']."'>Edit</a>
     <a href='hapus.php?id=".$data['id_s']."'>Hapus</a>
     </td>
   </tr>"

   ;
  }
  
  ?>

                      </thead>
                    </table>
                  </div>
</body>
</html>