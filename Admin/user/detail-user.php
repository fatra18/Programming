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

                        include "../config/koneksi.php";
                        $id = isset($_GET['id']) ? $_GET['id'] : "";
                        $query = "select * FROM  users where id='$id'";
                       
                        $result = mysqli_query($koneksi,$query);
                        $data = mysqli_fetch_assoc($result);

                       

                        ?>
                        <tbody>
                            <tr>
                                <th >Address</th>
                                 <td><?= $data['address']; ?></td> 
                        </tbody>
                    </table>
                  
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