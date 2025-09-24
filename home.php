<?php
// Simple session start
session_start();

// Fake message display after form submit (for demo)
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) {
        $message = "Login form submitted with Username: " . htmlspecialchars($_POST['username']);
    } elseif (isset($_POST['register'])) {
        $message = "Registration form submitted with Username: " . htmlspecialchars($_POST['username']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Login & Registration</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('background.jpg') no-repeat center center/cover;
        }
        .container {
            width: 400px;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        input[type="text"], input[type="password"], input[type="email"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #aaa;
            border-radius: 8px;
            font-size: 14px;
        }
        button {
            width: 95%;
            padding: 12px;
            margin-top: 10px;
            border: none;
            background: #007bff;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .message {
            margin-top: 15px;
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome to Home Page</h2>

        <!-- Login Form -->
        <form method="POST">
            <h3>Login</h3>
            <input type="text" name="username" placeholder="Enter Username" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <button type="submit" name="login">Login</button>
        </form>

        <hr>

        <!-- Registration Form -->
        <form method="POST">
            <h3>Register</h3>
            <input type="text" name="username" placeholder="Choose Username" required>
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="password" name="password" placeholder="Choose Password" required>
            <button type="submit" name="register">Register</button>
        </form>

        <?php if (!empty($message)) { ?>
            <p class="message"><?php echo $message; ?></p>
        <?php } ?>
    </div>
</body>
</html>
