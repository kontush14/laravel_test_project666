<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM</title>
    <!-- Scripts -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css');?>" type="text/css">
</head>
<body>
    <div class="container">
        <div class="title_class">
            <h1>Hello, user</h1>
        </div>
        <div class="menu_atm">
            <form action="/">
                <label for="fname">Enter a card number:</label><br>
                <input type="text" id="card_number" name="card_number"><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
