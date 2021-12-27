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
 
  <?php
        include './config/koneksi.php';
    ?>
    <div class="container" style="padding-top: 100px;">
        <div class="row">

            <div class="col-8">
            
                <?php
                $query ="SELECT articles.*, categoriers.name as category_name FROM articles INNER JOIN categoriers on articles.category_id=categoriers.id WHERE category_id = $_GET[id]";
                $result = mysqli_query($koneksi,$query);
                                        
                $no =1;
                while ($data = mysqli_fetch_assoc($result)){
                
                ?>

                <div class="row py-4">
                    <div class="col-4">
                        <img class ="w-100" src="<?= $data['image']?>" alt="">
                    </div>
                    <div class="col-8">
                        <p><?= $data['category_name']?> </p>
                        <a  href="./detail.php?id=<?= $data['id']?>" class="h2 link-dark"><?= $data['title'] ?> </a>
                        <p><?= $data['content'] ?></p>
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
      <div style="background-color: #000; width: 100%; height: 150px; transform: translate(0%,150px);">
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