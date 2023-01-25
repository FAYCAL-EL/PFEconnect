<?php
session_start();
include("../connexion.php");
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <link rel="stylesheet" href="css/listeetudiant.css">
  <title>Liste des étudiants</title>
  <link rel="icon" href="images/icon.jpg"/>

  <style>
      .div  {
     display: none;   
}
  </style>
</head>
  <body id="top">
      <div class="backtotop">
        <a href="#" ><ion-icon name="chevron-up-outline"></ion-icon></a>
      </div>
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
                <li class="list active">
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
                <li class="list">
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
    <h2 class="p">Liste des étudiants</h2>
    <p>En choisissant une option ci-dessous, vous verrez les étudiants encadrés, non encadrés ou qui n'ont pas soumis le rapport</p>
    <div class="buttonselect">
        <select class="outtaHere" > 
            <option value="" selected disabled>Selectionnez votre choix...</option>
            <option  class="selected" value="encadrer" >Etudiant Encadré</option>
            <option  value="nonencadrer">Etudiant Non Encadré</option>
            <option  value="nonraport">Etudiant sans rapport</option>
        </select>
    </div>
    
    <div class="div encadrer">
    <?php
    $requette0="SELECT * FROM enseignant where id_enseignant in (SELECT id_enseignant from stage_encadre) order by nom";
    $resultat0=mysqli_query($link,$requette0);
    while($data0=mysqli_fetch_assoc($resultat0)){
        $enseignant=$data0["id_enseignant"];
        echo '<h5> Encadrant : '.$data0['nom'].' '.$data0["prenom"].'</h5>'
    ?>
      <table>
      <thead>
        <tr>
        <th class="nom">Nom</th>
        <th class="nom">Prenom</th>
        <th class="num">N° Apogee</th>
        <th  class="mail">Email Institutionnel</th>
        <th>sujet de stage</th>
          
        
        </tr>
      </thead>   
      <tbody>
         <?php 
            
            $requette="SELECT * FROM etudiant where numapogee in (select id_etudiant from stage_encadre where id_enseignant=$enseignant)  order by nom";
            $resultat=mysqli_query($link,$requette);
            while($data=mysqli_fetch_assoc($resultat)){ 
                $user1=$data["numapogee"];
                $requette1='SELECT * FROM stage where id_etudiant='.$user1.'';
                $requette4='SELECT * FROM stage_encadre where id_etudiant='.$user1.'';
                $resultat4=mysqli_query($link,$requette4);
                $resultat1=mysqli_query($link,$requette1);
                if($data1= mysqli_fetch_assoc($resultat1)){
        ?>
        <tr>
            <td class="nom"><?php echo $data["nom"]?></td>
            <td class="nom"><?php echo $data["prenom"]?></td>
            <td class="entreprise"><?php echo $data["numapogee"]?></td>
            <td  class="mail"><a href="mailto:<?php echo $data["email"] ?>"><?php echo $data["email"]?></a></td>
            <td class="entreprise"><?php if(isset($data1["sujet"])){echo $data1["sujet"] ;} ?></td>
        </tr>
        <?php } }?>
      </tbody>
    </table>
    <?php }
    
    ?>
    </div>
    <div class="div nonencadrer">
    <h5 style="color:red;">Etudiants sans encadrant</h5>
    <table>
      <thead>
        <tr>
        <th class="nom">Nom</th>
        <th class="nom">Prenom</th>
        <th class="num">N° Apogee</th>
        <th  class="mail">Email Institutionnel</th>
        <th>sujet de stage</th>
          
        
        </tr>
      </thead>   
      <tbody>
         <?php 
            
            $requette="SELECT * FROM etudiant where numapogee not in (select id_etudiant from stage_encadre) order by nom";
            $resultat=mysqli_query($link,$requette);
            while($data=mysqli_fetch_assoc($resultat)){ 
                $user1=$data["numapogee"];
                $requette1='SELECT * FROM stage where id_etudiant='.$user1.'';
                $requette4='SELECT * FROM stage_encadre where id_etudiant='.$user1.'';
                $resultat4=mysqli_query($link,$requette4);
                $resultat1=mysqli_query($link,$requette1);
                if($data1= mysqli_fetch_assoc($resultat1)){
        ?>
        <tr>
            <td class="nom"><?php echo $data["nom"]?></td>
            <td class="nom"><?php echo $data["prenom"]?></td>
            <td class="entreprise"><?php echo $data["numapogee"]?></td>
            <td  class="mail"><a href="mailto:<?php echo $data["email"] ?>"><?php echo $data["email"]?></a></td>
            <td class="entreprise"><?php if(isset($data1["sujet"])){echo $data1["sujet"] ;} ?></td>
        </tr>
        <?php } }?>
      </tbody>
    </table>
    </div>
    <div class="div nonraport">
        <h5 style="color:red;">Etudiants qui n'ont pas déposer le rapportt</h5>
        <table>
        <thead>
            <tr>
                <th class="nom">Nom</th>
                <th class="nom">Prenom</th>
                <th class="num">N° Apogee</th>
                <th  class="mail">Email Institutionnel</th>
                <th>sujet de stage</th>
            </tr>
        </thead>   
        <tbody>
            <?php 
                $requette="SELECT * from etudiant where numapogee NOT in (select id_etudiant from fichier)";
                $resultat=mysqli_query($link,$requette);
                while($data=mysqli_fetch_assoc($resultat)){ 
                    $user1=$data["numapogee"];
                    $requette1='SELECT * FROM stage where id_etudiant='.$user1.'';
                    $requette4='SELECT * FROM stage_encadre where id_etudiant='.$user1.'';
                    $resultat4=mysqli_query($link,$requette4);
                    $resultat1=mysqli_query($link,$requette1);
                    if($data1= mysqli_fetch_assoc($resultat1)){
            ?>
            <tr>
                <td class="nom"><?php echo $data["nom"]?></td>
                <td class="nom"><?php echo $data["prenom"]?></td>
                <td class="entreprise"><?php echo $data["numapogee"]?></td>
                <td  class="mail"><a href="mailto:<?php echo $data["email"] ?>"><?php echo $data["email"]?></a></td>
                <td class="entreprise"><?php if(isset($data1["sujet"])){echo $data1["sujet"] ;} ?></td>
            </tr>
            <?php } }?>
        </tbody>
        </table>
    </div>               
    <div class="optionvalue">

    </div>
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
       <script type="text/javascript">
        window.addEventListener('scroll',function(){
            const header = document.querySelector('.backtotop');
            header.classList.toggle("sticky", window.scrollY > 100);
        });
        </script>
        <script>
            $('.outtaHere').change(function(){
                var selected = $(this).find(':selected');
                $('.div').hide();
            $('.'+selected.val()).show(); 
            });
        </script>
  </body>
  </html>