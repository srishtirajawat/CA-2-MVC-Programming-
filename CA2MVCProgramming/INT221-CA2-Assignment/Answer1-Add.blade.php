<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of tow numbers</title>
</head>
<body>
    <form method="POST">
    @csrf
    <center>
    Enter First Number: <input type="number" name="numberOne" id="number1"> <br>
    Enter Second Number: <input type="number" name="numberTwo" id="number2"> <br>

    <button type="submit">Add</button>
    </center>
    </form>
</body>
</html>
