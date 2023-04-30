<?php 
require 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../css/navbar.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
</head>


<body>
    

    <form> 
    <input type="text" name="text" class="search" placeholder="Recherchez ici!">
    <input type="submit" name="submit" class="submit" value="Search">
    </form>


    <?php 
    
    
    ?>

    <section id="navbar">
    
        <!-- <div class="logo">
            <img src="//images/logotwitter.png" class="logoo">
        </div> -->
    
<!--         <div class="menu">
            <div id="AccueilNavBar">Accueil</div>
            <div>Explorer</div>
            <div>Notifications</div>
            <div>Messages</div>
            <div>Signets</div>
            <div>Profil</div>
            <div>Plus</div>
        </div>
 -->    

        <div class="div-navbar">
            <div class="logo">
                <img src="../images/logotwitter.png" alt="logo de l'application">
            </div>
            <div class="la-navbar">
                <ul class="navbar">
                    <a href=""><li>Accueil</li></a>
                    <a href=""><li>Explorer</li></a>
                    <a href=""><li>Notifications</li></a>
                    <a href=""><li>Messages</li></a>
                    <a href=""><li>Signets</li></a>
                    <a href=""><li>Profil</li></a>
                    <a href=""><li>Plus</li></a>
                </ul>

                <a href = "./creationTweet.php">
                    <button class="Tweeter">
                        Tweeter
                    </button>
                </a>
            
                <div class=info-users>
                    <img src="../images/avatar.png" class=avatar>
                    <div class="identification-users">
                        <?php  $twitterUsername = 'jeandupont06';?>
                        <?php  $twitterName = 'Jean Dupont';?>
                       
                        <p> 
                            <?php  echo "@$twitterUsername";?>
                        </p>
                        <p>
                            <?php  echo $twitterName;?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="notre-page">
    
        
        </div>
    
    </section>
    
    
    <section id="tweeter">

    <p>Pseudo</p>
    <input type="text" id="name" name="pseudo" required>


    
    </section>



   <a href="./creationCompte.php">
        <button class="creationCompte">
            Créer un compte
        </button>
   </a> 




</body>
</html>