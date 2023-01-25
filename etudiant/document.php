<?php session_start();
    include('../connexion.php');
    if(isset($_SESSION['user']) || !empty($_SESSION['user'])){
    $user=$_SESSION['user'];
    $requette1="SELECT * FROM fichier WHERE id_etudiant= '$user'";
    $resultat1=mysqli_query($link,$requette1);
    if($data1=mysqli_fetch_assoc($resultat1)){
        $rapv1=$data1["rapport_initial"];
        $rapv2=$data1["rapport_final"];
        $PRES=$data1["presentation"];
        $ATTES=$data1["attestation"];
        $FICHE=$data1["fiche_evaluation"];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document de stage</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/document.css">
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
                    <a href="showinfo.php">
                        <span class="icon"><ion-icon name="trail-sign-outline"></ion-icon></span>
                        <span class="title">informations de stage</span>
                    </a>
                </li>
                <li class="list active">
                    <a href="document.php">
                        <span class="icon"><ion-icon name="ribbon-outline"></ion-icon></span>
                        <span class="title">documents de stage</span>   
                    </a>
                </li>
                <li class="list">
                    <a href="profile.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">profil</span>
                    </a>
                </li>
                <li class="list">
                    <a href="home.php   #espacenum">
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
        <div class="intro">
            <h2>Document de stage</h2>
            <p >  Voici  les documents  de votre stage de projet de fin d'étude que vous pouvez consulter si vous les avez déposer .</p>
 
        </div>
        
        <div class="conta">
       
            <div class="cont">
                <div class="image"><ion-icon name="book-outline"></ion-icon></div>
                <div class="doctitle">
                    <h2>Rapport de stage - 1ère version</h2>
                    <p>En cliquant sur le bouton ci-dessous vous pouvez visualiser la première version de votre rapport de stage de projet de fin d'étude.</p>
                    <?php if(isset($rapv1) && $rapv1!=NULL){ ?>
                        <a href="<?php echo 'document/'.$user.'/'.$rapv1 ?>" target="_blank"><button>Consulter</button></a>
                    <?php }else{ ?>
                        <a href="<?php echo 'document/'.$user.'/'.$rapv1 ?>" target="_blank"><button class="desactiver" disabled>Consulter</button></a>
                    <?php } ?>
                </div>
            </div>
            <div class="cont">
                <div class="image"><ion-icon name="bookmarks-outline"></ion-icon></div>
                <div class="doctitle">
                    <h2>Rapport de stage - dernière version</h2>
                    <p>LEn cliquant sur le bouton ci-dessous vous pouvez visualiser la dernière version de votre rapport de stage de projet de fin d'étude.</p>
                    <?php if(isset($rapv2) && $rapv2 !='NULL'){ ?>
                        <a href="<?php echo 'document/'.$user.'/'.$rapv2 ?>" target="_blank"><button>Consulter</button></a>
                    <?php }else{ ?>
                        <a href="<?php echo 'document/'.$user.'/'.$rapv2 ?>" target="_blank"><button class="desactiver" disabled>Consulter</button></a>
                    <?php } ?>
                </div>
            </div>

        
            <div class="cont">
                <div class="image"><ion-icon name="laptop-outline"></ion-icon></div>
                <div class="doctitle">
                    <h2>Présentation</h2>
                    <p>En cliquant sur le bouton ci-dessous vous pouvez visualiser la Présentation de votre stage de projet de fin d'étude.</p>
                    <?php if(isset($PRES) && $PRES !='NULL'){ ?>
                        <a href="<?php echo 'document/'.$user.'/'.$PRES ?>" target="_blank"><button>Consulter</button></a>
                    <?php }else{ ?>
                        <a href="<?php echo 'document/'.$user.'/'.$PRES ?>" target="_blank"><button class="desactiver" disabled>Consulter</button></a>
                    <?php } ?>

                </div>
            </div>
            <div class="cont">
                <div class="image"><ion-icon name="bookmark-outline"></ion-icon></div>
                <div class="doctitle">
                    <h2>Attestation de stage</h2>
                    <p>En cliquant sur le bouton ci-dessous vous pouvez visualiser l'attestation de votre stage de projet de fin d'étude.</p>
                    <?php if(isset($ATTES) && $ATTES !='NULL'){ ?>
                        <a href="<?php echo 'document/'.$user.'/'.$ATTES ?>" target="_blank"><button>Consulter</button></a>
                    <?php }else{ ?>
                        <a href="<?php echo 'document/'.$user.'/'.$ATTES ?>" target="_blank"><button class="desactiver" disabled>Consulter</button></a>
                    <?php } ?>
                </div>
            </div>

     
            <div class="cont">
                <div class="image"><ion-icon name="document-outline"></ion-icon></div>
                <div class="doctitle">
                    <h2>fiche d'évaluation</h2>
                    <p>En cliquant sur le bouton ci-dessous vous pouvez visualiser votre fiche d'évaluation.</p>
                    <?php if(isset($FICHE) && $FICHE !='NULL'){ ?>
                        <a href="<?php echo 'document/'.$user.'/'.$FICHE ?>" target="_blank"><button>Consulter</button></a>
                    <?php }else{ ?>
                        <a href="<?php echo 'document/'.$user.'/'.$FICHE ?>" target="_blank"><button class="desactiver" disabled>Consulter</button></a>
                    <?php } ?>
                </div>
            </div>
 
    </div>
    </div>
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
        const icon = document.querySelector('.icon');
        const search = document.querySelector('.profile');
        icon.onclick = function(){
            search.classList.toggle('active')
        }
    </script>
    <script type="text/javascript">
        window.addEventListener('scroll',function(){
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 10);
        });
    </script>
</body>
</html>

<?php 
}else{
    header("location:loginpage.php");
}
?>