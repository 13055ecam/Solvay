<!DOCTYPE html>
<html>
    <head>
        <title>Calcul du prix de vente d'une entreprise(PVE)</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <center>
    <h1> Bienvenue sur notre site web INVEST SA ! </h1>
    </center>
     <?php 
        function investXXX($bénéfice,$dettes,$secteur,$chiffre_affaire)
        {
            $secteur_rentable = array("BIO","CN","CHI","EAU");
            $secteur_non_rentable = array("FIN","AUT","AGR","ICT");
            
                if (in_array($secteur,$secteur_non_rentable)) 
                {
                    echo "Désolé, votre entreprise ne nous intéresse pas";
                }
                elseif (in_array($secteur,$secteur_rentable)) 
                {
                    echo "Bienvenue chez B2B. Voici les données que vous avez déclarées : "."</br>";
                    echo "Votre secteur :". "[" .$secteur ."]"."</br>";
                    echo "Votre CA annuel :". "[" .$chiffre_affaire ."]"."</br>";
                    echo "Votre bénéfice annuel :"."[" .$bénéfice ."€"."]"."</br>";
                    echo "Vos dettes s'élèvent à :"."[" .$dettes ."€"."]"."</br>";
                    if($bénéfice>$dettes)
                    {
                        $PVE = ($chiffre_affaire*2.5)+$bénéfice;
                        echo "Votre entreprise nous intéresse et nous évaluons sa valeur à :"." ".$PVE . "€";
                    }
                    elseif($dettes > $bénéfice && $dettes < $chiffre_affaire)
                    {
                        $PVE = $chiffre_affaire*2;
                        echo "Votre entreprise nous intéresse malgré ses dettes importantes et nous évaluons sa valeur à"." ".$PVE . "€";
                    }
                    else
                    {
                        echo "Malgré la santé financière fragile de votre entreprise, nous vous proposons de passer à notre agence pour en discuter !";
                    }
                }
                else
                {
                    echo "Données incorrectes";
                }
            }
            //investXXX($bénéfice,$dettes,$secteur,$chiffre_affaire)
            //investXXX(200,150,"CHI","1000");
            investXXX(100,150,"CN","1600");
            //investXXX(200,1500,"EAU","1000");
            //investXXX(300,17,"AUT","1200");
     ?>
  
    </body>
</html>