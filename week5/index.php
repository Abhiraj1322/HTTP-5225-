<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    .vibgyor{
        display:flex;
    

        justify-content:center;
        align items:center;
        
    }
</style>
    <?php
 $connect= mysqli_connect('localhost','root','','csv_db 11');
    if(!$connect){
        die("conection failed".mysqli_connect_eror());
    }
    else{
        echo "connected";
    }
    $query="SELECT * FROM colors";
   $colors=mysqli_query($connect,$query);
   echo '<pre>' . print_r($colors). '</pre>';
  foreach($colors as $color){
echo '<div class="vibgyor" style=" background-color : '. $color['Hex'] . ';">' . $color['Name'] .'</div>';
    
  }
    ?>
<div style="backgorund color:"></div>
</body>
</html>