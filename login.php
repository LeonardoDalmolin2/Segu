<?php
include_once("connection.php");

$login = isset($_POST["loginname"])? $_POST["loginname"] : FALSE;
$password = isset($_POST["passwordname"])? $_POST["passwordname"] : FALSE;


$sql = "SELECT * FROM user WHERE login = '$login' and password = '$password'";
$rss = mysqli_query($conn, $sql);


if ($login && $password){
    if (mysqli_num_rows($rss) > 0){
        $rs = mysqli_fetch_array($rss);
        session_start();
        echo "funcionocaraio";
        // $_SESSION['login'] = $rs["login"];
        // header("Location: Membros.php");
    }
    else{
        echo "Login Failed";

    }
}
else{
    echo "Login Failed";
}


?>