<div class="col-2 vh-100 p-0 border-3 border-end border-primary bg-info">
     <div class="d-flex justify-content-center py-4">
        <a href="http://localhost/Admin/" class="text-decoration-none fs-3 fw-bold">Admin</a> 
     </div> 
     <div class="pt-3 ">
        <div>
            <strong style="margin-left: 20px;">
                <?php
                    if ( isset($_SESSION['email'])){
                        echo $_SESSION['email'];
                    }else{echo'';}
                    
                ?>
                
            </strong>
            <img src=" <?php
                    if ( isset($_SESSION['image'])){
                        echo $_SESSION['image'];
                    }else{echo'';}
                
                ?>" alt="" style="width:100px; margin-left:40px;">
            <p style="margin-left: 20px;">
                    <?php
                    if ( isset($_SESSION['name'])){
                        echo $_SESSION['name'];
                    }else{echo'';}
                    
                ?>
            </p>
        </div>   
        <div class="py-2 px-5">
            <a href="http://localhost/Admin" class="text-decoration-none text-center text-light fs-6">Dashboard</a>
        </div>
        <div class="py-2 px-5"> 
            <a href="http://localhost/Admin/user.php" class="text-decoration-none text-center  text-light fs-6">User</a>
        </div>
        <div class="py-2 px-5">
            <a href="http://localhost/Admin/category.php" class="text-decoration-none text-center  text-light fs-6">Category</a>
        </div>
        <div class="py-2 px-5">
            <a href="http://localhost/Admin/article.php" class="text-decoration-none text-center  text-light fs-6">Article</a>
        </div>
        <div class="py-2 px-5">
            <a href="http://localhost/Admin/comment.php" class="text-decoration-none text-center text-light fs-6">Comment</a> 
        </div>

        <div class="py-2 px-4">
            <a href="http://localhost/Admin/auth/logout_process.php" class="btn btn-danger w-100">Logout</a>
        </div>
     </div>  
</div> 
