<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlixOcean Landing Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('kpop.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            height: 100vh;
            position: relative;
            overflow: hidden;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .container {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            z-index: 2;
        }

        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .content {
            max-width: 600px;
            margin: 0 auto;
        }

        .content h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        input[type="email"] {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 3px;
            margin-right: 10px;
            width: 300px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: red;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: darkred;
        }

        .language {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            align-items: center;
        }

        select {
            background: transparent;
            color: white;
            border: 1px solid white;
            margin-right: 10px;
            padding: 5px;
        }

        .sign-in {
            background-color: red;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .sign-in:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = htmlspecialchars($_POST['email']);
        echo "<div class='container' style='z-index:3;'>Thank you for submitting your email: $email</div>";
    }
    ?>
    <div class="overlay"></div>
    <div class="container">
        <div class="logo">
            <img src="flix-logo.gif" alt="FlixOcean Logo" width="150">
        </div>
        <div class="content">
            <h1>Unlimited movies, TV shows, and more</h1>
            <p>Ready to watch? Enter your email to create.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="email" name="email" placeholder="Email address" required>
                <button type="submit">Get Started</button>
            </form>
        </div>
        <div class="language">
            <select>
                <option value="en">English</option>
                <!-- Other language options -->
            </select>
            <a href="pendaftaran.php">
                <button class="sign-in">Sign In</button>
            </a>
        </div>
    </div>
</body>
</html>
