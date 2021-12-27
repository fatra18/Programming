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
     <!-- Boostrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <!-- link icons -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <?php     
            
    include './connect/config.php';
            
    ?>  
   

                
    <?php          
    include './connect/config.php';
    $id =$_SESSION['id'];
    $query="SELECT * from users WHERE id ='$id'";
    $res =mysqli_query($koneksi,$query);
    $data =mysqli_fetch_assoc($res);
    ?>  
          
    <div class="my-5 d-flex justify-content-center">
        <div class="" style="width: 200px; height: 200px; ">
            <img style="width :150px" class="" src="<?= $data['image']?> " alt="" style="background-position:center;">
        </div>
                
        <div style=" font-size:21px; position:relative;top:20px;">
            <p><?= $data['email']?></p>
        </div>
        <div  class="my-5" style="position: relative; right:215px; top:50px;">
            <p style=" "><?= $data['name']?></p>
        </div>      
                
        <?php          
        include './connect/config.php';
                
        $id =$_SESSION['id'];
        $queryPost="SELECT * from post where user_id = '$_SESSION[id]'";
        $res =mysqli_query($koneksi,$queryPost);
                
        ?>
                
        <div style="position:relative; top:60px; right:255px;">  
            <strong><?=mysqli_num_rows($res)?></strong><p style="position:relative;bottom:24px; left:20px;">Posts</p>
                   
        </div>
        <div class="dropdown" style="transform:translate(-60%,8%);">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-gear-fill"></i></button>
                <ul class="dropdown-menu mt-3 me-5 w-25" aria-labelledby="dropdownMenuButton1" style="width:50px; height:180px;">
                    <li><button class="btn btn-success h-25 my-3" style="position:relative;left:43px;bottom:10px;" ><a href="./home.php" class="text-decoration-none text-light">Home</a></button></li>
                    <li><button style="height:40px; position:relative; top:-10px; left:38px;" class="btn btn-danger"><a href="./auth/logout_process.php"class="text-decoration-none text-light" style="font-size:13px;  ">LOGOUT</a></button></li>
                    <li>
                        <button class="btn btn-dark" style="margin-left:32px; margin-top:8px;"><a href="./user/edit.php?id=<?= $_SESSION['id'];?>"class="text-decoration-none text-light " style="font-size:16px; ">User Edit</a></button>
                    </li> 
                    </ul>
            </div>
        </div>   
        <div>
                            
                <?php
                    include './connect/config.php';
                        
                    $queryCate="SELECT * FROM categoriers where pet_id=$_SESSION[id]";
                    $noCate = 1;
                    $resCate=mysqli_query($koneksi, $queryCate);
                    while($dataCate= mysqli_fetch_assoc($resCate)){
                    ?>
                    <div style="position: relative; left:690px; bottom:188px;">
                        <strong><?=mysqli_num_rows($resCate)?></strong><p style="position:relative;bottom:24px; left:20px;">category</p>
                    </div>
                    <div class="d-flex justify-content-center mx-5 my-2 flex-row">
                        <button class="btn btn-primary mx-3"><a class="text-light text-decoration-none"href="profile.php?id=<?= $_SESSION['id']?>">
                                                            <?= $dataCate['name']?>
                                                    
                        </a>
                        </button>   
                        <button class="btn btn-warning" style="position: relative; left:-20px;"><a class=""href="./category/edit.php?id=<?= $dataCate['id']?>"><i class="bi bi-pencil-fill text-dark"></i></a></button>
                        <form action="./category/delete.php" method="post">
                        <input type="hidden" name="id" value="<?= $dataCate['id']?>">
                        <button type="submit" class="btn btn-danger mx-3" style="position:relative; right:39px;"><i class="bi bi-trash"></i></button>
                        </form>
                      
                    </div>
                    <?php 
                    };
                    ?>
            </div>
        </div>
        <div style="margin-top:60px; ">
            <center>
                    <button class="btn btn-success "><a style="color:white; text-decoration:none;"href="./post/create.php">Add Postingan</a></button>
                    <button  class="btn btn-danger "><a style="color:white; text-decoration:none;"href="./category/create.php?id=<?= $_SESSION['id']?>">Add Category</a></button>
                    <button class="btn btn-primary  " ><a href="./detail.user.php?id=<?= $data['id']?>" class="text-decoration-none text-light">Detail</a></button>                    
                       
            </center>
        </div>
        <hr style="position:relative; top:0px;">  

          
        <div id="blog">
            <div class="conteiner-fluid">
                <div class="d-flex flex-wrap d-flex justify-content-center align-items-center flex-row py-5 " style="width:100%;"> 
                                   
                        <?php
                        include './connect/config.php';
                        $query=
                        "SELECT post.*,categoriers.name as category_name ,users.name as nama_user ,users.image as profile from post
                        inner join categoriers on post.category_id=categoriers.id
                        inner join users on post.user_id=$_SESSION[id]
                        ";
                        $result=mysqli_query($koneksi,$query);
                        $no= 1;
                        while($data=mysqli_fetch_assoc($result)){
                                                    
                        ?> 
                                        
                                    
                                
                        
                        <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" class="py-5">
                            <a data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1500" class="text-decoration-none" href="detail.php?id=<?= $data['id']?>">
                                    <div class="card mx-5 py-0 text-dark" style="background: #eee;">
                                        <!-- <div class="card-header text-center">
                                            <a href="detail.php?id=<?= $data['id']?>" class="h3 link-light text-decoration-none text-light"></a>
                                        </div> -->
                                        <div class="card-body">
                                            <div class="" style="width: 400px; height: 200px; overflow: hidden;">
                                                <img style="width :400px" class="" src="<?= $data['image']?>" alt="">
                                            </div>
                                            <h3><?= $data['title']?></h3>
                                            <hr>
                                            <h6 class="fst-italic"><?= $data['category_name']?></h6>
                                            <p class="card-text pt-2"><?= 
                                                // membatasi kata dalam artikel
                                                str_word_count($data['deskripsi']) > 5 ? substr($data['deskripsi'], 0, 50) . '...' : $data['deskripsi']
                                            ?></p>

                                            <p style="color: #00adb5;"><img class="rounded-circle" style="width : 20px; height: 20px" src="<?= $data['profile']?>" alt="">&nbsp<span class=""><?= $data['nama_user']?></span> | <?= $data['date']?></p>
                                             
                                            </div>
                                            <?php
                                            if($_SESSION['name'] == $data['nama_user']){
                                            echo "
                                               
                                            <a href='./post/edit.php?id=". $data['id'] ."'". "class='text-decoration-none text-dark me-3'>edit</a>
                                            </form>";
                                            }else{
                                            echo"gagal";
                                            }
                                            ?> 
                                            <?php
                                            if($_SESSION['name'] == $data['nama_user']){
                                                echo "
                                                <form class='d-inline' method='post' action='./post/delete.php'>
                                                <input type='hidden' name='id' value='".$data['id']."'".">
                                                <button type='submit' class='btn btn-dark'>delete</button>
                                                </form>
                                                ";
                                                }else{
                                                echo "gagal";
                                                }
                                            ?>
                                        </div>
                                     
                                </a>
                             
                        </div>

                    <?php
                        };
                    ?>
                    </div>
                </div>                                  
            </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
                      
</body>
</html>
<?php
}else{
    echo 'anda belum login';
}
?>