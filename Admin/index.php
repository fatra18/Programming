<?php
    session_start();
    
    if(isset($_SESSION['email'])){
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- link icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
</head>
<body> 
    <div class="container-fluid p-0">
        <div class="row">
            <!-- sidebar -->
             <?php include 'layouts/sidebar.php';
                   include './config/koneksi.php';

                   $queryUser = "SELECT * FROM users";
                   $resUser   = mysqli_query($koneksi, $queryUser);
                  
                   $queryArticle = "SELECT * FROM articles";
                   $resArticles   = mysqli_query($koneksi, $queryArticle);

                   $queryCategory = "SELECT * FROM categoriers";
                   $resCategory   = mysqli_query($koneksi, $queryCategory);
                   
                   
                   
             ?>

             <div class="col-10 d-flex h-25 ">
                <div class=" p-3 mb-2 bg-warning text-white rounded-1 w-25 p-3 mt-5 me-5 text-center">
                    <i class="bi bi-people-fill " style="font-size: 25px;"></i>
                    <p>Total User</p> 
                    <h1><?= mysqli_num_rows($resUser) ?></h1>
                    <i class="bi bi-eye"></i>
                </div>    
                <div class=" p-3 mb-2 bg-danger text-white rounded-1 w-25 p-3 mt-5 me-5 text-center" >
                    <i class="bi bi-journals text-center" style="font-size: 25px;" ></i>
                    <p>Total Article</p>
                    <h1><?= mysqli_num_rows($resArticles) ?></h1>
                    <i class="bi bi-eye"></i>
                </div> 
                <div class=" p-3 mb-2 bg-primary text-white rounded-1 w-25 p-3 mt-5 me-5 text-center">
                    <i class="bi bi-list text-center" style="font-size: 25px; "></i>
                    <p>Total category</p>
                    <h1><?= mysqli_num_rows($resCategory) ?></h1>
                    <i class="bi bi-eye "></i>
                </div>
            </div>  
             </div>       
        </div> 
    </div>
    
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <?php
       }else{
            echo 'anda belum login';
        }
    ?>
</body>
</html>