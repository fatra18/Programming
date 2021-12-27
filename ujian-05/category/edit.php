
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
               
                include '../connect/config.php';
               
                $id = $_GET['id'];
	            $query= "SELECT * FROM  categoriers WHERE id='$id'";
	            $result =mysqli_query($koneksi,$query);
	            $data =mysqli_fetch_assoc($result);
             ?>  
             
             <div class="col-10" style="padding: 0; padding-top:100px;">
                <div class="mx-5">
                   
                    <div class="row">
                      <div class="row-md-8 m-auto card p-5">
                      <form action="edit_process.php"method="POST"> 
                       <input type="hidden" name="id" value="<?= $data['id']?>">       
                    
                       <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input  name="name" type="text" value="<?= $data['name']?> "class="form-control" 
                            id="exampleFormControlInput1"></input> 
                       </div>
                      
                       <div class="mb-">
                              <label for="" class="form-label my-2">user_id</label>
                              <select name="user_id" class="form-select" aria-label="Default select example">
                                                   
                                <?php
                                $resquery = "SELECT * FROM users";
                                $res = mysqli_query($koneksi, $resquery);
                                

                                while ($data3 =mysqli_fetch_assoc($res)){
                                ?> 
                                  
                                  <option value="<?= $data3['id']?>"><?= $data3['name']?></option>
                                <?php
                                  };
                                ?>

                             </select>
                          </div> 
                       <button class="btn btn-md btn-primary px-5 mt-5">submit
                       </button>
                      </form>
                      </div>
                    </div>
                  
                   </div>
                </div>
             </div>
        </div> 
    </div>
    
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
          
</body>
</html>