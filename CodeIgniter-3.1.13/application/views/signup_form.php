<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f7f7f7; }
        .signup-box {
            width: 350px;
            margin: 80px auto;
            padding: 30px 25px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .signup-box h2 { text-align: center; margin-bottom: 20px; }
        .signup-box label { display: block; margin-bottom: 5px; }
        .signup-box input[type="text"],
        .signup-box input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .signup-box input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .signup-box input[type="submit"]:hover {
            background: #218838;
        }
        .signup-box .login-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #4285f4;
            text-decoration: none;
        }
        .error { color: red; text-align: center; margin-bottom: 10px; }
        .success { color: green; text-align: center; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="signup-box">
        <h2>Sign Up</h2>
        <?php if(isset($error)) echo '<div class="error">'.$error.'</div>'; ?>
        <form method="post" action="<?php echo site_url('signup/register'); ?>">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Daftar">
        </form>
        <a class="login-link" href="<?php echo site_url('login'); ?>">Sudah punya akun? Login</a>
    </div>
</body>
</html> 