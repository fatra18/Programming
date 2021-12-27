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
</head>
<body> 
    <div class="container-fluid p-0">
        <div class="row">
            <!-- sidebar -->
             <?php 
                include 'layouts/sidebar.php';
                include './config/koneksi.php';
             ?>  
             
             <div class="col-10" style="padding: 0; padding-top:100px;">
                <div class="mx-5">
                    <a href="./category/create.php" class="btn btn-md btn-primary mb-4">Buat Category</a>
                    <table class="table table-hover table-bordered border-primary">
                        <thead>
                            <tr>
                                <th class="col-1">No</th>
                                <th class="col-9">Name</th>
                                <th class="col-2">Action</th> 
                            </tr>
                        </thead>
                            
                        <tbody>
                        <?php
                                $query ="SELECT * FROM categoriers";
                                $result   = mysqli_query($koneksi, $query);

                                $no = 1;
                                while ( $data=mysqli_fetch_assoc($result)){
                        ?>

                            <tr class="align-middle">

                                <th scope="row"><?=$no++; ?></th>  
                                <td><?= $data['name']; ?></td>
                                <td>
                                
                                 <form method="POST" action="./category/delete.php">
                                     <a href="./category/edit.php?id=<?=$data['id']?> " class="btn btn-warning">Edit</a>
                                     <button type="submit" class="btn btn-danger">delete</button> 
						             <input type="hidden" name="id" value="<?= $data['id']?>" />
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
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <?php
       }else{
            echo 'anda belum login';
        }
    ?>
</body>
</html>