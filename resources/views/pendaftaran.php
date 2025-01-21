<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlixOcean Sign In</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('kpop.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
        }

        .form-container {
            background-color: rgba(0, 0, 0, 0.85);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            max-width: 320px;
            width: 100%;
            text-align: center;
        }

        .form-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 95%;
            padding: 8px 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            background-color: #333;
            color: white;
            outline: none;
        }

        .form-container input[type="email"]:focus,
        .form-container input[type="password"]:focus {
            border-color: red;
        }

        .form-container button {
            width: 102%;
            padding: 6px 10px;
            background-color: red;
            border: none;
            border-radius: 4px;
            font-size: 12px;
            color: white;
            cursor: pointer;
            margin-top: 10px;
        }

        .form-container button:hover {
            background-color: darkred;
        }

        .form-container .extra-options {
            margin-top: 15px;
        }

        .form-container .extra-options p {
            margin: 6px 0;
        }

        .form-container .extra-options a {
            color: white;
            text-decoration: none;
        }

        .form-container .extra-options a:hover {
            text-decoration: underline;
        }

        .form-container .remember-me {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin: 8px 0;
        }

        .form-container .remember-me input {
            margin-right: 8px;
        }

        .logo {
            position: absolute;
            top: 15px;
            left: 15px;
        }

        .logo img {
            width: 120px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="logo">
                <img src="flix-logo.gif" alt="FlixOcean Logo">
            </div>
            <h1>Sign In</h1>
            <form action="#">
                <input type="email" placeholder="Email or mobile number" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Sign In</button>
                <div class="extra-options">
                    <p>OR</p>
                    <p><a href="#">Forgot password?</a></p>
                    <div class="remember-me">
                    </div>
                    <p>New to FlixOcean? <a href="profil.php">Sign up now.</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
