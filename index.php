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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
<body>
    <div id='main'>

        <div class='sideB' id='sideB'>
            <i class="fa-solid fa-bars" id='open'></i>
            <i class="fa-solid fa-xmark none" id='close'></i>

                   
            <div class='buttons'>
                <button class='bts' id='search'>
                    <h2 class='text'></h2>
                    <i class="fa-solid fa-magnifying-glass icons"></i></button>
                    
                <button class='bts' id='add'>
                <h2 class='text'></h2>
                    <i class="fa-solid fa-plus icons"></i></button>
            
                <button class='bts' id='file'>
                <h2 class='text'></h2>
                    <i class="fa-solid fa-folder icons"></i></button>
            </div>


            <a class='logout' id='logout' href='./logout.php'>
            <i class="fa-solid fa-arrow-right-from-bracket" id='logIcon'></i>
            <p id='logText'></p>
            </a> <br>
        </div>

        <div class='buttonsSearch none' id='buttonsSearch'>
            <button class='btnSearch' id='btnSearchInter'>Chercher Intervention</button>
            <button class='btnSearch' id='btnSearchEtage'>Chercher Étage</button>
            <button class='btnSearch' id='btnSearchDate'>Chercher Date</button>
        </div>

        <div class='recherche'>
            <div class='searchInter none' id='searchInter'>
               
                    <form action="" method='POST'>
                        <select name="inter">
                            <option value="changement ampoule">changement ampoule</option>
                            <option value="remplacement serrure">remplacement serrure</option>
                        </select>
                        <input type="submit" value='chercher' name='search'>
                    </form>

                <table>

                    <tr>
                        <th>ID</th>
                        <th>TYPE D'INTERVENTION</th>
                        <th>ÉTAGE</th>
                        <th>DATE</th>
                    </tr>
                
                        <?php 

                        if(isset($_POST['search']) && !empty($_POST['inter']) && $_POST['search']=="chercher"){
                            searchInter();
                        }
                        ?>
            

                </table>

    
            
            </div>
            <div class='searchEtage none' id='searchEtage'>
                    <form action="" method='POST'>
                        <input type="number" name='etage' placeholder='étage'>
                        <input type="submit" value='chercher' name='search'>
                    </form>

                <table>

                    <tr>
                        <th>ID</th>
                        <th>TYPE D'INTERVENTION</th>
                        <th>ÉTAGE</th>
                        <th>DATE</th>
                    </tr>
                
                        <?php 

                        if(isset($_POST['search']) && !empty($_POST['etage']) && $_POST['search']=="chercher"){
                            searchEtage();
                        }
                        ?>
            

                </table>

    
            
            </div>

            <div class='searchDate none' id='searchDate'>
                
                    <form action="" method='POST'>
                        <input type="date" name='date' >
                        <input type="submit" value='chercher' name='search'>
                    </form>

                <table>

                    <tr>
                        <th>ID</th>
                        <th>TYPE D'INTERVENTION</th>
                        <th>ÉTAGE</th>
                        <th>DATE</th>
                    </tr>
                
                        <?php 

                        if(isset($_POST['search']) && !empty($_POST['date']) && $_POST['search']=="chercher"){
                            searchDate();
                        }
                        ?>
            

                </table>

    
            
            </div>

            
            
        </div>

        <?php
        if(isset($_SESSION['nom'])){
            }
            else{
                header('Location: ./login.php');     
            }
         ?>

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
        

        <div class='show none' id='show'>  
            
            <div class='btnOnShow'>
                <button id='showDel' >Effacer</button>
                <button id='showModify'>Modifier</button>
            </div>
            
            <form id='delete' class='none' action="" method='POST'>
            <i class="fa-solid fa-xmark" id='close3'></i>
            <h2>EFFACER</h2>
            <input name='erase' type='number' placeholder='ID'>
            <input type="submit" name='del' value='Effacer' class='efface'>
           
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
                <input type="text" name='interModi' placeholder="TYPE D'INTERVENTION">
                <input type="number" name='etageModi' placeholder='ÉTAGE'>
                <input type="date" name='dateModi'>
                <input type="submit" name='modify' value='Modifier'>
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
                <input type="submit" name='interS' value='modifier'>
            </form>

            <form action="" method='POST' id='singleEtageForm' class='none'>
                <i class="fa-solid fa-xmark" id='close6'></i>
                <h2>Modifier l'étage</h2>
                <input type="number" name='idM' placeholder='ID' >
                <input type='number' name='singleEtage' placeholder='ÉTAGE'>
                <input type="submit" name='etageS' value='modifier'>
            </form>

            <form action="" method='POST' id='singleDateForm' class='none'>
                <i class="fa-solid fa-xmark" id='close7'></i>
                <h2>Modifier la date</h2>
                <input type="number" name='idM'placeholder='ID' >
                <input type='date' name='singleDate'>
                <input type="submit" name='dateS' value='modifier'>
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
      

    </div>

    
    <script src="assets/js/app2.js"></script>
</body>
</html>