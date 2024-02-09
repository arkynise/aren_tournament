<?php 
$conn = new mysqli('sql110.epizy.com','epiz_31308837','hn2eTSORuJ9','epiz_31308837_tournoi');
mysqli_set_charset($conn,"utf8");

$equipe=$_POST["equipe"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];

$match=$_POST["match"];
$type=$_POST["type"];
if($match=="football" || $match=="basketball"){
$querry="INSERT INTO joueur(nom,prenom,equipe,participe,type) VALUES('$nom','$prenom','$equipe','$match','$type')";
if(!mysqli_query($conn,$querry)){die($user);}
else{die("you already favorited this market");}
}else{
$tel=$_POST["tel"];
$querry="INSERT INTO chess(nom,prenom,tel) VALUES('$nom','$prenom','$tel')";
if(!mysqli_query($conn,$querry)){die($user);}
else{die("you already favorited this market");}

}
?>