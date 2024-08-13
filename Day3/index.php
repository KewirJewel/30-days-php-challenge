<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];

    if (empty($num1) || empty($num2)) {
      $error = "Please enter both numbers.";
    } else if (!is_numeric($num1) || !is_numeric($num2)) {
      $error = "Invalid input. Please enter numbers only.";
    } else {
      $result = "";
      switch ($operator) {
        case "+":
          $result = $num1 + $num2;
          break;
        case "-":
          $result = $num1 - $num2;
          break;
        case "*":
          $result = $num1 * $num2;
          break;
        case "/":
          if ($num2 == 0) {
            $error = "Cannot divide by zero.";
          } else {
            $result = $num1 / $num2;
          }
          break;
        case "**":
          $result = $num1 ** $num2;
            break;
         case "sqrt":
            $result = sqrt($num1);
            break;
        case "%":
             $result = $num1 % $num2;
            break;
      }
    }
  }

  if (isset($result)) :?>
    <p style="color: blue;">
    <?php    echo "The result is:  $result "; 
   endif;
   if (isset($error)) : ?>
    <p style="color: red;">
     <?php  echo $error; 
   endif; 
    ?>