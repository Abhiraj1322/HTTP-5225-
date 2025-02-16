<?php

function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
}


$users = getUsers();

if (count($users) > 0) {
    for ($i = 0; $i < count($users); $i++) {
      echo "Name: " .$users[$i]['name'] . '<br>';
        echo "Username: " .$users[$i] ['username'].'<br>' ;
        
        echo    "Email: ". $users[$i]['email'].'<br>'.'<br>';
        

    }
}
?>
