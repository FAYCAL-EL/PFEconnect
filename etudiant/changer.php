<?php
    include('../connexion.php');
    if(isset($_POST["submit"]))
{
        $user=$_SESSION['user'];
        if(isset($_FILES['photo1']) && $_FILES['photo1']['error']==0)
    {
    $temp_name=$_FILES['photo1']['tmp_name'];
    if(!is_uploaded_file($temp_name))
    {
    exit("le fichier est untrouvable");
    }
    if ($_FILES['photo1']['size'] >= 100000000){
      exit("Erreur, le fichier est volumineux");
    }
    $infosfichier = pathinfo($_FILES['photo1']['name']);
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
    $data1=mysqli_fetch_assoc($resul);
    $_SESSION['photo']=$data1['photo'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
  <link rel="stylesheet" href="css/chager.css">
  <link rel="icon" href="images/icon.jpg"/>

</head>
<body>
  <div class="popup3" id="popup-3">
    <div class="overlay"> </div>
        <div class="content">
          <div class="headeroflist">
            <p>Modifier la photo de profile</p>
            <div class="x"><div class="close-btn" onclick="togglePopup2()"></div></div>
          </div>
          
            <form method="post" enctype="multipart/form-data">
                <div class="info">
                    <img src="images/photo_user/<?php echo $_SESSION['photo'];?>" alt="pdp" id="output" >
                    <input type="file" name="photo1" class="myfile" onchange="loadFile(event)">
                </div>
                
                <input type="submit" name="submit" value="Sauvegarder">
            </form>
          
            
        </div>
</div>
<script type="text/javascript">
  function togglePopup2(){
  document.getElementById("popup-3").classList.toggle("active2");
  }
</script>
<script>
    var loadFile = function (event) {
        var image = document.getElementById("output");
        image.src = URL.createObjectURL(event.target.files[0]);
      };      
</script>
</body>
</html>