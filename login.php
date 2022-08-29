<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
<body>
<div class='mainLogin'>
    <form action="connect.php" method="post" class="formLogin">
        <h1 class='loginTitle'>Se connecter</h1>
        <div class="userBox">
            <label for="username">Nom d'utilisateur:</label>
            <div class='boxInput'>
                <i class="fa-solid fa-user"></i>
                <input type="text" name="username" id="username">
            </div>
            
        </div>
        <div class="passBox">
            <label for="password">Mot de passe:</label>
            
            <div class='boxInput'>
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" id="password">
                <i class="fa-solid fa-eye" id='eye'></i>
                <i class="fa-solid fa-eye-slash none" id='eye2'></i>
            </div>
        </div>
            
            <button type="submit" name="action" value="login" class='submit'>Se connecter</button>
    
    </form>
</div>
<script src="assets/js/app.js"></script>
</body>

</html>