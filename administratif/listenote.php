<?php
session_start();
include("../connexion.php");
    $requette="SELECT numapogee,nom,prenom,note FROM etudiant,stage_encadre where etudiant.numapogee=stage_encadre.id_etudiant and validation=1 order by nom";
    $resultat=mysqli_query($link,$requette);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="css/tab.css">
  <title>liste des notes</title>
  <link rel="icon" href="images/icon.jpg"/>

</head>
  <body>
  <header>
        <div class="navigation">
        <ul>
                <div class="logoensak"><a href="home.php"><img src="images/ensaklogo.png" alt="logo de l'ensak" id="logoensak"></a></div>
                <li class="list">
                    <a href="home.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li class="list">
                    <a href="listestage.php">
                        <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                        <span class="title">Liste des stages</span>   
                    </a>
                </li>
                <li class="list">
                    <a href="listeetudiant.php">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Liste des etudiants</span>
                    </a>
                </li>
                <li class="list">
                    <a href="stagevalid.php">
                        <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                        <span class="title">Stages validés</span>
                    </a>
                </li>
                <li class="list active" >
                    <a href="listenote.php">
                        <span class="icon"><ion-icon name="document-attach-outline"></ion-icon></span>
                        <span class="title">Notes des étudiants</span>
                    </a>
                </li>
                <li class="list">
                    <a href="home.php#espacenum">
                        <span class="icon"><ion-icon name="globe-outline"></ion-icon></span>
                        <span class="title">Espace numérique</span>
                    </a>
                </li>
                <li class="list">
                    <a href="mailto:ilham.oumaira@uit.ac.ma">
                        <span class="icon"><ion-icon name="chatbubbles-outline"></ion-icon></span>
                        <span class="title">Contact</span>
                    </a>
                </li>
                <li class="list">
                <a href="../deconnexion.php">
                        <span class="icon"><ion-icon name="log-in-outline"></ion-icon></span>
                        <span class="title">Se deconnecter</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </header>
    <section>
    <h2 class="p">Liste des notes des étudiants</h2>
    <p>Voici la liste des notes des etudiants ,vous pouvez talacharger un  fichier  Excel contenant toutes les notes</p>
    <p class="desc">Télécharger la liste des notes des étudiants</p>
    <div id="wrap">
    <a href="note.php" class="btn-slide">
        <span class="circle"><i class="fa fa-download"></i></span>
        <span class="title">Télécharger</span>
        <span class="title-hover">Cliquez ici</span>
    </a>
    </div>

      <table>
      <thead>
        <tr>
        <th class="entreprise">Numéro apogée</th>
          <th class="nom">Nom</th>
          <th class="nom">Prenom</th>
          <th  class="entreprise">Note</th>
        </tr>
      </thead>   
      <tbody>
         <?php 
            while($data=mysqli_fetch_assoc($resultat)){ 
                
        ?>
        <tr>
          <td class="entreprise"><?php echo $data["numapogee"] ?></td>
          <td class="nom"><?php echo $data["nom"]?></td>
          <td class="nom"><?php echo $data["prenom"]?></td>
          <td class="entreprise"><?php echo $data["note"]?></td>
        
        </tr>
        <?php }?>
      </tbody>
    </table>
     
   

    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        const list = document.querySelectorAll('.list');
        function activeLink(){
            list.forEach((item)=>
            item.classList.remove('active'));
            this.classList.add('active');
            
        } 
        list.forEach((item)=>
        item.addEventListener('click',activeLink));
    </script>
  </body>
  </html>




?>