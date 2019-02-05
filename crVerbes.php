<!DOCTYPE html>
<html>
    
     <head>
        <title>correction</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/css2.css">
    </head>
    
    
    <body class="form-style-8">
         <h2> Correction des Verbes: </h2> <br>
        
       
        
        
        
        <?php 
            
              
            
                if (isset($_POST['valider'])){
                    
                    $q1 = $_POST['q1'];
                    $q2 = $_POST['q2'];
                    $q3 = $_POST['q3'];
                    $q4 = $_POST['q4'];
                    $q5 = $_POST['q5'];
                    $q6 = $_POST['q6'];
                    $q7 = $_POST['q7'];
                    $q8 = $_POST['q8'];
                    $q9 = $_POST['q9'];
                    
                    
                
             
                    
                    $point = 0;
                    
                    //q1 == parler
                    
                   if($q1 == "parler"){
                       echo "question 1 ". 1 . "pt ". "<br>" ;
                       $point++;
                   }else{
                       echo "question 1 ". 0 . "pt ". "   Correction Parler: <b>Wobô</b> <br>" ;
                   }
                    
                    //q2 == manger
                     if($q2 == "manger"){
                       echo "question 2 ". 1 . "pt ". "<br>" ;
                         $point++;
                   }else{
                       echo "question 2 ". 0 . "pt ". " Correction Manger: <b>Djâ</b> <br>" ;
                   }
                    
                    //q3 == Aller
                     if($q3 == "aller"){
                       echo "question 3 ". 1 . "pt". " <br>" ;
                         $point++;
                   }else{
                       echo "question 3 ". 0 . "pt". " Correction Aller: <b>Djê</b> <br>" ;
                   }
                    
                    //q4 == Etre
                     if($q4 == "etre"){
                       echo "question 4 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                       echo "question 4 ". 0 . "pt". " Correction Etre:<b>Kâ</b> <br>" ;
                   }
                    
                    //q5 == avoir
                     if($q5 == "avoir"){
                       echo "question 5 ". 1 ."pt". "<br>"  ;
                         $point++;
                   }else{
                       echo "question 5 ". 0 ."pt". " Correction Avoir: <b>Barâ</b> <br>";
                   }
                    
                    // q6 == dire
                     if($q6 == "dire"){
                       echo "question 6 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                       echo "question 6 ". 0 . "pt". " Correcton Dire: <b>Dourâ</b> <br>" ;
                   }
                    
                    
                     // q7 == Voir
                     if($q7 == "Voir"){
                       echo "question 7 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                       echo "question 7 ". 0 . "pt". " Correction Voir: <b> Mônon </b><br>" ;
                   }
                    
                     // q8 == pleurer
                     if($q8 == "pleurer"){
                       echo "question 8 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                       echo "question 8 ". 0 . "pt". " Correction Pleurer: <b> Lila </b> <br>" ;
                   }
                    
                     // q9 == boire
                     if($q9 == "boire"){
                       echo "question 9 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                       echo "question 9 ". 0 . "pt". " Correction Boire: <b> Ngnoua</b> <br>" ;
                   }
                    
                    
                    
                    
                    $pourcentage = ($point * 100) / 9;
                    
                    
                    echo "<br>" . "ton score est de: ". $pourcentage . "%";
                
                    
                    
                    
                    
                }