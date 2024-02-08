<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jacks page for the beaches</title>
    <style>
        body {
            background-color: #964B00;
            color: #FFA500;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #964B00;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #964B00;
            text-align: center;
            padding: 10px 0;
        }
        nav a {
            color: #ff0000;
            text-decoration: none;
            padding: 0 20px;
            font-size: 18px;
        }
        nav a:hover {
            color: #fff;
        }
        .content {
            padding: 20px;
        }
        footer {
            background-color: #ff0000;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to JacksIsland</h1>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <a href="#">get lost</a>
    </nav>
    <div class="content">
        <p>This is not the true representation of my programming skills. It's better than the previous, and I am still learning.</p>
        <p>Cheers!</p>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Orange and Black Theme</p>
    </footer>
</body>
</html>
