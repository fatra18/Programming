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
    <title>Document</title>
</head>
<body>
            <?php       
               
               include './connect/config.php';

               $id =$_GET['id'];
               $query="SELECT * from comments WHERE id =$id";
               $result =mysqli_query($koneksi,$query);
               $data_comment= mysqli_fetch_assoc($result);
            ?>  
        
    <div class="card">
        <h1 class="card-header text-center">Edit Comment</h1>
    </div>
    <div class="card-body">
        <div class="mb-2">
            <form action="proses_comment.php" method="POST">
                <div>
                    <label for="nameInput" class="form-label">Comment</label>
                    <input type="hidden" name="post_id" id="" value="<?= $data_comment['post_id']?>">
                    <input type="hidden" name="id" id="" value="<?= $data_comment['id']?>">
                    <input  name="comment" type="text" class="form-control" value="<?= $data_comment['comment']?>"
                    id="nameInput">
                            
                </div>
                <button class="btn btn-primary px-5 mt-5">Submit</button>
            </form>      
      
                 
    </div>
        
    </div>
    
</body>
</html>
<?php
       }else{
            echo 'anda belum login';
        }
    ?>