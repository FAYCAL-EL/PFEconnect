<?php
session_start();
include('../connexion.php');
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="css/mesetud.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <title>étudiants encadrés</title>
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
                <li class="list">
                    <a href="listeetud.php">
                        <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                        <span class="title">Liste des stages</span>   
                    </a>
                </li>
                <li class="list  active">
                    <a href="#">
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
    <h2 class="p">Etudiants encadrés</h2>
    <p> Vous trouverez ci-dessous la liste des étudiants que vous encadrez</p>
      <table>
      <thead>
        <tr>
          <th class="nom">Nom</th>
          <th class="nom">Prenom</th>
          <th class="entreprise">Sujet de stage</th>
          <th  class="entreprise">Entreprise</th>
          <th class="note">Note</th>
          <th class="validation">Validation</th>
          <th class="consul">Profile</th>
        </tr>
      </thead>   
      <tbody>
         <?php 
            // $requette0='SELECT * FROM enseignant where id_enseignant='.$_SESSION["user"].'';
            // $resultat0=ysqli_query($link,$requette0);
            // $data=mysqli_fetch_assoc($resultat0);
            $requette='SELECT * FROM etudiant where numapogee in (SELECT id_etudiant from stage_encadre where id_enseignant='.$_SESSION['user'].') order by nom';
            $resultat=mysqli_query($link,$requette);
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
                    $data4=mysqli_fetch_assoc($resultat4);
        ?>
        <tr>
          <td class="nom"><?php echo $data["nom"]?></td>
          <td class="nom"><?php echo $data["prenom"]?></td>
          <td class="entreprise"><?php if(isset($data1["sujet"])){echo $data1["sujet"] ;} ?></td>
          <td class="entreprise"><?php echo $data2["nom_entreprise"]?></td>
          <td class="note"><?php if($data4["note"]){
              echo $data4["note"];
          }else{
              echo "-";
          }
          ?>
          </td>
          <td class="validation"><?php if($data4["validation"]==0){
                echo '<span class="nonvalider">Non valider</span>';
            }else{
              echo '<span class="valider">Valider</span>';
          }
          ?>
          </td>
          <td class="consul">
          <div class="consulter">
                    <form action="mesetudiantdata.php" method="post">
                        <input type="hidden" name="hiddenuser" value="<?php echo $user1 ?>" >
                        <input type="submit" name="submit" value="Consulter" >
                    </form>
                </div>  
          </td>
        </tr>
        <?php   }
                }?>
      </tbody>
    </table>
    </section>
 
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