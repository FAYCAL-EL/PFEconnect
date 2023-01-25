<?php session_start() ;
    include('../connexion.php');
    if(isset($_POST["subedit"]))
    {
        $user=$_SESSION['user'];
        if(isset($_FILES['photo']) && $_FILES['photo']['error']==0)
	{
		$temp_name=$_FILES['photo']['tmp_name'];
		if(!is_uploaded_file($temp_name))
		{
		exit("le fichier est untrouvable");
		}
		if ($_FILES['photo']['size'] >= 100000000){
			exit("Erreur, le fichier est volumineux");
		}
		$infosfichier = pathinfo($_FILES['photo']['name']);
		$extension_upload = $infosfichier['extension'];
		$extension_upload = strtolower($extension_upload);
		$extensions_autorisees = array('png','jpeg','jpg','jfif');
		if (!in_array($extension_upload, $extensions_autorisees))
		{
		exit("Erreur, Veuillez inserer une photo de profil svp (extensions autorisées: png)");
		}
		$nom_photo=$user.".".$extension_upload;
		$dossier='images/photo_user/'.$nom_photo;
		if(!move_uploaded_file($temp_name,$dossier)){
		exit("Problem dans le telechargement de l'image, Ressayez");
		}
		$ph_name=$nom_photo;
	}
	else{
		$ph_name="default_photo.jpg";
	}
	$requette="UPDATE etudiant SET photo='$ph_name' WHERE numapogee='$user' ";
	$resultat=mysqli_query($link,$requette);
    $req="SELECT photo FROM etudiant WHERE numapogee='$user'";
    $resul=mysqli_query($link,$req);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/firstlogin.css">
    <title>First Login</title>
    <link rel="icon" href="images/icon.jpg"/>
</head>
<body>
    <div class="banner">
        <div class="container">
            <div class="logoensak"><img src="images/ensaklogo.png" alt="logo de l'ensak" id="logoensak"></div>
            <h3>Bienvenue <?php echo $_SESSION["fullname"] ;?></h3>
            <p>Veuillez changer votre mots de passe et votre photo de profile </p>
            <form  method="post" enctype="multipart/form-data">
                <div class="row100">
                    <div class="col icon">
                        <div class="inputBox">
                            <input type="password" name="password" class="password" required>
                            <span class="ltext">Mot de passe</span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
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
                
                <div class="wrapper">
                    <div class="header">Ajouter une photo de profile</div>
                    <div class="form">
                        <label>
                            <input type="file" name="photo">
                        </label>
                    </div>
               
                <?php
                if(isset($_POST["subedit"])){
                    if($datap=mysqli_fetch_assoc($resul)){
                        // $_SESSION['index_rempli']=1;
                        $_SESSION['photo']=$datap['photo'];                  
                        if($_POST["password"]==$_POST["comfirmepassword"]){
                        if($_POST["password"]=="AZERTY" || $_POST["password"]=="azerty"){
                            echo '<div class="erreur"><i class="fas fa-minus-circle"></i>Entrer un mot de passe différent de "AZERTY" </div>';
                            }else{
                                $mdp=$_POST["password"];
                                $requette="UPDATE etudiant SET password='$mdp' WHERE numapogee='$user'";
                                $result=mysqli_query($link,$requette);
                                header("location:home.php");
                            }
                                                            
                        }else{
                            echo '<div class="erreur"><i class="fas fa-minus-circle"></i>Mot de passe incorrect ! </div>';
                        }
                        }
                }
                
                ?>
                 </div>
                <input type="submit" name="subedit">
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