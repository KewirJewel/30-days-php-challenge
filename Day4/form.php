<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
        <li>
  <form action="index.php" method="post">
      <h1>login Form</h1>
      <label for="userName">User Name:</label>,<br>
      <input type="text" id="userName" name="userName"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <small style="color: red">
       </li>
       <?php
       if(isset($_POST['passwordUpper'])){
        echo $_POST['passwordUpper'];
       }
       if(isset($_SESSION['passwordLower'])){
        echo $_SESSION['passwordLower'];
       }
       if(isset($_POST['passwordNumber'])){
        echo $_POST['passwordNumber'];
       }
       if(isset($_POST['length'])){
        echo $_POST['length'];
       }
       if(isset($_POST['username and password'])){
        echo $_POST['username and password'];
       }
       ?>
       <input type="submit" value="Submit">
</body>
</html>