<?php session_start() ;
    include('../connexion.php');
    if(isset($_SESSION['user']) || !empty($_SESSION['user'])){
        include "changer.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="icon" href="images/icon.jpg" />
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
                <li class="list">
                    <a href="document.php">
                        <span class="icon"><ion-icon name="ribbon-outline"></ion-icon></span>
                        <span class="title">documents de stage</span>   
                    </a>
                </li>
                <li class="list  active">
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
       <div class="banner">
        <div class="banner1">
            <div class="photodeprofile" onclick="togglePopup2()">
                <a href="#"><img src="images/photo_user/<?php echo $_SESSION['photo'];?>" alt="profile" width="30px" height="30px"></a>
                <div class="overlay1">
                    <div class="text"><i class="fas fa-camera"></i><br>modifier la photo de profile</div>
                </div>
            </div>
            <div class="description">
                <h3><?php echo $_SESSION["fullname"] ;?></h3>
                <p>Elève ingénieure à l'Ecole Nationale des Sciences Appliquées - KENITRA</p>
            </div>
        </div>
        <div class="banner2">
            <?php
            $user=$_SESSION["user"];
            $requette1="SELECT email,diplôme FROM etudiant WHERE numapogee='$user'";
            $resultat=mysqli_query($link,$requette1);
            $data=mysqli_fetch_assoc($resultat);
            ?>
            <h2>Profil</h2>
            <div class="row100">
                <div class="col icon">
                    <div class="inputBox">
                        <input type="text" name="name" class="name" value="<?php echo $_SESSION["fullname"] ;?>" readonly>
                        <span class="ltext">Nom et prenom</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row100">
                <div class="col icon">
                    <div class="inputBox">
                        <input type="text" name="name" class="name" value="<?php echo $data["email"] ;?>" readonly>
                        <span class="ltext">Email institusionnel</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row100">
                <div class="col icon">
                    <div class="inputBox">
                        <input type="text" name="name" class="name" value="<?php echo $_SESSION["user"] ;?>" readonly>
                        <span class="ltext">N° Apogee</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row100">
                <div class="col icon">
                    <div class="inputBox">
                        <input type="text" name="name" class="name" value="<?php echo $data["diplôme"] ;?>" readonly>
                        <span class="ltext">Diplôme</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="modifermdp"><a href="mdp.php">modifier votre mot de passe ?</a></div>
        </div>
    </div> 
    </section>
    
    <script type="text/javascript">
        function togglePopup2(){
        document.getElementById("popup-3").classList.toggle("active2");
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
}else{
    header("location:index.php");
}

?>
<?php mysqli_close($link); ?>
