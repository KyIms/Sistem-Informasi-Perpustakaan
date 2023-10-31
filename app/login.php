<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/style/login.css" />
    <title>Login Page</title>
</head>

<body>
    <div class="login">
        <h2>Login</h2>
        <form class="login-form" action="proses.php" method="post">
            <input type="text" id="username" name="username" placeholder="Username" required />
            <input type="password" id="password" name="password" placeholder="Password" required />
            <button type="submit">Login</button>
        </form>
    </div>
    <script src="../assets/script/index.js" async defer></script>
</body>

</html>