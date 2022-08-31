<?php 
function show(){
    $findData = connect()->prepare("SELECT * FROM interventions");
    $findData->execute();
    $data = $findData->fetchAll(PDO::FETCH_ASSOC);
    
   for ($i=0; $i < 1 ; $i++) { 
    foreach ($data as $key => $value) {
        echo '<tr>',
        '<td style="text-align: center;">'.$value['id'].'</td>',
        '<td style="text-align: center; text-transform: uppercase;">'.$value['intervention'].'</td>',
        '<td style="text-align: center;">'.$value['etage'].'</td>',
        '<td style="text-align: center;">'.$value['date_intervention'].'</td>';
    }
   }
}

function add(){
    $inter = $_POST['inter'];
    $etage = $_POST['etage'];
    $date = $_POST['date'];

    $add = connect()->prepare("INSERT INTO interventions(intervention, etage, date_intervention) VALUES( :inter, :etage , :datee)");
    $add-> bindParam(':inter', $inter, PDO::PARAM_STR);
    $add-> bindParam(':etage', $etage, PDO::PARAM_STR);
    $add-> bindParam(':datee', $date, PDO::PARAM_STR);
    $ok = $add->execute();

    if($ok){ 
    } else {
        echo 'Error during registration';
    }
}

function erase(){
    $erase = $_POST['erase'];
    $delBtn = $_POST['del'];
    
    $delete = connect()->prepare("DELETE FROM interventions WHERE id = :id");
    $delete-> bindParam(':id', $erase, PDO::PARAM_STR);
    $ok = $delete->execute();

    if($ok){
          
    } else {
        echo 'ID error';
    }
}

function modifyAll(){
    $idMo = $_POST['idM'];
    $interV = $_POST['interModi'];
    $etageModi = $_POST['etageModi'];
    $dateModi = $_POST['dateModi'];
    
    $modify = connect()->prepare("UPDATE `interventions` SET `intervention`= :value1, `etage`= :value2, `date_intervention`= :value3 WHERE id = :id");
    $modify-> bindParam(':id', $idMo, PDO::PARAM_STR);
    $modify-> bindParam(':value1', $interV, PDO::PARAM_STR);
    $modify-> bindParam(':value2', $etageModi, PDO::PARAM_STR);
    $modify-> bindParam(':value3', $dateModi, PDO::PARAM_STR);
    $ok = $modify->execute();

    if($ok){
          
    } else {
        echo 'ID error';
    }
}
function modifyInter(){
    $idMo = $_POST['idM'];
    $interV = $_POST['singleInter'];

    
    $modify = connect()->prepare("UPDATE `interventions` SET `intervention`= :value1 WHERE id = :id");
    $modify-> bindParam(':id', $idMo, PDO::PARAM_STR);
    $modify-> bindParam(':value1', $interV, PDO::PARAM_STR);
    $ok = $modify->execute();

    if($ok){
          
    } else {
        echo 'ID error';
    }
}

function modifyEtage(){
    $idMo = $_POST['idM'];
    $etageModi = $_POST['singleEtage'];
    
    
    $modify = connect()->prepare("UPDATE `interventions` SET `etage`= :value2 WHERE id = :id");
    $modify-> bindParam(':id', $idMo, PDO::PARAM_STR);
    $modify-> bindParam(':value2', $etageModi, PDO::PARAM_STR);
    $ok = $modify->execute();

    if($ok){
          
    } else {
        echo 'ID error';
    }
}

function modifyDate(){
    $idMo = $_POST['idM'];
    $dateModi = $_POST['singleDate'];
    
    $modify = connect()->prepare("UPDATE `interventions` SET `date_intervention`= :value3 WHERE id = :id");
    $modify-> bindParam(':id', $idMo, PDO::PARAM_STR);
    $modify-> bindParam(':value3', $dateModi, PDO::PARAM_STR);
    $ok = $modify->execute();

    if($ok){
          
    } else {
        echo 'ID error';
    }
}


function searchInter(){
    $inter = $_POST['inter'];
    $interSearch = connect()->prepare("SELECT * FROM interventions WHERE `intervention` = :val");
    $interSearch-> bindParam(':val', $inter, PDO::PARAM_STR);
    $interSearch->execute();
    $data = $interSearch->fetchAll(PDO::FETCH_ASSOC);



   for ($i=0; $i < 1 ; $i++) { 
    foreach ($data as $key => $value) {
        echo '<tr>',
        '<td style="text-align: center;">'.$value['id'].'</td>',
        '<td style="text-align: center; text-transform: uppercase;">'.$value['intervention'].'</td>',
        '<td style="text-align: center;">'.$value['etage'].'</td>',
        '<td style="text-align: center;">'.$value['date_intervention'].'</td>';
        
    }
   }
    

}
function searchEtage(){
    $etage = $_POST['etage'];
    $interSearch = connect()->prepare("SELECT * FROM interventions WHERE `etage` = :val");
    $interSearch-> bindParam(':val', $etage, PDO::PARAM_STR);
    $interSearch->execute();
    $data = $interSearch->fetchAll(PDO::FETCH_ASSOC);



   for ($i=0; $i < 1 ; $i++) { 
    foreach ($data as $key => $value) {
        echo '<tr>',
        '<td style="text-align: center;">'.$value['id'].'</td>',
        '<td style="text-align: center; text-transform: uppercase;">'.$value['intervention'].'</td>',
        '<td style="text-align: center;">'.$value['etage'].'</td>',
        '<td style="text-align: center;">'.$value['date_intervention'].'</td>';
        
    }
   }
    

}
function searchDate(){
    $date = $_POST['date'];
    $interSearch = connect()->prepare("SELECT * FROM interventions WHERE `date_intervention` = :val");
    $interSearch-> bindParam(':val', $date, PDO::PARAM_STR);
    $interSearch->execute();
    $data = $interSearch->fetchAll(PDO::FETCH_ASSOC);



   for ($i=0; $i < 1 ; $i++) { 
    foreach ($data as $key => $value) {
        echo '<tr>',
        '<td style="text-align: center;">'.$value['id'].'</td>',
        '<td style="text-align: center; text-transform: uppercase;">'.$value['intervention'].'</td>',
        '<td style="text-align: center;">'.$value['etage'].'</td>',
        '<td style="text-align: center;">'.$value['date_intervention'].'</td>';
        
    }
   }
    

}

function optionDate(){
    $date = connect()->prepare("SELECT DISTINCT date_intervention FROM `interventions`");
    $date->execute();
    $data = $date->fetchAll(PDO::FETCH_ASSOC);

    for ($i=0; $i < 1 ; $i++) { 
        foreach ($data as $key => $value) {
            echo 
            '<option>'.$value['date_intervention'].'</option>';
            
            
        }
       }
}
function optionEtage(){
    $etage = connect()->prepare("SELECT DISTINCT etage FROM `interventions`");
    $etage->execute();
    $data = $etage->fetchAll(PDO::FETCH_ASSOC);

    for ($i=0; $i < 1 ; $i++) { 
        foreach ($data as $key => $value) {
            echo 
            '<option>'.$value['etage'].'</option>';
            
            
        }
       }
}

function optionInter(){
    $intervention = connect()->prepare("SELECT DISTINCT intervention FROM `interventions`");
    $intervention->execute();
    $data = $intervention->fetchAll(PDO::FETCH_ASSOC);

    for ($i=0; $i < 1 ; $i++) { 
        foreach ($data as $key => $value) {
            echo 
            '<option>'.$value['intervention'].'</option>';
            
            
        }
       }
}