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
             <?php include 'layouts/sidebar.php';?>  
             
             <div class="col-10" style="padding:100px 0 0 0;">
                <div class="mx-5">
                    <table class="table table-hover table-bordered border-primary" id="data-table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Comment</th>
                                <th scope="col">Article</th>
                                <th scope="col">Comemented</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <th scope="row">1</th>  
                                <td>what's that</td>
                                <td>No Uno</td>
                                <td>yoga</td>
                                <td>20 02 20</td>
                              
             
                               
                                <td>
                                    <button class="btn btn-warning">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <th scope="row">1</th>  
                                <td>mark</td>
                                <td>No Uno</td>
                                <td>Male</td>
                                <td>20 02 20</td>
                               
                              
                                <td>
                                    <button class="btn btn-warning">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <th scope="row">1</th>  
                                <td>mark</td>
                                <td>No Uno</td>
                                <td>Male</td>
                                <td>20 02 20</td>
                              
                               
                                <td>
                                    <button class="btn btn-warning">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <th scope="row">1</th>  
                                <td>mark</td>
                                <td>No Uno</td>
                                <td>Male</td>
                                <td>20 02 20</td>
                               
                               
                                <td>
                                    <button class="btn btn-warning">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        
                        
                        
                        </tbody>
                    </table>    
                </div>
             </div>
        </div> 
    </div>
    
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>