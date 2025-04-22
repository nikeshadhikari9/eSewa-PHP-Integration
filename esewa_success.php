<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payment Successful</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <style>
        body {
            background: #e8f5e9;
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
            box-shadow: 0 8px 20px rgba(0, 128, 0, 0.1);
            text-align: center;
        }

        .success-icon {
            font-size: 70px;
            color: #4caf50;
        }

        h1 {
            margin: 20px 0 10px;
            color: #2e7d32;
        }

        p {
            font-size: 16px;
            color: #4caf50;
        }

        a {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background: #4caf50;
            color: white;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.3s;
        }

        a:hover {
            background: #388e3c;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="success-icon">✅</div>
        <h1>Payment Successful</h1>
        <p>Thank you! Your transaction was completed successfully.</p>
        <!--change the url to your home page or index page-->
        <a href="index.php">Go Back to Home</a>
    </div>
</body>

</html>