<?php
session_start();
include('../connexion.php');
$requette="SELECT * FROM etudiant order by nom";
    $resultat=mysqli_query($link,$requette);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="css/tab.css">
  <title>Liste des étudiants</title>
  <link rel="icon" href="images/icon.jpg"/>
</head>
  <body>
  <header>
        <div class="navigation">
            <ul>
                <div class="logoensak"><a href="home.php"><img src="images/ensaklogo.png" alt="logo de l'ensak" id="logoensak"></a></div>
                <li class="list ">
                    <a href="home.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li class="list active">
                    <a href="listeetud.php">
                        <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                        <span class="title">Liste des stages</span>   
                    </a>
                </li>
                <li class="list">
                    <a href="mesetudiant.php">
                        <span class="icon"><ion-icon name="albums-outline"></ion-icon></span>
                        <span class="title">Etudiants encadrés</span>
                    </a>
                </li>
                <li class="list">
                    <a href="profile.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">profil</span>
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
    <h2 class="p">Liste des étudiants ayant un stage PFE</h2>
    <p></p>
      <table>
      <thead>
        <tr>
          <th class="nom">Nom</th>
          <th class="nom">Prenom</th>
          <th class="entreprise">Sujet de stage</th>
          <th  class="entreprise">Entreprise</th>
          <th >Etat</th>
          <th>Encadrant</th>
          <th class="consul">Profile</th>
        </tr>
      </thead>   
      <tbody>
         <?php 
            while($data=mysqli_fetch_assoc($resultat)){
                $user1=$data["numapogee"];
                $requette1='SELECT * FROM stage where id_etudiant='.$user1.'';
                $requette2='SELECT * FROM entreprise where id_etudiant='.$user1.'';
                $requette4='SELECT * FROM stage_encadre where id_etudiant='.$user1.'';
                $requette5='SELECT CONCAT(nom," ",prenom) as fullname FROM enseignant where id_enseignant in (SELECT id_enseignant from stage_encadre where id_etudiant='.$user1.')';
                $resultat5=mysqli_query($link,$requette5);
               
                $resultat4=mysqli_query($link,$requette4);
                $resultat1=mysqli_query($link,$requette1);
                $resultat2=mysqli_query($link,$requette2);
                $data2= mysqli_fetch_assoc($resultat2);
                if($data1= mysqli_fetch_assoc($resultat1)){
                $requette3="SELECT technologie FROM technologie WHERE id_etudiant='$user1'";
                $resultat3=mysqli_query($link,$requette3);
        ?>
        <tr>
          <td class="nom"><?php echo $data["nom"]?></td>
          <td class="nom"><?php echo $data["prenom"]?></td>
          <td class="entreprise"><?php if(isset($data1["sujet"])){echo $data1["sujet"] ;} ?></td>
          <td class="entreprise"><?php echo $data2["nom_entreprise"]?></td>
          <td class="status">
          <?php
              if($data4=mysqli_fetch_assoc($resultat4)){
                echo '<span class="status-encadrer">encadrant</span>';
              }else{
                echo '<span class="status-non-encadrer">Non Encadrer</span>';
              }
            ?>
        </td> 
          <td><?php if($data5=mysqli_fetch_assoc($resultat5)) {echo $data5["fullname"];} ?></td>
          <td class="consul">
          <div class="consulter">
                    <form action="etudiantdata.php" method="post">
                        <input type="hidden" name="hiddenuser" value="<?php echo $user1 ?>" >
                        <input type="submit" name="submit" value="Consulter" >
                    </form>
                </div>  
          </td>
        </tr>
        <?php } }?>
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