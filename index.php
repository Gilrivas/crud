<?php 
include('connect.php');
include('functions.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id='main'>

        <a class='logout' href='./logout.php'>Se déconnecter</a> <br>

        <?php
        if(isset($_SESSION['nom'])){
            echo "<h1 class='title'>Bienvenue ".$_SESSION['nom'].'</h1>' ;
            }
            else{
                header('Location: ./login.php');     
            }
         ?>

        
    <div class='buttons'>
            <button>Chercher</button>
                
            <button>Ajouter</button>
        
            <button>show</button>
    </div>
        

    <div class='show none'>

        <?php 
            show()
        ?>
    </div>
      

    </div>

    
    <script src="assets/js/app.js"></script>
</body>
</html>