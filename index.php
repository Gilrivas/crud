<?php 
include('assets/php/connect.php');
include('assets/php/functions.php');


if(isset($_SESSION['nom'])){
    }
    else{
        header('Location: ./login.php');     
    }
 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
<body>
    <div id='main'>

        <div class='sideB' id='sideB'>
            <i class="fa-solid fa-bars" id='open'></i>
            <i class="fa-solid fa-xmark none" id='close'></i>

                   
            <div class='buttons'>
                <a href='index.php' class='bts' id='home'>
                    <h2 class='text'></h2>
                    <i class="fa-solid fa-house icons"></i>
                </a>

                <a href='file.php' class='bts' id='file'>
                    <h2 class='text'></h2>
                    <i class="fa-solid fa-folder icons"></i>
                </a>

                <a href='search.php' class='bts' id='search'>
                    <h2 class='text'></h2>
                    <i class="fa-solid fa-magnifying-glass icons"></i>
                </a>
                    
                <a class='bts' id='add'>
                    <h2 class='text'></h2>
                    <i class="fa-solid fa-plus icons"></i>
                </a>
            
               
            </div>


            <a class='logout' id='logout' href='assets/php/logout.php'>
            <i class="fa-solid fa-arrow-right-from-bracket" id='logIcon'></i>
            <p id='logText'></p>
            </a> <br>
        </div>


        <div class="profile">
            <img class='profilePic' src="https://picsum.photos/200/300" alt="">
            <h1><?php echo $_SESSION['nom']?></h1>
           <!-- <i class="fa-solid fa-gear"></i> -->
            
        </div>

        
       

        <div class='add none' id='addScreen'>

            <i class="fa-solid fa-xmark" id='close2'></i>
            <form action="" method='POST' class="addForm">
                <h2 class>AJOUTER</h2>
                <select name="inter" placeholder="TYPE D'INTERVENTION">
                    <option value="changement ampoule">changement ampoule</option>
                    <option value="remplacement serrure">remplacement serrure</option>
                </select>
                <input type="number" name="etage" placeholder="ÉTAGE">
                <input type="date" name="date" >
                <input type='submit' name='action' value='ajouter'>
            </form>

            <?php 

            if(isset($_POST['action']) && !empty($_POST['inter'])  && !empty($_POST['etage']) && !empty($_POST['date'])  && $_POST['action']=="ajouter"){
            add();
            }
        
            ?>
        </div>
        
    <script>
        if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
    </script>

    
    <script src="assets/js/home.js"></script>
</body>
</html>