<?php 
include("../connexion.php");
@header("Content-Disposition: attachment; filename=liste note.csv");
$requette="SELECT numapogee,nom,prenom,note FROM etudiant,stage_encadre where etudiant.numapogee=stage_encadre.id_etudiant and validation=1 order by nom";
$select = mysqli_query($link,$requette);
$data='';
$eacute = html_entity_decode('&eacute;',ENT_COMPAT,'iso-8859-1');
$data.='Num'.$eacute.'ro apog'.$eacute.'e'.",";
$data.='Nom'.",";
$data.='Prenom'.",";
$data.='Note'."\n";
 while($row=mysqli_fetch_assoc($select))
 {
  $data.=$row['numapogee'].",";
  $data.=$row['nom'].",";
  $data.=$row['prenom'].",";
  $data.=$row['note']."\n";
 }

 echo $data;
 exit();

?>