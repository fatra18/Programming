        <?php
            // Pengulangan pada array
            // for /foreach

            $angka = [3,2,15,20,11,77,88,77,22,22];
        ?>
</body>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Array2</title>
<style>
    .kotak
        {
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
        }        
    
        .clear{ clear:both;}
</style>
</head>
<body>
 <?php for( $i = 0; $i < count($angka); $i++)  {?>
    <div class="kotak"><?= $angka[$i]; ?> </div>
 <?php }?>
 
    <div class="clear"></div>
    
 <?php foreach( $angka as $a) {?>
 
 <div class="kotak"> <?= $a;?> </div>
 
 <?php } ?>
 
 <div class="clear"></div>
 
 <?php foreach ( $angka as $a) :?>
    
    <div class="kotak"><?=  $a;?> </div>
 
 <?php endforeach; ?>

</html>