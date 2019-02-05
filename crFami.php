<!DOCTYPE html>
<html>
    <head>
        <title>correction_Famille</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/css2.css">
    </head>
    
    
    <body class="form-style-8">
         <h2> Ton Score (famille): </h2> <br>
        
        
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
                    $q10 = $_POST['q10'];
                    $q10 = $_POST['q10'];
                    //$q11 = $_POST['q11'];
                    
             
                    
                    $point = 0;
                    
                    //q1 == famille
                    
                   if($q1 == "famille"){
                      // echo "question 1 ". 1 . "pt". "<br>" ;
                       $point++;
                   }else{
                      // echo "question 1 ". 0 . "pt". ": " . "Papa se dit ". "Tara". "<br>" ;
                   }
                    
                    //q2 == grp
                     if($q2 == "grp"){
                      // echo "question 2 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                       //echo "question 2 ". 0 . "pt". "<br>" ;
                   }
                    
                    //q3 == grm
                     if($q3 == "grm"){
                       //echo "question 3 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                       //echo "question 3 ". 0 . "pt". "<br>" ;
                   }
                    
                    //q4 == papa
                     if($q4 == "papa"){
                      // echo "question 4 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                      // echo "question 4 ". 0 . "pt". "<br>" ;
                   }
                    
                    //q5 == maman
                     if($q5 == "maman"){
                      // echo "question 5 ". 1 ."pt". "<br>"  ;
                         $point++;
                   }else{
                      // echo "question 5 ". 0 ."pt". "<br>";
                   }
                    
                    // q6 == grf
                     if($q6 == "grf"){
                      // echo "question 6 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                      // echo "question 6 ". 0 . "pt". "<br>" ;
                   }
                    
                    
                    
                    // q7 == grs
                     if($q7 == "grs"){
                      // echo "question 6 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                      // echo "question 6 ". 0 . "pt". "<br>" ;
                   }
                    
                    // q8 == ptf
                     if($q8 == "ptf"){
                      // echo "question 6 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                      // echo "question 6 ". 0 . "pt". "<br>" ;
                   }
                    
                    
                    // q9 == bebe
                     if($q9 == "bebe"){
                      // echo "question 6 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                      // echo "question 6 ". 0 . "pt". "<br>" ;
                   }
                    
                    // q10 == oncle
                     if($q10 == "oncle"){
                      // echo "question 6 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                      // echo "question 6 ". 0 . "pt". "<br>" ;
                   }
                    
                    /*// q11 == tante
                     if($q11 == "tante"){
                      // echo "question 6 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                      // echo "question 6 ". 0 . "pt". "<br>" ;
                   }*/
                    
                    
                    
                     echo "<br> Moyenne: " . $point . " /10";
                    
                    
                    
                    if($point == 10){
                        echo " <br> Félicitation!! tu as trouvé <center> <img src='../image/smilCongratulation.jpg' width='100' height='100' > <br> Super tu parles TEKE </center>  ";
                    }
             
                    if($point <= 4){
                        echo " <br><br>  <center> <img src='../image/tristSmil.png' width='100' height='100'> <br> regardes le corrigé et recommences </center> ";
                    }else if($point >= 5 && $point <=7){
                        echo "   <br><br>  <center> <img src='../image/smilF.png' width='100' height='100'> <br> Tu peux faire mieux </center> ";
                    }else if($point >= 8 && $point <=9){
                        echo " <br> <br> <center> <img src='../image/felicitation.png' width='100' heigth='100' > <br> Tu y étais prèsque </center> ";
                    }else{
                        
                    }
                    
                    
                    
                    $pourcentage = ($point * 100) / 10;
                        $pourcentage = number_format( $pourcentage, 0, ',', ' ');
                    
                    
                   // echo "<br>" . "ton score est de: ". $pourcentage . "% <br>";
                    
                    /*if($pourcentage == 100){
                        
                       /* echo " <center><img src='../image/smilCongratulation.jpg' width='100' height='100> </center>  <br> ";
                         
                        echo "Felicitation!! tu as tout trouvé " . "   <img src='../image/ttrouveSmil.png' width='100' height='100'> ";
                    }
                    
                     if($pourcentage >= 50 && $pourcentage < 80){
                        echo "Felicitation!! mais peut mieux faire  " . " <img src='../image/smilPMF.jpg' width='100' height='100'>  ";
                    }*/
                    
                    
                    
                   // echo "<br>" . "ta note est: ". $point . "/6 ";
                    
                      //LES MENTION TRES BIEN, PEUT MIEUX FAIRE, 
                    
                   
                        
                        
                        
                
                    
                    
                    
                    
                
                
                    
                    
                    
                    
                }
            
            
            ?>
        
                   <br><a href="corrigeFami.php"> <input type="button" value="corrigé"> </a><br>
                  <p><a href="../../blog2.html"> <input type="button" value="retour"><br> </a></p>
        
        
    </body>
</html>