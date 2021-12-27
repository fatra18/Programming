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
             <?php 
                include '../layouts/sidebar.php';
                include '../config/koneksi.php';
             ?>  
             
             <div class="col-10" style="padding: 0; padding-top:100px;">
                <div class="mx-5">
                
                    <div class="row">
                      <div class="row-md-8 m-auto card p-5">
                        <form action="./create_proses.php"method="POST">            
                        <div class="mb-3">
                            <div>
                                <label for="nameInput" class="form-label">Name</label>
                                <input  name="name" type="text" class="form-control" 
                                id="nameInput"> 
                            </div>

                            <div>
                                <label for="emailInput" class="form-label">Email</label>
                                <input  name="email" type="email" class="form-control" 
                                id="emailInput"> 
                            </div>

                            <div>
                                <label for="passwordInput" class="form-label">Password</label>
                                <input  name="password" type="password" class="form-control" 
                                id="passwordInput"> 
                            </div>

                            <div>
                                <input  name="gender" type="radio" class="" id=gender1Input value="pria"> 
                                <label for="gender2Input" class="form-label">Laki - Laki</label>
                                
                                <input  name="gender" type="radio" class="" id=gender2Input value="wanita">  
                                <label for="gender2Input" class="form-label">Perempuan</label>
                        
                            </div>
                            
                            <div>
                                <label for="phoneNumberInput" class="form-label">Phone Number</label>
                                <input  name="phone_number" type="text" class="form-control" 
                                id="phoneNumberInput"> 
                            </div>

                            <div>
                                <label for="addressInput" class="form-label">Address</label>
                                <textarea name="address"  class="form-control" id="addressInput" cols="30" rows="3"></textarea>
                            </div>

                            <div>
                                <label for="imageInput" class="form-label">Image Url</label>
                                <input  name="image" type="text" class="form-control" 
                                id="imageInput"> 
                            </div>

                         <button class="btn btn-md btn-primary px-5 mt-5">submit
                         </button>
                        </div>
                        </form>
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