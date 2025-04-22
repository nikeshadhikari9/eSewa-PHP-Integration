<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payment Failed</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <style>
        body {
            background: #ffebee;
            font-family: 'Nunito', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(255, 0, 0, 0.1);
            text-align: center;
        }

        .error-icon {
            font-size: 70px;
            color: #f44336;
        }

        h1 {
            margin: 20px 0 10px;
            color: #c62828;
        }

        p {
            font-size: 16px;
            color: #e53935;
        }

        a {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background: #f44336;
            color: white;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.3s;
        }

        a:hover {
            background: #b71c1c;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="error-icon">❌</div>
        <h1>Payment Failed</h1>
        <p>Oops! Your transaction could not be completed.</p>
        <!--change the url to your checkout page or payment page-->
        <a href="index.php">Try Again</a>
    </div>
</body>

</html>