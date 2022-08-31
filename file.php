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
                <a class='bts' id='file'>
                    <h2 class='text'></h2>
                    <i class="fa-solid fa-folder icons"></i>
                </a>

                <a href='search.php'class='bts' id='search'>
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

        <div class='show' id='show'>  
            
            <div class='btnOnShow'>
                <button id='showDel' >Effacer</button>
                <button id='showModify'>Modifier</button>
            </div>
            
            <form id='delete' class='none' action="" method='POST'>
            <i class="fa-solid fa-xmark" id='close3'></i>
            <h2>EFFACER</h2>
            <input name='erase' type='number' placeholder='ID'>
            <input type="submit" name='del' value='Effacer' class='buttonConfirm'>
           
            </form>
            <?php 

                if(isset($_POST['del']) && !empty($_POST['erase']) && $_POST['del']=="Effacer"){
                erase();
            }
            ?>
           
            <form action="" method='POST' id='formModiTout' class='formModi none'>
                <i class="fa-solid fa-xmark" id='close4'></i>
                <h2>Modifier tout</h2>
                <input type="number" name='idM' placeholder='ID'>
                <select name="interModi" placeholder="TYPE D'INTERVENTION">
                    <option value="changement ampoule">changement ampoule</option>
                    <option value="remplacement serrure">remplacement serrure</option>
                </select>
                <input type="number" name='etageModi' placeholder='ÉTAGE'>
                <input type="date" name='dateModi'>
                <input type="submit" name='modify' value='Modifier' class="buttonConfirm">
            </form>

            <?php 

                if(isset($_POST['modify']) && !empty($_POST['interModi']) && !empty($_POST['idM']) && !empty($_POST['etageModi']) && !empty($_POST['dateModi']) && $_POST['modify']=="Modifier"){
                modifyAll();
            }
            ?>

            <div id='modifyBox' class='modifyBox none'>
                <button id='modiTout'>Modifier tout</button>
                <button id='modiInter'>Modifier type d'intervention</button>
                <button id='modiEtage'>Modifier étage</button>
                <button id='modiDate'>Modifier Date</button>
            </div>


            <form action="" method='POST' id='singleInterForm' class='none'>
                <i class="fa-solid fa-xmark" id='close5'></i>
                <h2>Modifier le type d'intervention</h2>
                <input type="number" name='idM' placeholder='ID'>
                <select name='singleInter' placeholder="TYPE D'INTERVENTION">
                    <option value="changement ampoule">changement ampoule</option>
                    <option value="remplacement serrure">remplacement serrure</option>
                </select>
                <input type="submit" name='interS' value='modifier' class='buttonConfirm'>
            </form>

            <form action="" method='POST' id='singleEtageForm' class='none'>
                <i class="fa-solid fa-xmark" id='close6'></i>
                <h2>Modifier l'étage</h2>
                <input type="number" name='idM' placeholder='ID' >
                <input type='number' name='singleEtage' placeholder='ÉTAGE'>
                <input type="submit" name='etageS' value='modifier' class='buttonConfirm'>
            </form>

            <form action="" method='POST' id='singleDateForm' class='none'>
                <i class="fa-solid fa-xmark" id='close7'></i>
                <h2>Modifier la date</h2>
                <input type="number" name='idM'placeholder='ID' >
                <input type='date' name='singleDate'>
                <input type="submit" name='dateS' value='modifier' class='buttonConfirm'>
            </form>

           
            
            <?php 
                if(isset($_POST['interS']) && !empty($_POST['singleInter']) && $_POST['interS']=="modifier"){
                modifyInter();
                }
                if(isset($_POST['etageS']) && !empty($_POST['singleEtage']) && $_POST['etageS']=="modifier"){
                modifyEtage();
                }
                if(isset($_POST['dateS']) && !empty($_POST['singleDate']) && $_POST['dateS']=="modifier"){
                modifyDate();
                }
            ?>
            
            <table>
                <tr>
                    <th>ID</th>
                    <th>TYPE D'INTERVENTION</th>
                    <th>ÉTAGE</th>
                    <th>DATE</th>
                </tr>
                <?php 
                    show();
                ?>
            
            </table>        
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
    </div>

    

    <script>
        if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
    </script>

    
    <script src="assets/js/file.js"></script>
</body>
</html>