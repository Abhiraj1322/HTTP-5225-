<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
    <?php echo '<h1>PHP and Creating Output </h1>'; ?>
  
    <p>The PHP echo command can be used to create output.</p>

    <p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>
    
    <ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>

    <?php
      // $name ="Acp";
      // $lastName="pardyuman";
      // echo "hello, " . $name . $lastName;

      $person['first']='Abhiraj';
      $person['last']='Daya';
      $person['email']='abhirajd4@gmail.com';
      $person['web']='https://www.google.com';


      echo "<a href='mailto:" . $person["email"] . "'>Mail me</a> <br>";
      echo "<a href='" . $person["web"] . "' target=_blank>Visit</a>";
    ?>


    <h2>More HTML to Convert</h2>

    <p>PHP says "Hello World!"</p>

    <p>Can you display a sentence with ' and "?</p>
    <?php
   echo '<img src="https://dilkhushyadav.com/assets/images/me-dark.jpg" width="200">' ;
    ?>




  </body>
</html>