<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- js splide -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    
      <!-- boostrap css -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
      <!-- link icons -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
      
      <!-- link font -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;1,200;1,300&display=swap" rel="stylesheet"> 
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 

      <!-- Link animasi -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

      <link rel="stylesheet" href="style.css">
      
      <title>Document</title>
  </head>
  <body style="background-color: #fff;">

   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid " style="height: 70px; margin-top: 15px;width: 100%;">
             
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex flex-row bd-highlight mb-3 d-flex justify-content-center" id="navbarNav">
             
                <li class="nav-item">
                  <button class="btn btn-primary " style="height: 20%px; width:500px">
                    
                        <a class="nav-link" href="fatra.html" style="color: honeydew; font-family: 'Quicksand', sans-serif; font-weight: 900;"><i class="bi bi-arrow-left-short">BLOG</i></a>
                    
                  </button>
                </li>
               
                <li class="nav-item" style="transform: translate(100%,20%); ">
                  <i class="bi bi-facebook"  style="font-size: 17px; color: honeydew; margin-right: 15px;"></i>
                  <i class="bi bi-twitter"   style="font-size: 17px; color: honeydew; margin-right: 15px;"></i>
                  <i class="bi bi-linkedin"  style="font-size: 17px; color: honeydew; margin-right: 15px;"></i>
                  <i class="bi bi-instagram" style="font-size: 17px; color: honeydew; margin-right: 15px;"></i>
                </li>

              </ul>
            </div>
          </div>
      </nav>
 
    <?php
        include './config/koneksi.php';
    ?>
    <div class="container" style="padding-top: 100px;">
        <div class="row">

            <div class="col-8">
            
                <?php
                $query ="SELECT articles.*, categoriers.name as category_name ,users.name FROM articles INNER JOIN categoriers on articles.category_id=categoriers.id INNER JOIN users on articles.user_id=users.id";
                $result = mysqli_query($koneksi,$query);
                                        
                $no =1;
                while ($data = mysqli_fetch_assoc($result)){
                
                ?>

                <div class="row py-4">
                    <div class="col-4">
                        <img class ="w-100" src="<?= $data['image']?>" alt="">
                    </div>
                    <div class="col-8">
                        <a  href="./detail.php?id=<?= $data['id']?>" class="h2 link-dark"><?= $data['title'] ?> </a>
                        <p><?= $data['content'] ?></p>
                        <p> Post By:<strong> <?= $data['name'] ?></strong></p>
                    </div>
                  
                </div>
                    
                <?php
                };
                ?>
            
            </div>
            <div class="col-4">
                    <?php
                        $query ="SELECT * FROM categoriers";
                        $result = mysqli_query($koneksi,$query);
                                                
                        $no =1;
                        while ($data = mysqli_fetch_assoc($result)){
            
                    ?>
                        <p class="py-2"> 
                            <a class="text-decoration-none link-dark h6 fw-bold" href="./news-category.php?id=<?= $data['id'] ?>"><?= $data['name'] ?></a>
                        </p>     
                    
                    <?php
                        };
                    ?>
                    
            </div>

        </div>            
    </div>                

  

      <!-- footer -->
      <div style="background-color: #212121; width: 100%; height: 150px; transform: translate(0%,30%);">
          <div class="footerr d-flex justify-content-center mx-2">
            <div class="footer-icons mx-4">
            <i class="bi bi-facebook"></i>
            </div>
            <div class="footer-icons mx-4">
              <i class="bi bi-twitter"></i>
            </div>
            <div class="footer-icons mx-4">
              <i class="bi bi-linkedin"></i>
            </div>
            <div class="footer-icons mx-4">
              <i class="bi bi-instagram"></i>
            </div>
          
          </div>
          <p style="color: #fff; text-align: center; margin-top: 30px;">Copyrights © 2019. ISIK. — Responsive Personal Portfolio WordPress Template. Crafted with Love by STYLEXTHEME.</p>
      </div>
          
  </body>      
</html>