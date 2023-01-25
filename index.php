<?php 
session_start();
$incorrect=false;
include('connexion.php');
if(isset($_SESSION['user']) || !empty($_SESSION['user'])){
  $reqEt="SELECT numapogee FROM etudiant where numapogee='".$_SESSION['user']."'";
  $resultatE=mysqli_query($link,$reqEt);

  $reqen="SELECT id_enseignant FROM enseignant where id_enseignant='".$_SESSION['user']."'";
  $resultaten=mysqli_query($link,$reqen);
  if($data1=mysqli_fetch_assoc($resultatE)){
    header("location:etudiant/home.php");
  }elseif($data2=mysqli_fetch_assoc($resultaten)){
    header("location:enseignant/home.php");
  }
}else{
if(isset($_POST['submit'])){
    $email=$_POST['emailinst'];
    $password=$_POST['password'];
    $reqEtudiant="SELECT numapogee,nom,prenom,photo FROM etudiant WHERE email='$email' AND password='$password'";
    $resultatEt=mysqli_query($link,$reqEtudiant);

    $reqEnseignant="SELECT id_enseignant,nom,prenom,photo FROM enseignant WHERE address='$email' AND password='$password'";
    $resultatEn=mysqli_query($link,$reqEnseignant);

    if($dataEt=mysqli_fetch_assoc($resultatEt)){
        $_SESSION['user']=$dataEt['numapogee'];
        $_SESSION['fullname']=$dataEt['nom'].' '.$dataEt['prenom'];
        $_SESSION['photo']=$dataEt['photo'];
        if($password=='AZERTY' || $password=="azerty"){
            header("location:etudiant/firstlogin.php");
        }else {
            header("location:etudiant/home.php");
        }
    }elseif($dataEn=mysqli_fetch_assoc($resultatEn)){
        $_SESSION['user']=$dataEn['id_enseignant'];
        $_SESSION['fullname']=$dataEn['nom'].' '.$dataEn['prenom'];
        $_SESSION['photo']=$dataEn['photo'];
        if($password=='AZERTY' || $password=="azerty"){
            header("location:enseignant/firstlogin.php");
        }else {
            header("location:enseignant/home.php");
        }
    }elseif($email=='admin' &&($password=='azerty' || $password=='AZERTY')){
      header("location:administratif/home.php");
    }else{
        $incorrect=true;  
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="etudiant/css/style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="post" class="sign-in-form">
            <h4 class="title">Accéder à la plateforme</h4>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="emailinst" placeholder="Email institutionnel" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Mot de passe" />
            </div>
            <?php if($incorrect){ echo '<div class="erreur"><i class="fas fa-minus-circle"></i>Mot de passe incorrect ! </div>';}?> <br>
            <input type="submit" name="submit" value="Login" class="btn solid" />

          </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>PLATFORME PEDAGOGIQUE DES STAGES PFE</h3>
            <p>
              Ecole nationale des sciences appliquee
            </p>
          </div>
          <img src="etudiant/images/log.svg" class="image" alt="" />
        </div>
      </div>
    </div>
  </body>
</html>
