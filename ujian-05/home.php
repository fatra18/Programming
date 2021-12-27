<?php
    session_start();
    
    if(isset($_SESSION['email'])){
        
?>
<?php
    include './connect/config.php';
    include 'navbar.php';
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   
    <link rel="stylesheet" href="home.css">
    <title>Document</title>
</head>
<body >
    <div id="blog">
        <div class="conteiner-fluid">
            <div class="d-flex flex-wrap d-flex justify-content-evenly align-items-center flex-row py-5 " style="width:100%;"> 

                <?php
                        
                

                        if (isset($_GET['cateId'])){
                            $query =
                            "SELECT post.*, categoriers.name as category_name ,users.name as nama_user ,users.image as profile FROM post
                            inner join categoriers on post.category_id=categoriers.id
                            inner join users on post.user_id=users.id
                            where category_id=".$_GET['cateId']."
                            ORDER BY ID desc
                            ";
                            }
                            else{ 
                                $query=
                            "Select post.*,categoriers.name as category_name ,users.name as nama_user ,users.image as profile from post
                            inner join categoriers on post.category_id=categoriers.id
                            inner join users on post.user_id=users.id
                            

                            ";}
                            $result=mysqli_query($koneksi,$query);
                            $no= 1;

                            while($data=mysqli_fetch_assoc($result)){
                                
                            
                        ?> 
                        
                          <li>  <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" class="py-5">
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
    <div class='spinner-wrapper'>
        <div class="spinner"></div>
    </div>

    <div class="main-content"></div>

<script>
    let spinnerWrapper = document.querySelector('.spinner-wrapper');

    window.addEventListener('load', function () {
        // spinnerWrapper.style.display = 'none';
        spinnerWrapper.parentElement.removeChild(spinnerWrapper);
    });
 </script>   
          

 



   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


<?php
       }else{
            echo 'anda belum login';
        }
    ?>
</body>
</html>

