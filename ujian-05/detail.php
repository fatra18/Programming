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
    <title>Document</title>
    <h1 style="text-align:center;">Detail</h1>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <div>
        <div>
            <?php
            
                include './connect/config.php';
                $id = $_GET['id'];
                $query ="SELECT * FROM post WHERE id='$id'";
                $result = mysqli_query($koneksi,$query);

                $data = mysqli_fetch_assoc($result);

                $comment_query = "SELECT comments.*, users.name as name_user,users.image as image_comment from comments
                                  inner join users on comments.user_id=users.id
                                  where post_id =$id";
                $result_comment = mysqli_query($koneksi,$comment_query);                  

                $result = mysqli_query($koneksi,$query);
                $no =1;
               
                while ($data = mysqli_fetch_assoc($result)){
                   
                  
            ?>        
            <div class="container card my-5" style="">
                    <h1 class="text-center h1 card-header w-100" ><?= $data['title']?></h1>
                    <img src="<?= $data['image']?>" alt="" class="rounded float-start w-100 h-50 " >
                    <p class="text-center my-5"><?= $data['deskripsi']?></p>
            
                <div class="row">
                    <div class="col-md-8 m-auto mb-5">
                            <div class="card">
                                <div class="card-header">Comments</div>
                                <div class="card-body">
                                    <form action="comment-process.php" method="post">
                                        <div class="mb-3">
                                            
                                            <input  name="user_id" type="hidden" class="form-control" value="<?= $_SESSION['id']?>"
                                            id="exampleFormControlInput1"> 
                                        </div>
                                        <div class="mb-3">
                            
                                            <label  class="form-label"for="comment">comment :</label>
                                            <textarea class="form-control" name="comment" id="comment"></textarea>
                                        </div>
                                        <input type="hidden" name="post_id" value="<?= $data['id']?>">
                                        <button class="btn btn-success">Submit</button>  
                                    </form>
                                </div>
                                <div class="">
                                        <?php
                                            while ($data_comment =mysqli_fetch_assoc($result_comment)){
                                        
                                        ?>
                                        <div class="card">
                                                <div class="card-body">
                                                    <p class="card-title h5 fw-bold"><?= $data_comment['name_user']?> </p>
                                                   
                                                    <img src="<?= $data_comment['image_comment']?>" alt="" style="width: 100px;">
                                                    <p class="card-subtitle"><?= $data_comment['date']?></p>
                                                    <p><?= $data_comment['comment']?></p>
                                                    <button class="btn btn-primary "><a href="./edit.comment.php?id=<?= $data_comment['id']?>" class="text-light text-decoration-none">Edit</a></button>
                                                    <form action="./hapus_comment.php" method="post">
                                                    <input type="hidden" name="id" value="<?= $data_comment['id']?>">
                                                    <input type="hidden" name="post_id" value="<?= $data_comment['post_id']?>">
                                                    <button type="submit" class="btn btn-primary">delete</button>
                                                    </form>
                                                </div>
                                        </div>
                                        <?php
                                            };
                                        ?>    
                                </div>
                            </div>
                    </div>     
                </div>
            </div>
                                                       
                                            

                    
        </div>
        <?php
                };
        ?>
    </div>
</head>
<body>
    
</body>
</html>
<?php
       }else{
            echo 'anda belum login';
        }
    ?>