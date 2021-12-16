<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Indie+Flower&family=Red+Hat+Mono:wght@300&display=swap"
        rel="stylesheet">
</head>
<body>
    
    <div class="login-form">
        <h1>Login</h1>
        <form action="validation.php" method="post">
            <div class="form-group">
                <label>Aadhar Number : </label>
                <br>
                <input type="number" name="aadhar" class="form-control" >
            </div>
            <div class="form-group">
                <label>Password : </label>
                <br>
                <input type="password" name="password" class="form-control" >
            </div>
            <button type="submit" class="btn">Login</button>
             <p>Don't have an account? <a href="register.php">Register</a></p>
        </form>

    </div>
</body>
</html>