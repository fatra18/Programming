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
    <title>Admin Dashboard | Create User</title>
     <!-- Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body> 
    <div class="container-fluid p-0">
        <div class="row">
            <!-- sidebar -->
        
             
             <div class="col-10" style="padding: 0; padding-top:100px;">
                <div class="mx-5">
                
                    <table class="table table-bordered">

                        <?php

                        include "./connect/config.php";
                       
                        $id = isset($_GET['id']) ? $_GET['id'] : "";
                        $query = "select * FROM  users where id='$id'";
                       
                        $result = mysqli_query($koneksi,$query);
                        $data = mysqli_fetch_assoc($result);

                       

                        ?>  
                        <div class="" style="position:relative; left:130px;">
                            <div class="card-header text-center fs-5 ">Detail</div>
                                <div class="mx-5 card-body">
                                    <div class="row px-2 my-3">
                                        <div class="col-5 ps-5">Name</div>
                                        <div class="col 1 text-center">:</div>
                                        <div class="col-6"><?= $data['name'];?></div>
                                    </div>
                                    <div class="row px-2 my-3">
                                        <div class="col-5 ps-5">Email</div>
                                        <div class="col 1 text-center">:</div>
                                        <div class="col-6"><?= $data['email'];?></div>
                                    </div>
                                    <div class="row px-2 my-3">
                                        <div class="col-5 ps-5">Password</div>
                                        <div class="col 1 text-center">:</div>
                                        <div class="col-6"><?= $data['password'];?></div>
                                    </div>
                                    <div class="row px-2 my-3">
                                        <div class="col-5 ps-5">Gender</div>
                                        <div class="col 1 text-center">:</div>
                                        <div class="col-6"><?= $data['gender'];?></div>
                                    </div>
                                    <div class="row px-2 my-3">
                                        <div class="col-5 ps-5">Number</div>
                                        <div class="col 1 text-center">:</div>
                                        <div class="col-6"><?= $data['phone_number'];?></div>
                                    </div>
                                    <div class="row px-2 my-3">
                                        <div class="col-5 ps-5">Address</div>
                                        <div class="col 1 text-center">:</div>
                                        <div class="col-6"><?= $data['address'];?></div>
                                    </div>
                                    <div class="my-5 d-flex justify-content-center">
                                        <button class="btn btn-primary mx-3"><a href="./user/edit.php?id=<?= $_SESSION['id'];?>"class="text-decoration-none text-light " style="font-size:16px; ">User Edit</a></button>
                                        <button class="btn btn-danger mx-3"><a href="./profile.php" class="text-decoration-none text-light">Back</a></button>
                                    </div>
                                </div>    
                            </div>      
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