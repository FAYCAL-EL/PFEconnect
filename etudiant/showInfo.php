<?php 
session_start();
if(isset($_SESSION['user']) || !empty($_SESSION['user'])){

    include('../connexion.php');
$requette1="SELECT * FROM entreprise WHERE id_etudiant='".$_SESSION['user']."'";
$resultat1=mysqli_query($link,$requette1);

$requette2="SELECT * FROM stage WHERE id_etudiant='".$_SESSION['user']."'";
$resultat2=mysqli_query($link,$requette2);
$data2=mysqli_fetch_assoc($resultat2);

$requette3="SELECT technologie FROM technologie WHERE id_etudiant='".$_SESSION['user']."'";
$resultat3=mysqli_query($link,$requette3);

$entreprise_exist=false;

if($data1=mysqli_fetch_assoc($resultat1)){
    $entreprise_exist=true;
    include('editerform.php');    
    include "Documents_stage.php";

}else{
    include('Stage_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/showinfo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <title>informations sur le stage</title>
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
                <li class="list active">
                    <a href="#">
                        <span class="icon"><ion-icon name="trail-sign-outline"></ion-icon></span>
                        <span class="title">informations de stage</span>
                    </a>
                </li>
                <li class="list">
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
                    <a href="test.php#espacenum">
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
            <main>
            
            <div class="intro">
                <h2>informations sur votre stage</h2>

            
            <?php
                if(!$entreprise_exist){
                    
            ?>
              <p>Veuillez  cliquez sur le bouton ci-dessous pour ajouter des informations sur votre stage</p>
              </div>
            <div class="vide buttons" onclick="togglePopup()">
                <a href="#" ><div>Entrer les informations</div></a>
            </div>
            <?php }else{ ?>
                </div>
                <ul class="op">
                <li class="ops">
                    <div class="section-title">
                        <h2 >Entreprise</h2>
                        
                        <div ><img src="images/right.png" class="arrow right" alt=""></div>
                    </div>
                    <div class="section-content">

                        <div class="info">
                            <div>
                                <p>Nom :</p>
                            </div>
                            <div>
                                <p><?php echo $data1['nom_entreprise'] ?></p>
                            </div>
                        </div>

                        <div class="info">
                            <div>
                                <p>Adresse :</p>
                            </div>
                            <div>
                                <p><?php echo $data1['adresse'] ?></p>
                            </div>
                        </div>

                        <div class="info">
                            <div>
                                <p>Télèphone :</p>
                            </div>
                            <div>
                                <p><?php echo $data1['tele'] ?></p>
                            </div>
                        </div>

                        <div class="info">
                            <div>
                                <p>Ville :</p>
                            </div>
                            <div>
                                <p><?php echo $data1['ville'] ?></p>
                            </div>
                        </div>

                        <div class="info">
                            <div>
                                <p>encadrant :</p>
                            </div>
                            <div>
                                <p><?php echo $data1['encadrant'] ?></p>
                            </div>
                        </div>     
                    </div>
                </li>
                <li class="ops activ">
                    <div class="section-title">
                        <h2>Sujet de stage</h2>
                        <div><img src="images/left.png" class="arrow left"></div>
                    </div>
                    <div class="section-content">
                        <div class="info">
                            <div>
                                <p>Intitulé de sujet :</p>
                            </div>
                            <div>
                                <p><?php echo $data2['sujet'] ?></p>
                            </div>
                        </div>

                        <div class="info">
                            <div>
                                <p>Description :</p>
                            </div>
                            <div>
                                <p class="c"><?php echo $data2['description'] ?></p>
                            </div>
                        </div>
                        <?php
                        if(isset($data2['binome']) && $data2['binome']!=NULL ){
                            ?>
                            <div class="info">
                            <div>
                                <p>Nom et prénom de Binome :</p>
                                </div>
                                <div>
                                    <p><?php echo $data2['binome'] ?></p>
                                </div>
                            </div>
                        <?php
                        }
                         ?>
                        
                       
                        <div class="info">
                            <div>
                                <p>Technologies utilisés :</p>
                            </div>
                            <div>
                                <?php 
                                    while ($data3=mysqli_fetch_assoc($resultat3)) {
                                        echo '<p>'.$data3['technologie'].'</p>' ;
                                    }
                                ?>
                                
                            </div>
                        </div> 
                    </div>
                </li>
            </ul>
                
                <div class="buttons">
                    <div onclick="togglePopup1()">
                        <a href="#" ><div>Editer les informations</div></a>
                    </div>
                    <div onclick="togglePopup2()">
                        <a href="#"><div>Déposer les documents</div></a>
                    <div>
                </div>
                

            
            
        </main>

        <?php }?>
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
        const icon = document.querySelector('.icon');
        const search = document.querySelector('.profile');
        icon.onclick = function(){
            search.classList.toggle('active')
        }

        var section = $('.ops');

        function toggleAccordion() {
        section.removeClass('activ');
        $(this).addClass('activ');
        }

        section.on('click', toggleAccordion);


    </script>
    <script type="text/javascript">
            function togglePopup(){
            document.getElementById("popup-1").classList.toggle("active");
            }
    </script>
    <script type="text/javascript">
            function togglePopup1(){
            document.getElementById("popup-2").classList.toggle("active1");
            }
    </script>
    <script type="text/javascript">
        function togglePopup2(){
            document.getElementById("popup-3").classList.toggle("active2");
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
    header("location:../index.php");
}
?>