<?php
    include './connect/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Oikya_Front_Logo.png" alt="" style="width:100px; height:50px; background-color:transperant;position:relative; left:50px; " >
    <h6 style="position:relative; left:60px; top:5px;width:100%; font-size:17px;">My&nbsp;Gallery</h6>
    <a href="./home.php" style="text-decoration:none;color:black;">Home</a>
    <div class="dropdown" style="position: relative;left:300px;">
    <button class="btn btn-secondary dropdown-toggle mx-5" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      Click here
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="margin-left: 100px; margin-top:40px;">
        <?php
        
          $queryCate ="SELECT * FROM categoriers";
          $resCate=mysqli_query($koneksi,$queryCate);
          $noCate = 1;
          
          while($data=mysqli_fetch_assoc($resCate)){
        ?>
        <li class="py-1">
          <a href="home.php?cateId=<?=$data['id']?>" class="text-decoration-none fs-6 fw-normal text-dark px-4" style="color: #000 ;">
              <?=$data['name']?>
          </a>
      
        </li>
          <?php
        };
        ?>
      </ul>
     </div>
   
       
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      
      <div class="" style="margin-left: 500px;">
            <strong style="margin-left: 20px;">
              
                
            <a href="profile.php"><img src=" <?php
                    if ( isset($_SESSION['image'])){
                        echo $_SESSION['image'];
                    }else{echo'';}
                
                ?>" alt="" style="width:50px; margin-left:0px; border-radius:100px; transform:translate(0%,20%); "></a>
            <p style="margin-left: -30px; margin-top:-30px">
                    <?php
                    if ( isset($_SESSION['name'])){
                        echo $_SESSION['name'];
                    }else{echo'';}
                    
                ?>
                
            </p>
        </div>   
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>
