<!DOCTYPE html>
<html>
<head>
    <title>Login Menu</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f7f7f7; }
        .login-box {
            width: 350px;
            margin: 80px auto;
            padding: 30px 25px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .login-box h2 { text-align: center; margin-bottom: 20px; }
        .login-box label { display: block; margin-bottom: 5px; }
        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-box input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #4285f4;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .login-box input[type="submit"]:hover {
            background: #357ae8;
        }
        .login-box .home-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #4285f4;
            text-decoration: none;
        }
        .error { color: red; text-align: center; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login Menu</h2>
        <?php if(isset($error)) echo '<div class="error">'.$error.'</div>'; ?>
        <form method="post" action="<?php echo site_url('login/auth'); ?>">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Login">
        </form>
        <a class="home-link" href="<?php echo site_url('home'); ?>">home</a>
    </div>
</body>
</html> 