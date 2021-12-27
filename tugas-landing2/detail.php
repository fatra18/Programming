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
  <body style="background-color:#fff;">
 
  <?php
        include './config/koneksi.php';
        $id = $_GET['id'];
        $query = "SELECT * FROM articles WHERE id = $id";
        $result = mysqli_query($koneksi, $query);

        $data = mysqli_fetch_assoc($result);

        $comment_query ="SELECT * FROM comments WHERE article_id = $id";
        $result_comment = mysqli_query($koneksi ,$comment_query);

       
    
    ?>

    <div class="container" style="padding-top: 100px;">
        <h1 class="text-center h1"><?= $data['title'] ?></h1>
        <div class="row">
            <div class="col-md-8 py-5 m-auto">
                <div class="card my-5">
                    <img src="<?= $data['image'] ?>" alt="">
                    <div class="card-body">
                        <div class="card-title">
                            <p><?= $data['content'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 m-auto mb-5">
                <div class="card">
                    <div class="card-header">Comment</div>
                    <div class="card-body">
                      <form action="comment-process.php" method="post">
                        <div class="mb-3">
                          <label for="name">Name :</label>
                          <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="mb-3">
                          <label  class="form-label"for="comment">comment :</label>
                          <textarea class="form-control" name="comment" id="comment"></textarea>
                        </div>
                        <input type="hidden" name="article_id" value="<?= $data['id']?>">
                        <button class="btn btn-success">Submit</button>
                      </form>
                    </div>
                    <div class="card-body"></div>
                        <?php
                          while ($data_comment = mysqli_fetch_assoc($result_comment)){
                        ?>
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title h5 fw-bold"><?= $data_comment['commentator_name']?> </p>
                                <p class="card-subtitle"><?= $data_comment['date']?></p>
                                <p><?= $data_comment['comment']?></p>
                            </div>
                        </div>
                        <?php
                          };
                        ?>        
                </div>
            </div>
        </div>
    </div>
   
       
      <!-- footer -->
      <div style="background-color: #212121; width: 100%; height: 150px; transform: translate(0%,70%);">
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