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
    
    if(isset($_POST['valider'])){
        $note=$_POST['note'];
        $valider="UPDATE stage_encadre SET note='$note',validation='1' where id_etudiant='$etudiant' and id_enseignant='$user'";
        $result=mysqli_query($link,$valider);
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
    <link rel="icon" href="images/icon.jpg"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/etdata.css">
</head>
<body>
<header>
        <div class="navigation">
            <ul>
                <div class="logoensak"><a href="home.php"><img src="images/ensaklogo.png" alt="logo de l'ensak" id="logoensak"></a></div>
                <li class="list active">
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
            <h2>Les document de stage</h2>
            <div class="document">
                <?php
                 $user=$_SESSION['user'];
                 $requette1="SELECT * FROM fichier WHERE id_etudiant= '$etudiant'";
                 $resultat1=mysqli_query($link,$requette1);
                 if($data1=mysqli_fetch_assoc($resultat1)){
                     $rapv1=$data1["rapport_initial"];
                     $rapv2=$data1["rapport_final"];
                     $PRES=$data1["presentation"];
                     $ATTES=$data1["attestation"];
                     $FICHE=$data1["fiche_evaluation"];
                 
                 
                ?>
                <table>
                    <tr>
                        <th>Fichier de stage</th>
                        <th>Consulter</th>
                    </tr>
                    <?php if(isset($rapv1) && $rapv1!='NULL'){?>
                    <tr>
                        <td>Rapport de stage - 1er version : </td>
                        <td><?php echo "<a href=../etudiant/document/".$etudiant."/".$rapv1." target='_blank'>Consulter</a>" ?></td>
                    </tr>
                    <?php }?>
                    <?php if(isset($rapv2) && $rapv2!='NULL'){?>
                    <tr>
                        <td>Rapport de stage - 2er version : </td>
                        <td><?php echo "<a href=../etudiant/document/".$etudiant."/".$rapv2." target='_blank'>Consulter</a>" ?></td>
                    </tr>
                    <?php }?>
                    <?php if(isset($PRES) && $PRES!='NULL'){?>
                    <tr>
                        <td>Présentation : </td>
                        <td><?php echo "<a href=../etudiant/document/".$etudiant."/".$PRES." target='_blank'>Consulter</a>" ?></td>
                    </tr>
                    <?php }?>
                    <?php if(isset($ATTES) && $ATTES!='NULL'){?>

                    <tr>
                        <td>Attestation de stage : </td>
                        <td><?php echo "<a href=../etudiant/document/".$etudiant."/".$ATTES." target='_blank'>Consulter</a>" ?></td>
                    </tr>
                    <?php }?>
                    <?php if(isset($FICHE) && $FICHE!='NULL'){?>
                    <tr>
                        <td>fiche d’évaluation : </td>
                        <td><?php echo "<a href=../etudiant/document/".$etudiant."/".$FICHE." target='_blank'>Consulter</a>" ?></td>
                    </tr>
                    <?php }?>
                </table>
               <?php
               }else{
                   echo "<p>aucun document n'a été déposé</p>";
               }
               ?>
            </div>
            <h2>Votre décision finale</h2>
            <form action="" method="post">
            <div class="row100">
                    <div class="col">
                    <div class="inputBox">
                        <?php
                            $notereq="SELECT note from stage_encadre where id_etudiant=$etudiant";
                            $noteres=mysqli_query($link,$notereq);
                            
                        ?>
                        <input type="number"  name="note" value="<?php if($data=mysqli_fetch_assoc($noteres)){if($data["note"] != 0){echo $data["note"];}} ?>" required>
                        <span class="ltext"><p>La note finale</p></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="buttons">
                <input type="submit"  name="valider" value="Valider">
            </div>
            </div>

            
            
                      
            </form>
        

            <div class="buttons">
                <a href="javascript:history.go(-1)">Retour</a>
          
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
