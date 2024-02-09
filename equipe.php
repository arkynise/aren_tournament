<!DOCTYPE html> 
<html>
<head>
	<link rel="icon" type="image/png" sizes="16x16" href="img/logo2.png">
	<link rel="stylesheet" href="css/index.css">

<title>
		A.R.E.N Tournament
</title>
<script src="jquery.min.js"></script>
</head>
<body style="background-color:grey ">
<a href="https://www.facebook.com/aren.corso" style="text-decoration: none;color:black;position: absolute;transform: translate(1000px,5px);" target="_blank">AREN R.U.Corso الإقامة الجامعية الإخوة قويقح   <br>
	<img src="img/fb.png" class="image3" ></a>
<div class="div1">
	<button class="calender" onclick="amchy_9awad()">Calendrier</button> 
	<button class="resultat" onclick="amchy_9awad()">Résultat</button> 
	<a href="index.php"><img src="img/logo_aren_2-removebg-preview.png" class="image2"/></a>
	 <button class="equipe" >Les équipes</button> 
	 <button onclick="window.location.href='iscreption.php'" class="insc">Inscription</button>
	</div><br>
	<hr style="width:1400px;text-align:center;margin-bottom:0.50em ">
	<br>


<h1 style="position: absolute;transform: translate(400px,130px);">Veuillez choisir un de ces trois choix:</h1>

<h1><a onclick="showtable(2)"  href="#" class="h1">Football</a>
<a onclick="showtable(3)" href="#" class="h2">Basket-Ball</a>
<a onclick="showtable(1)" href="#" class="h3">Jeux-d'échec</a></h1><br>

<table style="position: absolute;transform: translate(250px,250px);  display: none; background-color: white;" id="1">
	<tr>
		
		<th>Nom</th>
		<th>Prénom</th>
		
	</tr>
<?php 

$conn = new mysqli('localhost','root','','tournoi');
mysqli_set_charset($conn,"utf8");
 



$q2= "SELECT * FROM chess";
$result = mysqli_query($conn, $q2);
while ($row = mysqli_fetch_array($result)) {
	?>
	<tr><td><?php echo $row['nom']?></td><td><?php echo $row['prenom']?></td></tr>
<?php }?>


</table>


<table style="position: absolute;transform: translate(250px,250px);  display: none; background-color: white;" id="2">
	<tr>
		
		<th>Nom</th>
		<th>Prénom</th>
		<th>équipe</th>
		<th>Type de joueur</th>
	</tr>
<?php 


 


$a="football";
$q1 = "SELECT * FROM joueur WHERE participe='$a'";
$result = mysqli_query($conn, $q1);?>
<?php
while ($row = mysqli_fetch_array($result)) {
	?>
	<tr><td><?php echo $row['nom']?></td><td><?php echo $row['prenom']?></td><td><?php echo $row['equipe']?></td><td><?php echo $row['type']?></td></tr>
<?php }?>


</table>

<table style="position: absolute;transform: translate(250px,250px); display: none; background-color: white;" id="3">
	<tr>
		
		<th>Nom</th>
		<th>Prénom</th>
		<th>équipe</th>
		<th>Type de joueur</th>
	</tr>
<?php 


 


$a="basketball";
$q1 = "SELECT * FROM joueur WHERE participe='$a'";
$result = mysqli_query($conn, $q1);
while ($row = mysqli_fetch_array($result)) {
	?>
	<tr><td><?php echo $row['nom']?></td><td><?php echo $row['prenom']?></td><td><?php echo $row['equipe']?></td><td><?php echo $row['type']?></td></tr>
<?php }?>


</table>

</body>

<script type="text/javascript">
	
	function showtable(nr) {
    document.getElementById("1").style.display="none";
    document.getElementById("2").style.display="none";
    document.getElementById("3").style.display="none";
    document.getElementById(nr).style.display="block";
}
function amchy_9awad(){
	alert("Cette function n'ai pas encore était implanter");
}	
</script>

