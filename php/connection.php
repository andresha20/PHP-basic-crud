<?php
    $server = 'localhost';
    $BD ='web2';
    $user = 'root';
    $password = '';
    $connectionURI = "mysql: server=".$server.";dbname=".$BD;
    $connect = new PDO($connectionURI, $user, $password);
    try {
        if ($connect) {
            echo "Connected to the $BD database successfully!";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>
