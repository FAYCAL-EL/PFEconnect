<?php
    include('../connexion.php');

    
    if(isset($_POST["submit"])){
      if($selected=filter_input(INPUT_POST, 'entreprise', FILTER_SANITIZE_SPECIAL_CHARS)){
        $requette="SELECT * FROM entreprise where nom_entreprise='".$selected."'";
        $result=mysqli_query($link,$requette);
        while($data=mysqli_fetch_assoc($result)){
          $entreprisename=$data["nom_entreprise"];
          $adresse=$data["adresse"];
          $numtele=$data["tele"];
          $ville=$data["ville"];
        }
      }else{
           $entreprisename=$_POST["entreprisename"];
          $adresse=$_POST["addressename"];
          $numtele=$_POST["numtele"];
          $ville=$_POST["villeentre"];
      }
      
   


      $encadrant=$_POST["encadrant"];
      $titresujet=$_POST["titresujet"];
      $description=$_POST["description"];
      $id_etudiant=$_SESSION['user'];

      if(isset($_POST['binome'])){
        $binome=$_POST['binome'];
      }else{
        $binome=NULL;
      }


      $requette1="INSERT INTO entreprise(nom_entreprise,adresse,tele,ville,encadrant,id_etudiant) values('$entreprisename',' $adresse','$numtele','$ville','$encadrant',' $id_etudiant')";
      $resultat1=mysqli_query($link,$requette1);
  
      $requette2="INSERT INTO stage(sujet,description,binome,id_etudiant) values('$titresujet','$description','$binome','$id_etudiant')";
      $resultat2=mysqli_query($link,$requette2);

    
      $technologies = $_POST['technologie'];

      foreach($technologies as $technologie){
        $requette3="INSERT INTO technologie(id_etudiant,technologie) values('$id_etudiant','$technologie')";
        $resultat3=mysqli_query($link,$requette3);
      }
      
      header("location:showinfo.php");
      
    }
    $req="SELECT DISTINCT nom_entreprise FROM entreprise";
    $res=mysqli_query($link,$req);
    
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/Stage_form.css">
  <link rel="icon" href="images/icon.jpg"/>

</head>
<body>
  <div class="popup" id="popup-1">
    <div class="overlay"> </div>
        <div class="content">
          <div class="headeroflist">
            <p>Informations sur le stage</p>
            <div class="x"><div class="close-btn" onclick="togglePopup()"></div></div>
          </div>
            <form method="post">
              <div class="formulaire">
              <label for="entreprisename">
                <span class="nominput"></span>
                <select name="entreprise" id="entreprise" style="padding:5px 7px;">
                  <option disabled selected>Choisissez une entreprise</option>
                  <?php  
                  while($data=mysqli_fetch_assoc($res)){
                        echo '<option value="'.$data["nom_entreprise"].'">'.$data["nom_entreprise"].'</option>';
                    }
                  ?>
                  <option>Autre...</option>
                </select>
                
              </label> 
              <div class="checkox"><input type="checkbox" onclick="var input = document.getElementById('nontrouve');var req = document.getElementById('entreprisename'); if(this.checked){ input.style.display ='block';req.required = true;}else{input.style.display ='none';req.required = false;}" /><span class="note">Nouvelle Entreprise?</span  ></div>
              <div id="nontrouve">
                <label for="entreprisename">
                  <span class="nominput">Nom d'entreprise *</span>
                  <input type="text" name="entreprisename" id="entreprisename" class="input" placeholder="Nom d'entreprise">
                </label>
                <label for="addressename">
                  <span class="nominput">Adresse d'entreprise</span>
              <input type="text" name="addressename" id="addressename" class="input" placeholder="Adresse d'entreprise" >
                </label>
                <label for="numtele">
                  <span class="nominput">N° Téléphone d'entreprise</span>
                  <input type="number" name="numtele" id="numtele" class="input" placeholder="N° Téléphone">
                </label>
                <label for="villeentre">
                  <span class="nominput">Ville d'entreprise</span>
                  <input type="text" name="villeentre" id="villeentre" class="input" placeholder="Ville d'entreprise">
                </label>    
              </div>
              
              <label for="encadrant">
                <span class="nominput">Encadrant</span>
                <input type="text" name="encadrant" id="encadrant" class="input" placeholder="Encadrant">
              </label>
              <p class="titre">Sujet de stage :</p>
              <label for="titresujet">
                 <span class="nominput">Intitulé de sujet</span>
                 <input type="text" name="titresujet" id="titresujet" class="input" placeholder="Titre de sujet">
              </label>

              <label for="technologie" class="field_wrapper">
              <span class="nominput">Technologies utilisées</span>
                <div>
                  <input type="text" name="technologie[]" id="technologie"  class="input" placeholder="technologies utiliser">
                  <a href="javascript:void(0);" class="add_button" title="Add field"><img src="images/add.png"/></a>
                </div>
              </label>

         
        
              <label for="description">
                <span class="nominput">Description</span>
                <textarea name="description" id="description" rows="5" placeholder="Decrire votre stage..."></textarea>
              </label>
              
              <div class="checkox"><input type="checkbox" onclick="var input = document.getElementById('name2'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" checked/><span class="note">le stage est effectuée par binôme?</span  ></div>
              <label for="description">
                <span class="nominput">Nom complet de bilôme</span>
                <input type="text" name="binome" id="name2" placeholder="binome">
              </label>
            </div>
            <input type="submit" name="submit" value="submit">
            </form>
        </div>
</div>
<script type="text/javascript">
  function togglePopup(){
  document.getElementById("popup-1").classList.toggle("active");
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