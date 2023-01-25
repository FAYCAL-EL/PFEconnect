<?php session_start() ;
    include('../connexion.php');
    if(isset($_POST["hiddenuser"])){
    $_SESSION['etudiantEncadree']=$_POST["hiddenuser"];
    }
    $etudiant=$_SESSION['etudiantEncadree'];
    $user=$_SESSION['user'];
    $reqet="SELECT * from etudiant where numapogee=$etudiant";
    $reset=mysqli_query($link,$reqet);
    $dataet=mysqli_fetch_assoc($reset);

    $reqtq="SELECT * from technologie where id_etudiant=$etudiant";
    $restq=mysqli_query($link,$reqtq);
    

    $reqen="SELECT * from entreprise where id_etudiant=$etudiant";
    $resen=mysqli_query($link,$reqen);
    $dataen=mysqli_fetch_assoc($resen);

    $reqs="SELECT * from stage where id_etudiant=$etudiant";
    $ress=mysqli_query($link,$reqs);
    $datas=mysqli_fetch_assoc($ress);

    
    if(isset($_POST['encadrer'])){
        $encader="INSERT INTO stage_encadre(id_etudiant,id_enseignant) VALUES('$etudiant','$user')";
        $result=mysqli_query($link,$encader);
        header("location:mesetudiant.php");
       
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $dataet['nom'].' '.$dataet['prenom']?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/etdata.css">
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
                    <a href="etud.php">
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
    <div class="banner">
        <div class="banner1">
            <div class="photodeprofile">
            <img src="../etudiant/images/photo_user/<?php echo $dataet["photo"];?>" alt="photo de l'etudiant">
            </div>
            <div class="description">
                <h3><?php echo $dataet['nom'].' '.$dataet['prenom']; ;?></h3>
                <p>Elève ingénieure à l'Ecole Nationale des Sciences Appliquées - KENITRA</p>
            </div>
        </div>
        <div class="banner2">
          <h2>Information sur l'entreprise</h2>

           <div class="info">
                <div><p>Nom :</p></div>
                <div>
                    <p><?php echo $dataen['nom_entreprise'] ;?></p>
                </div>
            </div>

            <div class="info">
                <div><p>Adresse :</p></div>
                <div>
                    <p><?php echo $dataen['adresse'] ;?></p>
                </div>
            </div>

            <div class="info">
                <div>
                    <p>Télèphone :</p>
                </div>
                <div>
                    <p><?php echo $dataen['tele'] ?></p>
                </div>
            </div>

            <div class="info">
                <div>
                    <p>Ville :</p>
                </div>
                <div>
                    <p><?php echo $dataen['ville'] ?></p>
                </div>
            </div>

            <div class="info">
                <div>
                    <p>encadrant :</p>
                </div>
                <div>
                    <p><?php echo $dataen['encadrant'] ?></p>
                </div>
            </div>  
            
            <h2>Information sur le stage</h2>

            <div class="info">
                <div>
                    <p>Intitulé de sujet :</p>
                </div>
                <div>
                    <p><?php echo $datas['sujet'] ?></p>
                </div>
            </div>

            <div class="info">
                <div>
                    <p>Description :</p>
                </div>
                <div>
                    <p><?php echo $datas['description'] ?></p>
                </div>
            </div>

            <div class="info">
                <div>
                    <p>Technologies utilisés :</p>
                </div>
                <div>
                    <?php 
                        while ($datatq=mysqli_fetch_assoc($restq)) {
                            echo '<p>'.$datatq['technologie'].'</p>' ;
                        }
                    ?>
                    
                </div>
            </div> 
                        
            <div class="buttons">
                <?php 
                     $requette4='SELECT * FROM stage_encadre where id_etudiant='.$etudiant.'';
                     $resultat4=mysqli_query($link,$requette4);

                if(!$data4=mysqli_fetch_assoc($resultat4)){?>
                <form method="post" action="">
                    <input type="submit" formmethod="post" name="encadrer" value="Encadrer">
                </form>
                <?php }?>
                <a href="javascript:history.go(-1)">Retour</a>
              
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        const icon = document.querySelector('.icon');
        const search = document.querySelector('.profile');
        icon.onclick = function(){
            search.classList.toggle('active')
        }
    </script>
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
<?php

    mysqli_close($link); 
?>
