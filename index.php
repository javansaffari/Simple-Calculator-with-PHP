<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator with PHP </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>CALCULATOR WITH PHP</h1>
<form method="post" class="form">
    <input class="red" type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br>
    <br>
    <button type="submit" name="btn">Calculate</button>
</form>
<p>Your answer is : </p>
<div class="answer">
    <?php


    if (isset($_POST['btn'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case  "None":
                echo "What do you wnat ?!";
                break;
            case "Add":
                echo $num1 + $num2;
                break;
            case "Subtract":
                echo $num1 - $num2;
                break;
            case "Multiply":
                echo $num1 * $num2;
                break;
            case "Divide":
                echo $num1 / $num2;
                break;
        };
    };

    ?>
    
</div>
</body>
</html>
