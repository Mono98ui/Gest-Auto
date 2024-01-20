<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PRICES :</h1>
    <h2>pizza : 18.67$</h2>
    <form action="index.php" method="post">
        <label> How many pizza do you want ?</label><br>
        <input type="text" name="prices"><br>
        <input type="submit" values="total">
    </form>
</body>
</html>
<?php
    $price = 18.67;
    $total = $_POST["prices"] * $price;
    echo "Ur total is : \${$total};";
?>