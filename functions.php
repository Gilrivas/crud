<?php 
function show(){
    $findData = connect()->prepare("SELECT * FROM interventions");
    $findData->execute();
    $data = $findData->fetchAll(PDO::FETCH_ASSOC);



   for ($i=0; $i < count($data) ; $i++) { 
    foreach ($data[$i] as $key => $value) {
        echo $value.' ';
    }
   }
    

   

}