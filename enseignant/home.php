<?php session_start();
if(isset($_SESSION['user']) || !empty($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="icon" href="images/icon.jpg"/>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <title>Home</title>
    
</head>
<body>
    <header>
        <div class="navigation">
            <ul>
                <div class="logoensak"><a href="home.php"><img src="images/ensaklogo.png" alt="logo de l'ensak" id="logoensak"></a></div>
                <li class="list active">
                    <a href="#home">
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
                    <a href="#espacenum">
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
        <div class="banner" id="home">
            <div class="containaire" >
                <div class="descetcomm">
                    <h1>Bonjour <?php echo $_SESSION['fullname'];?></h1>
                    <p >ici ,vous pouvez visualiser les listes des stages du PFE effectuée par les etudiants de l'ENSA kenitra </p>
                    <a href="listeetud.php" class="button">commencer</a>
                </div>
                <div class="imgbanner">
                    <img src="images/Asset 1.png" alt="image de banner" id="imgbanner">
                </div>
            </div>
            <div class="espacenum" id="espacenum">
                <h3>consulter les espaces numérique</h3>
                <div class="slider owl-carousel">
                    <div class="card">
                        <div class="img"><img src="images/DSC_6386-scaled-1620x1080.jpg" alt=""></div>
                        <div class="content">
                            <div class="title">ENT</div>
                            
                            <div class="text"><p>La plateforme numérique  qui vous permettra de bénéficier de services pédagogiques et administratifs.</p></div>
                            <div class="btn"><a href="http://ent.uit.ac.ma/ent/"><button> Consulter </button></a></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img"><img src="images/ensak1.jpg" alt=""></div>
                        <div class="content">
                            <div class="title">ENSA kénitra</div>
                            
                            <div class="text"><p>Accéder au site officiel de L'Ecole Nationale des Sciences Appliquées de Kénitra (ENSAK) de compus universitaire Ibn tofail.</p></div>
                            <div class="btn"><a href="https://ensa.uit.ac.ma/"><button> Consulter </button></a></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img"><img src="images/10-1024x576.jpg " alt=""></div>
                        <div class="content">
                            <div class="title">Espace de recherche</div>
                            
                            <div class="text"><p>Accéder au site officiel du Centre National pour la Recherche Scientifique et Technique (CNRST).</p></div>
                            <div class="btn"><a href="https://www.cnrst.ma/index.php/fr/"><button> Consulter </button></a></div>
                        </div>
                    </div>
                    
                </div>
                
                    
                    
            </div>
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
    
</body>
</html>
<?php 
}else{
    header("location:../index.php");
}
?>