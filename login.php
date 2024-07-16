<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WE SHINE!</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
      <link rel="stylesheet" href="css/bootstrap.min.css" />

</head>
<body>

<div class="bg-section">
    <div class="input">
        <h3 style="text-align: center; color: black; font-weight: bold; margin-top: 30px">Login</h3>
        <form action="proses_login.php" method="POST" style="background-color: white; padding: 20px; border-radius: 10px; max-width: 500px; margin: 40px auto; color: #4B3621; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <div class="box-input">
                <label for="identifier">Username or Email: </label>
                <input type="text" name="identifier" class="bg-secondary-subtle" placeholder="Username or Email" style="width: calc(100% - 20px); color: black; margin-bottom: 30px;">
            </div>
            <div class="box-input">
                <label for="password">Password: </label>
                <input type="password" name="password" class="bg-secondary-subtle" placeholder="Password" style="width: calc(100% - 20px); color: black; margin-bottom: 30px;">
            </div>
            <button type="submit" name="login" class="btn-input bg-secondary" style="border-radius: 10px; color: white; margin-top: 5px; margin-bottom: 5px; border-color:transparent">Login</button>
            <div class="bottom">
                <p style="text-align: center; margin-top: 20px;">Belum punya akun?
                    <a style="color: black; font-weight: bold;" href="signup.php">Register disini</a>
                </p>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>