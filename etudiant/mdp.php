<?php session_start() ;
    include('../connexion.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changer le mot de passe</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/firstlogin.css">
    <link rel="icon" href="images/icon.jpg"/>
</head>
<body>
    <div class="banner">
        <div class="container">
            <div class="logoensak"><img src="images/ensaklogo.png" alt="logo de l'ensak" id="logoensak"></div>
            <h3>Bienvenue <?php echo $_SESSION["fullname"] ;?></h3>
            <p>Veuillez changer votre mots de passe et votre photo de profile </p>
            
            <form  method="post" enctype="multipart/form-data">
                    <label for="password">
                        <div class="row100">
                            <div class="col icon">
                                <div class="inputBox">
                                    <input type="password" name="ancienpassword" class="password1" required>
                                    <span class="ltext">Ancien mot de passe</span>
                                    <span class="line"></span>
                                </div>
                            </div>
                        </div>
                    </label>
                    <label for="password">
                    <div class="row100">
                        <div class="col icon">
                            <div class="inputBox">
                                <input type="password" name="newpassword" class="password" required>
                                <span class="ltext">Nouveau Mot de passe</span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                    </label>
                    <label for="password">
                        <div class="row100">
                            <div class="col icon">
                                <div class="inputBox">
                                    <input type="password" name="comfirmepassword" class="password1" required>
                                    <span class="ltext">Confirmer votre mot de passe</span>
                                    <span class="line"></span>
                                </div>
                            </div>
                        </div>
                    </label>
                    <?php
                    if(isset($_POST["subedit1"])){
                        $user=$_SESSION['user'];
                        $requette="SELECT `password` from `etudiant` WHERE numapogee='$user'";
                        $resultat=mysqli_query($link,$requette);
                        $data11=mysqli_fetch_assoc($resultat);
                        $ancien=$_POST["ancienpassword"];
                        $nouveau=$_POST["newpassword"];
                        $compass=$_POST["comfirmepassword"];
                        if($ancien==$data11["password"]){
                            if($nouveau==$compass){
                                if($nouveau=="AZERTY" || $nouveau=="azerty"){
                                    echo '<div class="erreur"><i class="fas fa-minus-circle"></i>Entrer un mot de passe différent de "AZERTY" </div>';
                                }
                                else{
                                    if($nouveau!=$ancien){
                                        $requette="UPDATE etudiant SET password='$nouveau' WHERE numapogee='$user'";
                                        $result=mysqli_query($link,$requette);
                                        header("location:profile.php");
                                    }else{
                                        echo '<div class="erreur"><i class="fas fa-minus-circle"></i>Veuiller enter un mot de passe different de l\'ancien!</div>';

                                    }
                                    
                                }
                                                                    
                            }
                            else{
                                    echo '<div class="erreur"><i class="fas fa-minus-circle"></i>Veuiller enter un nouveau mot de passe!</div>';
                            }
                        }else{
                            echo '<div class="erreur"><i class="fas fa-minus-circle"></i>l\'ancien mot de passe et incorrect!</div>';
                        }
                    }
                        
                    ?>
                    <input type="submit" name="subedit1">
            </form>
        </div>
    </div>
    <script type="text/javascript">
        const icon = document.querySelector('.icon');
        const search = document.querySelector('.profile');
        icon.onclick = function(){
            search.classList.toggle('active')
        }
    </script>
   
</body>

</html>

<?php mysqli_close($link); ?>