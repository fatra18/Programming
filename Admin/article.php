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
    
    <!-- Vanilla data-table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.css">
</head>
<body> 
    <div class="container-fluid p-0">
        <div class="row">
            <!-- sidebar -->
             <?php 
                 include 'layouts/sidebar.php';
                 include './config/koneksi.php';
             ?>  
                             
             <div class="col-10" style="padding:100px 0 0 0;">
                <div class="mx-5">
                <a href ="./article/create.php" class="btn btn-primary">Add Article</a>
                    <table class="table table-hover table-bordered border-primary mt-3" id="data-table">
                        <thead>
                            <tr>
                                <th scope="col-1">No</th>
                                <th scope="col-1">Name</th>
                                <th scope="col-1">Title</th>
                              
                                <th scope="col-1">Date</th>
                                <th scope="col-2">Category</th>
                                <th scope="col-1">Image</th>
                               
                                <th scope="col-3">Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php
                                $query ="SELECT articles.*, categoriers.name as category_name FROM articles INNER JOIN categoriers on articles.category_id=categoriers.id";
                                $result = mysqli_query($koneksi,$query);
                                
                                $no =1;
                                    while ($data = mysqli_fetch_assoc($result))
                                    {
                            ?>
                             <tr class="align-middle">
                                <th scope="row"> <?= $no++ ?></th>  
                                <td><?= $data['user_id'] ?></td>
                                <td><?= $data['title']   ?></td>
                               
                                <td><?= date_format( date_create($data['date']), " D -j - F - Y")?></td>
                                <td><?= $data['category_name'] ?></td>
                                <td>
                                    <img src="<?= $data ['image'] ?>"style="height:80px;width 125px; border-radius:2px;"> 
                                </td>
                               
                                <td>
                                <a href="article/edit.php?id=<?= $data['id'] ?>" class="btn btn-warning">Edit</a>
                                <a  href="./article/detail-article.php?id=<?= $data['id']?>">Detail</a>
                                
                                <form action="article/delete.php" method="post" class="d-inline-block">
                                    <input type="hidden" name="id" value="<?= $data['id']?>"/>
                                    <button  type="submit" class="btn btn-danger">Delete</button>
                                </form>    
                                </td>
                            </tr>
                            <?php        
                                 };
                            ?>

                        </tbody>
                    </table>    
                </div>
             </div>
        </div> 
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.js"></script>
    <script>
          var dataTable= new DataTable('#data-table',{
            perPage      : 5,
            perPageSelect: [1, 2 ,3 ,4 ,5],
            nextPrev     :true,
            firstLast    :true,
            searchable   :false
        });

        dataTable.on('datatable.page', function(page){
            // console.log(page)
            if (page == 2) {
                
            }
        })
      </script>
    <?php
       }else{
            echo 'anda belum login';
        }
    ?>

    
</body>
</html>