<?php 

$conn = new mysqli('sql110.epizy.com','epiz_31308837','hn2eTSORuJ9','epiz_31308837_tournoi');
mysqli_set_charset($conn,"utf8");

$equipe=$_POST["equipe"];
$nom=$_POST["nom"];
$tel=$_POST["tel"];
$match=$_POST["match"];

$querry="INSERT INTO equipe(nom,chef,tel,partecipation) VALUES('$equipe','$nom','$tel','$match')";
if(!mysqli_query($conn,$querry)){die($user);}
else{die("you already favorited this market");}

?>