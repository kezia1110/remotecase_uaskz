<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World in PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: linear-gradient(135deg, #74ebd5, #9face6);
            color: #333;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: #ffffffaa;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            color: #6c63ff;
        }
        p {
            font-size: 18px;
            margin-top: 10px;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        echo "<h1>Hello, World!!!</h1>";
        echo "<p>Welcome to the world of PHP programming. This is a simple example to demonstrate how PHP can generate dynamic content.</p>";
        ?>
        <div class="footer">
            <?php
            echo "Today's date is: " . date("l, F j, Y") . ".<br>";
            echo "Current time: " . date("h:i A");
            ?>
        </div>
    </div>
</body>
</html>
