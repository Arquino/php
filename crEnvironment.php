<!DOCTYPE html>
<html>
    <head>
        <title>correction_environnement</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/css2.css">
    </head>
    
    <body class="form-style-8">
        <h2>score: </h2>
        
        
        
        
        
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
                   
                    
             
                    
                    $point = 0;
                    
                    //q1 == maison
                    
                   if($q1 == "maison"){
                      // echo "question 1 ". 1 . "pt". "<br>" ;
                       $point++;
                   }else{
                      // echo "question 1 ". 0 . "pt". ": " . "Papa se dit ". "Tara". "<br>" ;
                   }
                    
                    //q2 == salon
                     if($q2 == "salon"){
                      // echo "question 2 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                       //echo "question 2 ". 0 . "pt". "<br>" ;
                   }
                    
                    //q3 == cuillere
                     if($q3 == "cuillere"){
                       //echo "question 3 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                       //echo "question 3 ". 0 . "pt". "<br>" ;
                   }
                    
                    //q4 == table
                     if($q4 == "table"){
                      // echo "question 4 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                      // echo "question 4 ". 0 . "pt". "<br>" ;
                   }
                    
                    //q5 == tele
                     if($q5 == "tele"){
                      // echo "question 5 ". 1 ."pt". "<br>"  ;
                         $point++;
                   }else{
                      // echo "question 5 ". 0 ."pt". "<br>";
                   }
                    
                    // q6 == chaise
                     if($q6 == "chaise"){
                      // echo "question 6 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                      // echo "question 6 ". 0 . "pt". "<br>" ;
                   }
                    
                    
                    
                    // q7 == marmite
                     if($q7 == "marmite"){
                      // echo "question 6 ". 1 . "pt". "<br>" ;
                         $point++;
                     }else{
                      // echo "question 6 ". 0 . "pt". "<br>" ;
                   }
                    
                    // q8 == bassine
                     if($q8 == "bassine"){
                      // echo "question 6 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                      // echo "question 6 ". 0 . "pt". "<br>" ;
                   }
                    
                    
                    // q9 == couteau
                     if($q9 == "couteau"){
                      // echo "question 6 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                      // echo "question 6 ". 0 . "pt". "<br>" ;
                   }
                    
                    // q10 == assiette
                     if($q10 == "assiette"){
                      // echo "question 6 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                      // echo "question 6 ". 0 . "pt". "<br>" ;
                   }
                    
                   /* // q11 == tante
                     if($q11 == "tante"){
                      echo "question 6 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                       echo "question 6 ". 0 . "pt". "<br>" ;
                   }*/
                    
                    
                    
                     echo "<br> Moyenne: " . $point . " /10";
                    
                    
                    
                     if($point == 10){
                        echo " <br> Félicitation!! tu as trouvé <center> <img src='../image/smilCongratulation.jpg' width='100' height='100' > <br> Super tu parles TEKE </center>  ";
                    }
             
                    if($point <= 4){
                        echo " <br><br>  <center> <img src='../image/tristSmil.png' width='100' height='100'> <br>regardes le corrigé et recommences </center> ";
                    }else if($point >= 5 && $point <=7){
                        echo "   <br><br>  <center> <img src='../image/smilF.png' width='100' height='100'> <br> Tu peux faire mieux </center> ";
                    }else if($point >= 8 && $point <=9){
                        echo " <br> <br> <center> <img src='../image/felicitation.png' width='100' heigth='100' > <br> Tu y étais prèsque </center> ";
                    }else{
                        
                    }
                    
                    
                    
                    $pourcentage = ($point * 100) / 10;
                        $pourcentage = number_format( $pourcentage, 0, ',', ' ');
                    
                    
                   // echo "<br>" . "ton score est de: ". $pourcentage . "%<br>";
            
        
        
                 }
        
        
        
        
        
        
        ?>
        
        <p> <a href="corrigeEnvironment.php"> <input type="button" value="corrigé"><br> </a></p>
        <p><a href="../../blog2.html"> <input type="button" value="retour"> </a></p>
        
        
        
        
    
        
        
    
        
        
        
        
    </body>
    
</html>