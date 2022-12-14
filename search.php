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

                <a class='bts' id='search'>
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

      

        <div class='recherche' id='searchSection'>

            <div class='buttonsSearch' id='buttonsSearch'>
                <button class='btnSearch' id='btnSearchInter'>Trier par intervention</button>
                <button class='btnSearch' id='btnSearchEtage'>Trier par ??tage</button>
                <button class='btnSearch' id='btnSearchDate'>Trier par date</button>
            </div>

            <div class='searchBox none' id='searchInter'>
               
                    <form action="" method='POST'>
                        <select name="inter">
                            <?php optionInter() ?>
                        </select>
                        <label class="label"for="interBtn">
                        <i class="fa-solid fa-magnifying-glass "></i>
                        <input style="display:none;" type="submit" value='chercher' name='search' id='interBtn' class='buttonConfirm'>
                    </label>
                    </form>

            </div>

            <div class='searchBox none' id='searchEtage'>
                    <form action="" method='POST'>
                    <select type="number" name='etage' >
                        <?php optionEtage() ?>
                    </select>
                    <label class="label" for="etageBtn">
                        <i class="fa-solid fa-magnifying-glass "></i>
                        <input style="display:none;" type="submit" value='chercher' name='search' id='etageBtn' class='buttonConfirm'>
                    </label>
                    </form>
            </div>

            <div class='searchBox none' id='searchDate'>
                
                    <form action="" method='POST'>
                    <select type="date" name='date' >
                        <?php optionDate() ?>
                    </select>
                    <label class="label" for="dateBtn">
                        <i class="fa-solid fa-magnifying-glass "></i>
                        <input style="display:none;" type="submit" value='chercher' name='search' id='dateBtn' class='buttonConfirm'>
                    </label>
                    </form>      
            </div>

            
            
        </div>

        <?php 

        if(isset($_POST['search']) && !empty($_POST['inter']) && $_POST['search']=="chercher"){
            echo "<table>

            <tr>
                <th>ID</th>
                <th>TYPE D'INTERVENTION</th>
                <th>??TAGE</th>
                <th>DATE</th>
            </tr>";

            searchInter();

            echo "</table>";
        }

        

        if(isset($_POST['search']) && !empty($_POST['etage']) && $_POST['search']=="chercher"){
            echo "<table>

            <tr>
                <th>ID</th>
                <th>TYPE D'INTERVENTION</th>
                <th>??TAGE</th>
                <th>DATE</th>
            </tr>";

            searchEtage();

            echo "</table>";
        }

        if(isset($_POST['search']) && !empty($_POST['date']) && $_POST['search']=="chercher"){
            echo "<table>

            <tr>
                <th>ID</th>
                <th>TYPE D'INTERVENTION</th>
                <th>??TAGE</th>
                <th>DATE</th>
            </tr>";

            searchDate();

            echo "</table>";
        }
       
        ?>

       

        <div class='add none' id='addScreen'>

            <i class="fa-solid fa-xmark" id='close2'></i>
            <form action="" method='POST' class="addForm">
                <h2 class>AJOUTER</h2>
                <input name="inter" placeholder="TYPE D'INTERVENTION">
                <input type="number" name="etage" placeholder="??TAGE">
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

    
    <script src="assets/js/search.js"></script>
</body>
</html>