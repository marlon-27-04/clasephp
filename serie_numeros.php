<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<h3>';
    for($n=0; $n<99; $n++){
    
    if ($n<=9 ){
        echo '0'.$n.",\n" ; 
    } else{
        echo $n.",\n" ;
    }
     
     }
     echo $n;
    echo'</h3>' ;
    ?>
</body>
</html>
