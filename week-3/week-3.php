
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1> code challenge</h1>
  <?php
  $hour= ceil(rand(1,24));
  
 if($hour>=5 &&$hour<=9){
   echo '<h2>breakfast</h2>';
 }
 else if($hour>=12 && $hour>=14){
    echo'<h2> Lunch: "Fish, Chicken, and Vegetables</h2>';

 }
else if($hour>=19 && $hour>=21){
    echo'<h2>Dinner: "Steak, Carrots, and Broccoli" </h2>';
}
else{
    echo'<h2> If the time does not fall within any of the above intervals, the animals are not
being fed <h2/>';
}


$number= ceil(rand(1,24));

if($number%3){
    echo '<h2>Fizz</h2>';
  }
  else if($number%5){
     echo'<h2>Buzz</h2>';
 
  }
 else if($hour%3 && $hour%5){
     echo'<h2>Fizz buzz" </h2>';
 }
 else {
     echo'<h2>the numnber .<h2/>';
 }


'<h1>Hello' . $hour . '</h1>';

 

  ?>
</body>

</html>