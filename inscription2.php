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
        <div class="corps" id="partie2">
            <form action="inscription1.php" method="POST">
                <div class="cont">
                    <div>E-mail <br/></div> 
                    <div><input type="text" name="email"  class="cadre"></div>
                </div>
                <div class="cont">
                    <div>Login <br/></div> 
                    <div><input type="text" name="login"  class="cadre"></div>
                </div>
                <div class="cont">
                    <div>Mot de passe <br/></div> 
                    <div ><input type="password" name="motDePasse" class="cadre"></div>
                </div>
                <div class="bton">
                    <input type="submit" name="inscri" value="S'inscrire" class="bton1" >
                </div>
            </form>
        </div>
        <?php
                $pdo = new PDO("mysql:host=localhost;dbname=gestion_des_restaurants","root","");
                $query = $pdo->prepare("SELECT COUNT(*) AS nb FROM user Where Discriminator = 'Livreur' ");
                $query->execute();
                $donne = $query->fetchColumn();
                $query->closeCursor();
                $nbre1 = $donne + 1;
                echo "$nbre1";
                
                $sql = $pdo->prepare("SELECT COUNT(*) AS nb FROM user Where Discriminator = 'Administrateur' ");
                $sql->execute();
                $donne1 = $sql->fetchColumn();
                $nob = $donne1 + 1;
                echo "$nob";

                $query = $pdo->prepare("INSERT INTO categorie(NomCategorie) values(?)");
                $catego="Viande";
                

               
                    $nomL= $_POST['nom'];
                    $prenomL = $_POST['prenom'];
                    $adresseL = $_POST['adresse'];
                    $phoneL = $_POST['telephone'];

                    if(isset($_POST['inscri']))
                    {
                       // $emailL = $_POST['email'];
                       // $loginL = $_POST['login'];
                       // $mDpL = $_POST['motDePasse'];
                       $query->execute(array($catego));                             
                    }
                    
                
            ?>
        
    </body>
</html>