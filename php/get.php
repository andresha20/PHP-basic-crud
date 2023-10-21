<?php
    include 'connection.php';
    $sql = $connect -> query("SELECT * FROM users");

    while($data = $sql -> fetch()) {
        echo $data['email']. " ".$data['password']."<br>";
    }
?>