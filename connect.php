<?php
session_start();
function connect(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=campus', 'root', '');
        return $db;
        
        }
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function login(){
$findUser = connect()->prepare("SELECT * FROM user WHERE login_user = :Uname");
$findUser->bindParam(':Uname', $_POST['username'], PDO::PARAM_STR);
$findUser->execute();
$user = $findUser->fetch();

if ($user && $_POST['password'] == $user['password_user']) {
    $_SESSION['nom'] = $user['name_user']; 
    header('Location: ./index.php');  
    
} else {
    echo 'Invalid username or password';
}

}

if(isset($_POST['action']) && !empty($_POST['username'])  && !empty($_POST['password'])  && $_POST['action']=="login"){
    login();
}
   

?>

