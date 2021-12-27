
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
             
                include '../connect/config.php';
             ?>  
             
             <div class="col-10" style="padding: 0; padding-top:100px; margin-left:120px;">
                <div class="mx-5">
                
                    <div class="row">
                      <div class="row-md-8 m-auto card p-5">
                        <form action="../user/create_proses.php"method="POST">            
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
    
</body>
</html>