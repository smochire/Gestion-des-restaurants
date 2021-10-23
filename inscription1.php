<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" media="screen" type="text/css" href="Inscription.css">
</head>
<body>
        <div class="tete">
           <div> <img src="image/esperanto logo.png" alt="logo" width="200px" height="200px"> </div>
            <div class="livre"> INSCRIPTION LIVREUR </div>
        </div>
        <div class="corps">
            <form action="inscription2.php" method="POST">
                <div class="cont">
                        <div>Nom <br/></div> 
                        <div><input type="text" name="nom"  class="cadre"></div>                    </div>
                <div class="cont">
                        <div>Prénom <br/></div> 
                        <div ><input type="text" name="prenom" class="cadre"></div>
                </div>
                <div class="cont">
                        <div>Adresse <br/></div> 
                        <div ><input type="text" name="adresse" class="cadre"></div>
                </div>
                <div class="cont">
                        <div>Téléphone <br/></div> 
                        <div ><input type="text" name="telephone" class="cadre"></div>
                </div>
                    
                <div class="bton">
                    
                    <input type="submit" value="Suivant" class="bton1">
                
                </div>
            </form> 
            
        </div>
        

</body>
</html>