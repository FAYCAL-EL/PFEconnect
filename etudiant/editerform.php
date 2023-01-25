<?php
    include('../connexion.php');
    if(isset($_POST["editer"])){
      $entreprisename=$_POST["entreprisename"];
      $adresse=$_POST["addressename"];
      $numtele=$_POST["numtele"];
      $ville=$_POST["villeentre"];
      $encadrant=$_POST["encadrant"];
      $titresujet=$_POST["titresujet"];
      $description=$_POST["description"];
      $binome=$_POST['binome'];
      $id_etudiant=$_SESSION['user'];
      $delete="DELETE FROM technologie Where id_etudiant= $id_etudiant";
      $resdel=mysqli_query($link,$delete);
      $technologies = $_POST['technologie'];
      foreach($technologies as $technologie){
        if(!empty($technologie) && isset($technologie)){
          $requette3="INSERT INTO technologie(id_etudiant,technologie) values('$id_etudiant','$technologie')";
          $resultat3=mysqli_query($link,$requette3);
        }
      }
      $updatereq= "UPDATE entreprise SET adresse='$adresse', tele='$numtele', ville='$ville', encadrant='$encadrant' WHERE id_etudiant='$id_etudiant'";
      $updatequery=mysqli_query($link,$updatereq);
      $updatereq1="UPDATE stage SET sujet='$titresujet' , description='$description' , binome='$binome' WHERE id_etudiant='$id_etudiant' ";
      $updatequery1=mysqli_query($link,$updatereq1);

      header("location:showinfo.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/editerinfo.css">
  <link rel="icon" href="images/icon.jpg"/>
</head>
<body>
  <div class="popup2" id="popup-2">
    <div class="overlay"> </div>
        <div class="content">
          <div class="headeroflist">
            <p>Informations sur le stage</p>
            <div class="x"><div class="close-btn" onclick="togglePopup1()"></div></div>
          </div>
            <form method="post">
              <div class="formulaire">
              <label for="entreprisename">
                <span class="nominput">Nom d'entreprise *</span>
                <input type="text" name="entreprisename" id="entreprisename" class="input"  value="<?php echo $data1["nom_entreprise"]; ?>" placeholder="Nom d'entreprise" readonly>
              </label>
              <label for="addressename">
                <span class="nominput">Adresse d'entreprise</span>
                <input type="text" name="addressename" id="addressename" class="input" value="<?php echo $data1["adresse"]; ?>" placeholder="Adresse d'entreprise">
              </label>
              <label for="numtele">
                <span class="nominput">N° Téléphone d'entreprise</span>
                <input type="number" name="numtele" id="numtele" class="input" value="<?php echo $data1["tele"]; ?>" placeholder="N° Téléphone">
              </label>
              <label for="villeentre">
                <span class="nominput">Ville d'entreprise</span>
                <input type="text" name="villeentre" id="villeentre" class="input" value="<?php echo $data1["ville"]; ?>" placeholder="Ville d'entreprise">
              </label>  
              <label for="encadrant">
                <span class="nominput">Encadrant</span>
                <input type="text" name="encadrant" id="encadrant" class="input" value="<?php echo $data1["encadrant"]; ?>" placeholder="Encadrant">
              </label>
              <p class="titre">Sujet de stage :</p>
              <label for="titresujet">
                 <span class="nominput">Intitulé de sujet</span>
                 <input type="text" name="titresujet" id="titresujet" class="input" value="<?php echo $data2["sujet"]; ?>" placeholder="Tite de sujet">
              </label>
              <label for="technologie" class="field_wrapper">
                <span class="nominput">Technologies utilisées</span>
                <div>
                <?php
                  $id_etudiant=$_SESSION['user'];
                  $req="SELECT * from technologie where id_etudiant=$id_etudiant";
                  $res=mysqli_query($link,$req);
                  while($da=mysqli_fetch_assoc($res)){
                    ?>
                      <input type="text" name="technologie[]" id="technologie"  class="input" value="<?php echo $da["technologie"] ?>">
                    <?php
                  }
                ?>
                <a href="javascript:void(0);" class="add_button" title="Add field"><img src="images/add.png"/></a>
                    </div>
              </label>
              <label for="description">
                <span class="nominput">Description</span>
                <textarea name="description" id="description" rows="5" placeholder="Decrire votre stage..."><?php  echo $data2["description"]; ?></textarea>
              </label>
              
              <div class="checkox"><input type="checkbox" onclick="var input = document.getElementById('name2'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" checked/><span class="note">le stage est effectué en binôme?</span  ></div>
              <label for="description">
                <span class="nominput">Nom binôme</span>
                <input type="text" name="binome" id="name2" value="<?php echo $data2["binome"]; ?>" placeholder="binome">
              </label>
            </div>
            <input type="submit" name="editer">
            </form>
        </div>
</div>
<script type="text/javascript">
  function togglePopup1(){
  document.getElementById("popup-2").classList.toggle("active1");
  }
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div> <input type="text" name="technologie[]" id="technologie"  class="input" placeholder="technologies utiliser"><a href="javascript:void(0);" class="remove_button"><img src="images/remove.png"/></a></div>'; //New input field html 
        var x = 1; //Initial field counter is 1
        
        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){ 
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });
        
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
    </script>

  
</body>
</html>
<?php
    mysqli_close($link);
?>