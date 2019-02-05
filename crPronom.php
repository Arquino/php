<!DOCTYPE html>
<html>
    
     <head>
        <title>correction_pronoms</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/css2.css">
    </head>
    
    
    <body class="form-style-8">
         <h2> Score: </h2> <br>
        
       
        
        
        
        <?php 
            
              // DE 0 A 4 == DECEPT
        // DE 5 A 6 == NORMAL
        //7 A 9 == SOURIR
        // 10/10 ==  LA JOIE
        
        //  LOGO DE TSOUMOU EN ARRIERE PLAN
            
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
                    $q11 = $_POST['q11'];
                    $q12 = $_POST['q12'];
                    
                
             
                    
                    $point = 0;
                    
                    //q1 == me
                    
                   if($q1 == "me"){
                       //echo "question 1 ". 1 . "pt ". "<br>" ;
                       $point++;
                   }else{
                      // echo "question 1 ". 0 . "pt ". " 'je' se dit: <b>Mè</b> <br>" ;
                   }
                    
                    //q2 == we
                     if($q2 == "we"){
                      // echo "question 2 ". 1 . "pt ". "<br>" ;
                         $point++;
                   }else{
                       //echo "question 2 ". 0 . "pt ". " 'tu' se dit: <b>Wè</b> <br>" ;
                   }
                    
                    //q3 == nde
                     if($q3 == "nde"){
                       //echo "question 3 ". 1 . "pt". " <br>" ;
                         $point++;
                   }else{
                       //echo "question 3 ". 0 . "pt". " 'il' se dit : <b>Ndè</b> <br>" ;
                   }
                    
                    //q4 == sisso
                     if($q4 == "sisso"){
                      // echo "question 4 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                      // echo "question 4 ". 0 . "pt". " 'nous' se dit:<b>Sissô</b> <br>" ;
                   }
                    
                    //q5 == be
                     if($q5 == "be"){
                      // echo "question 5 ". 1 ."pt". "<br>"  ;
                         $point++;
                   }else{
                      // echo "question 5 ". 0 ."pt". " 'Vous' se dit: <b>Bè</b> <br>";
                   }
                    
                    // q6 == ndes
                     if($q6 == "ndes"){
                       //echo "question 6 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                      // echo "question 6 ". 0 . "pt". " 'Ils' se dit: <b>Ndè</b> <br>" ;
                   }
                    
                    
                     // q7 == ome
                     if($q7 == "ome"){
                      // echo "question 7 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                      // echo "question 7 ". 0 . "pt". " 'Mon' se dit: <b> ô mè </b><br>" ;
                   }
                    
                     // q8 == owe
                     if($q8 == "owe"){
                      // echo "question 8 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                       //echo "question 8 ". 0 . "pt". " 'Ton' se dit: <b> ô mè </b> <br>" ;
                   }
                    
                     // q9 == ode
                     if($q9 == "ode"){
                      // echo "question 9 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                      // echo "question 9 ". 0 . "pt". " 'Son' se dit: <b> ô dè</b> <br>" ;
                   }
                    
                     // q10 == obisi
                     if($q10 == "obisi"){
                       //echo "question 10 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                       //echo "question 10 ". 0 . "pt". "<br>" ;
                   }
                    
                     // q11 == ona
                     if($q11 == "ona"){
                       //echo "question 11 ". 1 . "pt". "<br>" ;
                         $point++;
                   }else{
                       //echo "question 11 ". 0 . "pt". "<br>" ;
                   }
                    
                     // q12 == ode
                     if($q12 == "ode"){
                       //echo "question 12 ". 1 . "pt". "<br>" ;
                         $point++;
                         
                   }else{
                       //echo "question 12 ". 0 . "pt". "<br>" ;
                   }
                    
                    
                    echo "<br> Moyenne: " . $point . " /12 ";
                    
                    // DE 0 A 4 == DECEPT
        // DE 5 A 6 == NORMAL
        //7 A 9 == SOURIR
        // 10/10 ==  LA JOIE
                    
                    if($point == 12){
                        echo " <br><br> Félicitation!! tu as trouvé <center> <img src='../image/smilCongratulation.jpg' wdth='100' height='100'><br> Super tu parles TEKE </center>  ";
                    }
                    if($point <= 5){
                        echo " <br><br>  <center> <img src='../image/tristSmil.png' wdth='100' height='100'><br> recommences </center> "   ;
                    }else if($point >= 6 && $point <= 8  ){
                        echo "   <br><br>  <center> <img src='../image/smilF.png' wdth='100' height='100'> <br> tu peux faire mieux </center>  ";
                    }else if($point >= 9 && $point <=11){
                        echo "  <br> <center> <img src='../image/felicitation.png' width='100' heigth='100'> <br> tu y es prèsque! </center>";
                    }else{
                        echo "";
                    }
                    
                    
                    
                   $pourcentage = ($point * 100) / 12;
                        $pourcentage = number_format( $pourcentage, 0, ',', ' ');
                    
                    
                    echo "<br>" . "ton score est de: ". $pourcentage . "% <br>";
                    
                   /* if($pourcentage == 100){
                        
                        echo " <center><img src='../image/smilCongratulation.jpg' width='100' height='100> </center>  <br> ";
                        
                        
                        echo "Felicitation!! tu as tout trouvé " . "   <img src='../image/ttrouveSmil.png' width='100' height='100'> ";
                    }
                    
                     if($pourcentage >= 50 && $pourcentage < 80){
                        echo "Felicitation!! mais peut mieux faire  " . " <img src='../image/smilPMF.jpg' width='100' height='100'>  ";
                    }*/
                    
                
                      
                    
                }
        
            
            
            ?> 
        
        
        <br><br>
        <a href="corrigePronom.php"> <input type="button" value="corrigé"> </a>
        <p><a href="../../blog3.html"> <input type="button" value="retour"</a></p>
        
           
        
       
            
        
       
        
        
    </body>
    
</html>
