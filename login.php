<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
     <title>Truevex Technologies</title>
    <link rel="icon" type="image/png" href="images/101 (1) copy ico file.ico">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="container">

        <div class="left">
            <h1>Sign In to Truevex Technologies</h1>
            <p class="subtitle">Access your attendance management system.</p>

            <form action="admin_login_logic.php" method="POST">
                <label>Email or Username</label>
                <input type="text" name="username" placeholder="Admin username" required>

                <label>Password</label>
                <input type="password" name="password" placeholder="Password" required>

                <div class="row">
                    <!-- <label class="checkbox">
                        <input type="checkbox">
                        Remember me
                    </label> -->
                    <a href="#" class="link">Forgot password?</a>
                </div>

                <button type="submit" class="btn-primary">Sign In</button>
            </form>

            <div class="divider">OR CONTINUE WITH</div>

            <div class="social">
                <button class="btn-social">🌐 Google</button>
                <button class="btn-social">📝 NotepadTextDashed</button>
            </div>

            <p class="terms">
                By signing in, you agree to our
                <a href="#">Terms of Service</a> and
                <a href="#">Privacy Policy</a>.
            </p>

            <div class="footer">
                <a href="#">Help</a>
                <a href="#">IT Support</a>
            </div>
        </div>

        <div class="right">
            <img src="images/login image.png" alt="">
        </div>

    </div>

</body>

</html>
