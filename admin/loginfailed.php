<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Failed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .failed-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            max-width: 90%;
            text-align: center;
        }
        .failed-container h2 {
            color: #ff6347;
            margin-bottom: 20px;
        }
        .failed-container p {
            margin-bottom: 20px;
        }
        .failed-container a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="failed-container">
        <h2>Login Failed</h2>
        <p>Your username or password is incorrect. Please try again.</p>
        <a href="./admin-login.php">Back to Login</a>
    </div>
</body>
</html>
