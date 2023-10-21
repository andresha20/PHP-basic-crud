<?php
    /*
        $ => Before any word for a variable
    */
    include 'connection.php';

    $email = $_POST['email'];
    $password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users VALUES (null, '$email', '$password')";
    $connect -> query($sql);
    header('Location: ../index.html');
?>