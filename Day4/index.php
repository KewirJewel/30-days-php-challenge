<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['userName'];
    $password = $_POST['password'];
    if (empty($userName) || empty($password)) {
        header("Location: index.php?error=All fields are required");
        exit;
    }

    if(strlen($username)<5 || strlen($username)>15){
    header("Location: index.php?error=Input character morethan 5 and lessthan 15");
    exit;
    }
    if(strlen($password)<8){
        header("Location: index.php?error=Input character greaathan 8");
        exit;
    }
    $username = htmlspecialchars($username);
    $password = filter_var($password, );
    header ("location: form.php");

} else {
    header("Location: form.php");
    exit;
}
var_dump($_SESSION);
?>