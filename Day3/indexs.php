
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      text-align: center;
      background-color: grey;
    }
    form {
      text-align: center;
      background-color: whitesmoke;
      display: flexbox;
      padding: 20%;
      margin: 20%;
      border: 3px;
      border-radius: 20%;
      border-color: blue;
      color: orange;
    }
    input[type="number"] {
      font-size: larger;
      font-style: italic;
      color: black;
    }
    button[type="submit"]{
      color: greenyellow;
      padding: 10px 20px;
      background-color: green;
      border: 1px solid black;
      border-radius: 2px;
      cursor: pointer;
    }
    .result[type="number"]{
      color: purple;
      border: 1px solid black;
      font-style: oblique;
    }
  </style>
</head>
<body>
  <form action="index.php" method="post">
    <input type="number" name="num1" placeholder="Enter first number">
    <input type="number" name="num2" placeholder="Enter second number">
    <input type="submit" value="Calculate">
    <select name="operator">
     <br>
      <input type="radio" name="operator" id="addition" value="+">
      <label for="addition">addition</label><br>
      <input type="radio" name="operator" id="subtraction" value="-">
      <label for="subtraction">subtraction</label><br>
      <input type="radio" name="operator" id="division" value="/">
      <label for="division">division</label><br>
      <input type="radio" name="operator" id="multiplication" value="*">
      <label for="multiplication">multiplication</label><br>
      <input type="radio" name="operator" id="exponential" value="**">
      <label for="exponential">exponential</label><br>
      <input type="radio" name="operator" id="squareroot" value="sqrt()">
      <label for="squareroot">squareroot</label><br>
      <input type="radio" name="operator" id="Modulus" value="%">
      <label for="modulus">modulus</label><br>
    </select>
  </form>

</body>
</html>

