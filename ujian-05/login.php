<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- link icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- link css -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
<div class="" style="background-image: url(https://i.pinimg.com/originals/60/04/30/600430c1d22c731b94cf4e7dae6b398a.gif);height:700px;">
    <div class="container d-flex justify-content-center w-50">
      <div class="row my-5 w-100 " style="height: 500px; background-color:black;">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto"  >
          
          <div class="card card-signin my-5  " style="width: 150%; margin-left:-60px;">
          
            <div class="card-body " style="height: 410px; ">
            
              <h5 class="card-title text-center">Sign In</h5>
              
              <form  action="./auth/login_process.php" method="POST" class="form-signin">
            
                <div class="form-label-group">
                <label for="inputEmail" class="" style="position: relative; top:30px;">Email address</label>
                <span class="input-group-text "style="width:14%;position:relative; top:55px; z-index:100">
                  <i class="bi bi-envelope-fill fs-5"></i>
                </span>  
                 
                  <input  name="email" type="email" id="inputEmail" class="form-control my-3 px-5" placeholder="Email address" required autofocus >
                  
                </div>
                
                <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <span class="input-group-text "style="width:14%;position:relative; top:22px; z-index:100">
                   <i class="bi bi-file-lock-fill fs-5"></i>
                </span> 
                 
                  <input  name="password" type="password" id="inputPassword" class="form-control my-3 px-5" placeholder="Password" required style="position:relative; bottom:35px; z-index:1">
                </div>
                

                
                <button class="btn btn-lg btn-primary btn-block text-uppercase w-100" type="submit">Sign in</button>
                <p class="my-2">Not a member?<a href="./auth/register.php" style="text-decoration: none;">SING UP</a></p>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- bootstap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>