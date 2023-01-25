<?php
    include('../connexion.php');
    $user=$_SESSION['user'];
  $requettee="SELECT * from fichier where id_etudiant='$user'";
  $resultate=mysqli_query($link,$requettee);
  $data=mysqli_fetch_assoc($resultate);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/Documents_stage.css">
  <link rel="icon" href="images/icon.jpg"/>
</head>
<body>
  <div class="popup3" id="popup-3">
    <div class="overlay"> </div>
        <div class="content">
          <div class="headeroflist">
            <p>Documents du stage</p>
            <div class="x"><div class="close-btn" onclick="togglePopup2()"></div></div>
          </div>
            <form method="post" enctype="multipart/form-data">
              <div class="formulaire">
              <label for="entreprisename">
                <span class="nominput">Rapport 1er version</span>
                <input type="file" name="rap1" id="entreprisename" class="input" multiple>
              </label>
              <label for="addressename">
                <span class="nominput">Rapport 2ème version</span>
                <input type="file" name="rap2" id="addressename" class="input" value="hi" multiple>
              </label>
              <label for="numtele">
                <span class="nominput">Présentation</span>
                <input type="file" name="pres" id="numtele" class="input" multiple>
              </label>
              <label for="villeentre">
                <span class="nominput">Attestation de stage</span>
                <input type="file" name="attes" id="villeentre" class="input" multiple>
              </label>  
              <label for="encadrant">
                <span class="nominput">Fiche d'évaluation</span>
                <input type="file" name="fiche" id="encadrant" class="input" multiple>
              </label>
            </div>
            <input type="submit" name="submit2">
            </form>
        </div>
      <?php
        $dir="document/$user";
        if( is_dir($dir) === false )
        {
            mkdir($dir);
        }
        if(isset($_POST["submit2"])){
          if(isset($_FILES["rap1"]) and $_FILES['rap1']['error']==0){
            $errors= array();
            $file_name = $_FILES['rap1']['name'];
            $file_size =$_FILES['rap1']['size'];
            $file_tmp =$_FILES['rap1']['tmp_name'];
            $file_type=$_FILES['rap1']['type'];
            $infosfichier1 = pathinfo($_FILES['rap1']['name']);
            $extension_upload = $infosfichier1['extension'];
            $extension_upload = strtolower($extension_upload);
            $rapportv1=$user."_rapportV1.".$extension_upload;
            $document=$dir."/".$rapportv1;
            move_uploaded_file($file_tmp,$document);
            
            if(!empty($data["rapport_initial"]) || isset($data["rapport_initial"])){
              $reqdocv1="UPDATE fichier set rapport_initial='$rapportv1' where id_etudiant= '$user'";
              $resv1=mysqli_query($link,$reqdocv1);
            }else{
              
            $reqdoc="INSERT INTO fichier(rapport_initial,rapport_final,presentation,attestation,fiche_evaluation,id_etudiant) values ('$rapportv1','NULL','NULL','NULL','NULL',$user)";
            $resv1=mysqli_query($link,$reqdoc);
            }
            
          }
          if(isset($_FILES["rap2"]) and $_FILES['rap2']['error']==0){
            $errors= array();
            $file_name = $_FILES['rap2']['name'];
            $file_size =$_FILES['rap2']['size'];
            $file_tmp =$_FILES['rap2']['tmp_name'];
            $file_type=$_FILES['rap2']['type'];
            $infosfichier2 = pathinfo($_FILES['rap2']['name']);
            $extension_upload = $infosfichier2['extension'];
            $extension_upload = strtolower($extension_upload);
            $rapportv2= $user."_rapportV2.".$extension_upload;
            $document=$dir."/".$rapportv2;
            move_uploaded_file($file_tmp,$document);
            $reqdocv2="UPDATE fichier set rapport_final='$rapportv2' where id_etudiant= '$user'";
            $resv2=mysqli_query($link,$reqdocv2);
          }
          if(isset($_FILES["pres"]) and $_FILES['pres']['error']==0){
            $errors= array();
            $file_name = $_FILES['pres']['name'];
            $file_size =$_FILES['pres']['size'];
            $file_tmp =$_FILES['pres']['tmp_name'];
            $file_type=$_FILES['pres']['type'];
            $infosfichier3 = pathinfo($_FILES['pres']['name']);
            $extension_upload = $infosfichier3['extension'];
            $extension_upload = strtolower($extension_upload);
            $presentation= $user."_presentation.".$extension_upload;
            $document=$dir."/".$presentation;
            move_uploaded_file($file_tmp,$document);
            $reqdocpresentation="UPDATE fichier set presentation='$presentation' where id_etudiant= '$user'";
            $resv2=mysqli_query($link,$reqdocpresentation);
          }
          if(isset($_FILES["attes"]) and $_FILES['attes']['error']==0){
            $errors= array();
            $file_name = $_FILES['attes']['name'];
            $file_size =$_FILES['attes']['size'];
            $file_tmp =$_FILES['attes']['tmp_name'];
            $file_type=$_FILES['attes']['type'];
            $infosfichier4 = pathinfo($_FILES['attes']['name']);
            $extension_upload = $infosfichier4['extension'];
            $extension_upload = strtolower($extension_upload);
            $attestation= $user."_attestation.".$extension_upload;
            $document=$dir."/".$attestation;
            move_uploaded_file($file_tmp,$document);
            $reqdocattestation="UPDATE fichier set attestation='$attestation' where id_etudiant= '$user'";
            $resattes=mysqli_query($link,$reqdocattestation);
          }
          if(isset($_FILES["fiche"]) and $_FILES['fiche']['error']==0){
            $errors= array();
            $file_name = $_FILES['fiche']['name'];
            $file_size =$_FILES['fiche']['size'];
            $file_tmp =$_FILES['fiche']['tmp_name'];
            $file_type=$_FILES['fiche']['type'];
            $infosfichier5 = pathinfo($_FILES['fiche']['name']);
            $extension_upload = $infosfichier5['extension'];
            $extension_upload = strtolower($extension_upload);
            $fiche_evaluation= $user."_fiche_evaluation.".$extension_upload;
            $document=$dir."/".$fiche_evaluation;
            move_uploaded_file($file_tmp,$document);
            $reqdocfiche_evaluation="UPDATE fichier set fiche_evaluation='$fiche_evaluation' where id_etudiant= '$user'";
            $resfiche=mysqli_query($link,$reqdocfiche_evaluation);
          }
        }
      ?>

</div>
<script type="text/javascript">
  function togglePopup2(){
  document.getElementById("popup-3").classList.toggle("active2");
  }
</script>

</body>
</html>
