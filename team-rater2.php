<html>
<header>
<script src="jquery-1.9.0.min.js" type="text/javascript"></script>
<script src="jquery.dd.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="dd.css" />
</header>

<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<link rel="stylesheet"  href="mystyle.css">

<!--team-rater2.php is almost identical to team-rater.php, expect it doesn't have save function. Check team-rater.php's comments. -->


<?php
$servername = "localhost";
$username = "Mursu";
$password = "KkU0MFGKZqYUbbEf";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>

<?php 

function debug_to_console( $data ) {
if ( is_array( $data ) )
 $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
 else
 $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
echo $output;
}


		$hero1 = $_POST['selected-text'];
		$hero2 = $_POST['selected-text-2'];
		$hero3 = $_POST['selected-text-3'];
		$hero4 = $_POST['selected-text-4'];
		$hero5 = $_POST['selected-text-5'];
		$hero6 = $_POST['selected-text-6'];
		
		
		


$link = mysqli_connect("localhost", "Mursu", "KkU0MFGKZqYUbbEf", "teams");

 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

?>

<?php
// Initialize the session
session_start();
?>


        <link rel="stylesheet"  href="css/lib/control/iconselect.css" >
        <script type="text/javascript" src="lib/control/iconselect.js"></script>
        
        <script type="text/javascript" src="lib/iscroll.js"></script>
		
		
		<script>
		
		$( document ).ready(function() {
			
			var firstHero = "<?php print $hero1 ?>";
			var secondHero = "<?php print $hero2 ?>";
			var thirdHero = "<?php print $hero3 ?>";
			var fourthHero = "<?php print $hero4 ?>";
			var fifthHero = "<?php print $hero5 ?>";
			var sixthHero = "<?php print $hero6 ?>";
		
			var damage = 0;
			var hitscan = 0;
			var flank = 0;
			var tank = 0;
			var dive = 0;
			var defense = 0;
			var heal = 0;
		
			if (firstHero.indexOf("Ana") == 0){
				heal++;
				heal++;
				damage++;
				defense++;
				hitscan++;
			} else if (firstHero.indexOf("Bastion") == 0){
				damage++;
				damage++;
				damage++;
				hitscan++;
				hitscan++;
				defense++;
				defense++;
			} else if (firstHero.indexOf("Brigitte") == 0){
				heal++;
				damage++;
				tank++;
				dive++;
				defense++;
			} else if (firstHero.indexOf("D.va") == 0){
				tank++;
				tank++;
				dive++;
				dive++;
			} else if (firstHero.indexOf("Doomfist") == 0){
				damage++;
				damage++;
				damage++;
				dive++;
				flank++;
				flank++;
			} else if (firstHero.indexOf("Genji") == 0){
				damage++;
				damage++;
				dive++;
				dive++;
				flank++;
			} else if (firstHero.indexOf("Hanzo") == 0){
				damage++;
				damage++;
				damage++;
				defense++;
			} else if (firstHero.indexOf("Junkrat") == 0){
				damage++;
				damage++;
				damage++;
				defense++;
			} else if (firstHero.indexOf("Lucio") == 0){
				heal++;
				dive++;
				dive++;
				defense++;
			} else if (firstHero.indexOf("McCree") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
			} else if (firstHero.indexOf("Mei") == 0){
				damage++;
				defense++;
				defense++;
			} else if (firstHero.indexOf("Mercy") == 0){
				heal++;
				heal++;
				heal++;
				defense++;
				defense++;
			} else if (firstHero.indexOf("Moira") == 0){
				heal++;
				heal++;
				heal++;
				dive++;
				defense++;
			} else if (firstHero.indexOf("Orisa") == 0){
				tank++;
				tank++;
				tank++;
				defense++;
				defense++;
			} else if (firstHero.indexOf("Pharah") == 0){
				damage++;
				damage++;
				damage++;
				flank++;
			} else if (firstHero.indexOf("Reaper") == 0){
				damage++;
				damage++;
				damage++;
				flank++;
			} else if (firstHero.indexOf("Reinhardt") == 0){
				tank++;
				tank++;
				tank++;
				damage++;
				defense++;
				defense++;
			} else if (firstHero.indexOf("Roadhog") == 0){
				tank++;
				defense++;
				damage++;
				damage++;
			} else if (firstHero.indexOf("Soldier 76") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
			} else if (firstHero.indexOf("Sombra") == 0){
				damage++;
				hitscan++;
				flank++;
				flank++;
			} else if (firstHero.indexOf("Symmetra") == 0){
				damage++;
				damage++;
				defense++;
				defense++;
			} else if (firstHero.indexOf("Torbjorn") == 0){
				damage++;
				damage++;
				defense++;
				defense++;
				hitscan++;
			} else if (firstHero.indexOf("Tracer") == 0){
				damage++;
				damage++;
				flank++;
				flank++;
			} else if (firstHero.indexOf("Widowmaker") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
				hitscan++;
				defense++;
				defense++;
			} else if (firstHero.indexOf("Winston") == 0){
				tank++;
				tank++;
				dive++;
				dive++;
			} else if (firstHero.indexOf("Wrecking Ball") == 0){
				tank++;
				dive++;
				flank++;
				defense++;
				hitscan++;			
			} else if (firstHero.indexOf("Zarya") == 0){
				tank++;
				tank++;
				damage++;
				defense++;
			} else if (firstHero.indexOf("Zenyatta") == 0){
				heal++;
				damage++;
				defense++;
			}				
				
			if (secondHero.indexOf("Ana") == 0){
				heal++;
				heal++;
				damage++;
				defense++;
				hitscan++;
			} else if (secondHero.indexOf("Bastion") == 0){
				damage++;
				damage++;
				damage++;
				hitscan++;
				hitscan++;
				defense++;
				defense++;
			} else if (secondHero.indexOf("Brigitte") == 0){
				heal++;
				damage++;
				tank++;
				dive++;
				defense++;
			} else if (secondHero.indexOf("D.va") == 0){
				tank++;
				tank++;
				dive++;
				dive++;
			} else if (secondHero.indexOf("Doomfist") == 0){
				damage++;
				damage++;
				damage++;
				dive++;
				flank++;
				flank++;
			} else if (secondHero.indexOf("Genji") == 0){
				damage++;
				damage++;
				dive++;
				dive++;
				flank++;
			} else if (secondHero.indexOf("Hanzo") == 0){
				damage++;
				damage++;
				damage++;
				defense++;
			} else if (secondHero.indexOf("Junkrat") == 0){
				damage++;
				damage++;
				damage++;
				defense++;
			} else if (secondHero.indexOf("Lucio") == 0){
				heal++;
				dive++;
				dive++;
				defense++;
			} else if (secondHero.indexOf("McCree") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
			} else if (secondHero.indexOf("Mei") == 0){
				damage++;
				defense++;
				defense++;
			} else if (secondHero.indexOf("Mercy") == 0){
				heal++;
				heal++;
				heal++;
				defense++;
				defense++;
			} else if (secondHero.indexOf("Moira") == 0){
				heal++;
				heal++;
				heal++;
				dive++;
				defense++;
			} else if (secondHero.indexOf("Orisa") == 0){
				tank++;
				tank++;
				tank++;
				defense++;
				defense++;
			} else if (secondHero.indexOf("Pharah") == 0){
				damage++;
				damage++;
				damage++;
				flank++;
			} else if (secondHero.indexOf("Reaper") == 0){
				damage++;
				damage++;
				damage++;
				flank++;
			} else if (secondHero.indexOf("Reinhardt") == 0){
				tank++;
				tank++;
				tank++;
				damage++;
				defense++;
				defense++;
			} else if (secondHero.indexOf("Roadhog") == 0){
				tank++;
				defense++;
				damage++;
				damage++;
			} else if (secondHero.indexOf("Soldier 76") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
			} else if (secondHero.indexOf("Sombra") == 0){
				damage++;
				hitscan++;
				flank++;
				flank++;
			} else if (secondHero.indexOf("Symmetra") == 0){
				damage++;
				damage++;
				defense++;
				defense++;
			} else if (secondHero.indexOf("Torbjorn") == 0){
				damage++;
				damage++;
				defense++;
				defense++;
				hitscan++;
			} else if (secondHero.indexOf("Tracer") == 0){
				damage++;
				damage++;
				flank++;
				flank++;
			} else if (secondHero.indexOf("Widowmaker") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
				hitscan++;
				defense++;
				defense++;
			} else if (secondHero.indexOf("Winston") == 0){
				tank++;
				tank++;
				dive++;
				dive++;
			} else if (secondHero.indexOf("Wrecking Ball") == 0){
				tank++;
				dive++;
				flank++;
				defense++;
				hitscan++;			
			} else if (secondHero.indexOf("Zarya") == 0){
				tank++;
				tank++;
				damage++;
				defense++;
			} else if (secondHero.indexOf("Zenyatta") == 0){
				heal++;
				damage++;
				defense++;
			}

			if (thirdHero.indexOf("Ana") == 0){
				heal++;
				heal++;
				damage++;
				defense++;
				hitscan++;
			} else if (thirdHero.indexOf("Bastion") == 0){
				damage++;
				damage++;
				damage++;
				hitscan++;
				hitscan++;
				defense++;
				defense++;
			} else if (thirdHero.indexOf("Brigitte") == 0){
				heal++;
				damage++;
				tank++;
				dive++;
				defense++;
			} else if (thirdHero.indexOf("D.va") == 0){
				tank++;
				tank++;
				dive++;
				dive++;
			} else if (thirdHero.indexOf("Doomfist") == 0){
				damage++;
				damage++;
				damage++;
				dive++;
				flank++;
				flank++;
			} else if (thirdHero.indexOf("Genji") == 0){
				damage++;
				damage++;
				dive++;
				dive++;
				flank++;
			} else if (thirdHero.indexOf("Hanzo") == 0){
				damage++;
				damage++;
				damage++;
				defense++;
			} else if (thirdHero.indexOf("Junkrat") == 0){
				damage++;
				damage++;
				damage++;
				defense++;
			} else if (thirdHero.indexOf("Lucio") == 0){
				heal++;
				dive++;
				dive++;
				defense++;
			} else if (thirdHero.indexOf("McCree") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
			} else if (thirdHero.indexOf("Mei") == 0){
				damage++;
				defense++;
				defense++;
			} else if (thirdHero.indexOf("Mercy") == 0){
				heal++;
				heal++;
				heal++;
				defense++;
				defense++;
			} else if (thirdHero.indexOf("Moira") == 0){
				heal++;
				heal++;
				heal++;
				dive++;
				defense++;
			} else if (thirdHero.indexOf("Orisa") == 0){
				tank++;
				tank++;
				tank++;
				defense++;
				defense++;
			} else if (thirdHero.indexOf("Pharah") == 0){
				damage++;
				damage++;
				damage++;
				flank++;
			} else if (thirdHero.indexOf("Reaper") == 0){
				damage++;
				damage++;
				damage++;
				flank++;
			} else if (thirdHero.indexOf("Reinhardt") == 0){
				tank++;
				tank++;
				tank++;
				damage++;
				defense++;
				defense++;
			} else if (thirdHero.indexOf("Roadhog") == 0){
				tank++;
				defense++;
				damage++;
				damage++;
			} else if (thirdHero.indexOf("Soldier 76") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
			} else if (thirdHero.indexOf("Sombra") == 0){
				damage++;
				hitscan++;
				flank++;
				flank++;
			} else if (thirdHero.indexOf("Symmetra") == 0){
				damage++;
				damage++;
				defense++;
				defense++;
			} else if (thirdHero.indexOf("Torbjorn") == 0){
				damage++;
				damage++;
				defense++;
				defense++;
				hitscan++;
			} else if (thirdHero.indexOf("Tracer") == 0){
				damage++;
				damage++;
				flank++;
				flank++;
			} else if (thirdHero.indexOf("Widowmaker") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
				hitscan++;
				defense++;
				defense++;
			} else if (thirdHero.indexOf("Winston") == 0){
				tank++;
				tank++;
				dive++;
				dive++;
			} else if (thirdHero.indexOf("Wrecking Ball") == 0){
				tank++;
				dive++;
				flank++;
				defense++;
				hitscan++;			
			} else if (thirdHero.indexOf("Zarya") == 0){
				tank++;
				tank++;
				damage++;
				defense++;
			} else if (thirdHero.indexOf("Zenyatta") == 0){
				heal++;
				damage++;
				defense++;
			}

			if (fourthHero.indexOf("Ana") == 0){
				heal++;
				heal++;
				damage++;
				defense++;
				hitscan++;
			} else if (fourthHero.indexOf("Bastion") == 0){
				damage++;
				damage++;
				damage++;
				hitscan++;
				hitscan++;
				defense++;
				defense++;
			} else if (fourthHero.indexOf("Brigitte") == 0){
				heal++;
				damage++;
				tank++;
				dive++;
				defense++;
			} else if (fourthHero.indexOf("D.va") == 0){
				tank++;
				tank++;
				dive++;
				dive++;
			} else if (fourthHero.indexOf("Doomfist") == 0){
				damage++;
				damage++;
				damage++;
				dive++;
				flank++;
				flank++;
			} else if (fourthHero.indexOf("Genji") == 0){
				damage++;
				damage++;
				dive++;
				dive++;
				flank++;
			} else if (fourthHero.indexOf("Hanzo") == 0){
				damage++;
				damage++;
				damage++;
				defense++;
			} else if (fourthHero.indexOf("Junkrat") == 0){
				damage++;
				damage++;
				damage++;
				defense++;
			} else if (fourthHero.indexOf("Lucio") == 0){
				heal++;
				dive++;
				dive++;
				defense++;
			} else if (fourthHero.indexOf("McCree") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
			} else if (fourthHero.indexOf("Mei") == 0){
				damage++;
				defense++;
				defense++;
			} else if (fourthHero.indexOf("Mercy") == 0){
				heal++;
				heal++;
				heal++;
				defense++;
				defense++;
			} else if (fourthHero.indexOf("Moira") == 0){
				heal++;
				heal++;
				heal++;
				dive++;
				defense++;
			} else if (fourthHero.indexOf("Orisa") == 0){
				tank++;
				tank++;
				tank++;
				defense++;
				defense++;
			} else if (fourthHero.indexOf("Pharah") == 0){
				damage++;
				damage++;
				damage++;
				flank++;
			} else if (fourthHero.indexOf("Reaper") == 0){
				damage++;
				damage++;
				damage++;
				flank++;
			} else if (fourthHero.indexOf("Reinhardt") == 0){
				tank++;
				tank++;
				tank++;
				damage++;
				defense++;
				defense++;
			} else if (fourthHero.indexOf("Roadhog") == 0){
				tank++;
				defense++;
				damage++;
				damage++;
			} else if (fourthHero.indexOf("Soldier 76") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
			} else if (fourthHero.indexOf("Sombra") == 0){
				damage++;
				hitscan++;
				flank++;
				flank++;
			} else if (fourthHero.indexOf("Symmetra") == 0){
				damage++;
				damage++;
				defense++;
				defense++;
			} else if (fourthHero.indexOf("Torbjorn") == 0){
				damage++;
				damage++;
				defense++;
				defense++;
				hitscan++;
			} else if (fourthHero.indexOf("Tracer") == 0){
				damage++;
				damage++;
				flank++;
				flank++;
			} else if (fourthHero.indexOf("Widowmaker") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
				hitscan++;
				defense++;
				defense++;
			} else if (fourthHero.indexOf("Winston") == 0){
				tank++;
				tank++;
				dive++;
				dive++;
			} else if (fourthHero.indexOf("Wrecking Ball") == 0){
				tank++;
				dive++;
				flank++;
				defense++;
				hitscan++;			
			} else if (fourthHero.indexOf("Zarya") == 0){
				tank++;
				tank++;
				damage++;
				defense++;
			} else if (fourthHero.indexOf("Zenyatta") == 0){
				heal++;
				damage++;
				defense++;
			}
			
			if (fifthHero.indexOf("Ana") == 0){
				heal++;
				heal++;
				damage++;
				defense++;
				hitscan++;
			} else if (fifthHero.indexOf("Bastion") == 0){
				damage++;
				damage++;
				damage++;
				hitscan++;
				hitscan++;
				defense++;
				defense++;
			} else if (fifthHero.indexOf("Brigitte") == 0){
				heal++;
				damage++;
				tank++;
				dive++;
				defense++;
			} else if (fifthHero.indexOf("D.va") == 0){
				tank++;
				tank++;
				dive++;
				dive++;
			} else if (fifthHero.indexOf("Doomfist") == 0){
				damage++;
				damage++;
				damage++;
				dive++;
				flank++;
				flank++;
			} else if (fifthHero.indexOf("Genji") == 0){
				damage++;
				damage++;
				dive++;
				dive++;
				flank++;
			} else if (fifthHero.indexOf("Hanzo") == 0){
				damage++;
				damage++;
				damage++;
				defense++;
			} else if (fifthHero.indexOf("Junkrat") == 0){
				damage++;
				damage++;
				damage++;
				defense++;
			} else if (fifthHero.indexOf("Lucio") == 0){
				heal++;
				dive++;
				dive++;
				defense++;
			} else if (fifthHero.indexOf("McCree") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
			} else if (fifthHero.indexOf("Mei") == 0){
				damage++;
				defense++;
				defense++;
			} else if (fifthHero.indexOf("Mercy") == 0){
				heal++;
				heal++;
				heal++;
				defense++;
				defense++;
			} else if (fifthHero.indexOf("Moira") == 0){
				heal++;
				heal++;
				heal++;
				dive++;
				defense++;
			} else if (fifthHero.indexOf("Orisa") == 0){
				tank++;
				tank++;
				tank++;
				defense++;
				defense++;
			} else if (fifthHero.indexOf("Pharah") == 0){
				damage++;
				damage++;
				damage++;
				flank++;
			} else if (fifthHero.indexOf("Reaper") == 0){
				damage++;
				damage++;
				damage++;
				flank++;
			} else if (fifthHero.indexOf("Reinhardt") == 0){
				tank++;
				tank++;
				tank++;
				damage++;
				defense++;
				defense++;
			} else if (fifthHero.indexOf("Roadhog") == 0){
				tank++;
				defense++;
				damage++;
				damage++;
			} else if (fifthHero.indexOf("Soldier 76") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
			} else if (fifthHero.indexOf("Sombra") == 0){
				damage++;
				hitscan++;
				flank++;
				flank++;
			} else if (fifthHero.indexOf("Symmetra") == 0){
				damage++;
				damage++;
				defense++;
				defense++;
			} else if (fifthHero.indexOf("Torbjorn") == 0){
				damage++;
				damage++;
				defense++;
				defense++;
				hitscan++;
			} else if (fifthHero.indexOf("Tracer") == 0){
				damage++;
				damage++;
				flank++;
				flank++;
			} else if (fifthHero.indexOf("Widowmaker") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
				hitscan++;
				defense++;
				defense++;
			} else if (fifthHero.indexOf("Winston") == 0){
				tank++;
				tank++;
				dive++;
				dive++;
			} else if (fifthHero.indexOf("Wrecking Ball") == 0){
				tank++;
				dive++;
				flank++;
				defense++;
				hitscan++;			
			} else if (fifthHero.indexOf("Zarya") == 0){
				tank++;
				tank++;
				damage++;
				defense++;
			} else if (fifthHero.indexOf("Zenyatta") == 0){
				heal++;
				damage++;
				defense++;
			}			

			if (sixthHero.indexOf("Ana") == 0){
				heal++;
				heal++;
				damage++;
				defense++;
				hitscan++;
			} else if (sixthHero.indexOf("Bastion") == 0){
				damage++;
				damage++;
				damage++;
				hitscan++;
				hitscan++;
				defense++;
				defense++;
			} else if (sixthHero.indexOf("Brigitte") == 0){
				heal++;
				damage++;
				tank++;
				dive++;
				defense++;
			} else if (sixthHero.indexOf("D.va") == 0){
				tank++;
				tank++;
				dive++;
				dive++;
			} else if (sixthHero.indexOf("Doomfist") == 0){
				damage++;
				damage++;
				damage++;
				dive++;
				flank++;
				flank++;
			} else if (sixthHero.indexOf("Genji") == 0){
				damage++;
				damage++;
				dive++;
				dive++;
				flank++;
			} else if (sixthHero.indexOf("Hanzo") == 0){
				damage++;
				damage++;
				damage++;
				defense++;
			} else if (sixthHero.indexOf("Junkrat") == 0){
				damage++;
				damage++;
				damage++;
				defense++;
			} else if (sixthHero.indexOf("Lucio") == 0){
				heal++;
				dive++;
				dive++;
				defense++;
			} else if (sixthHero.indexOf("McCree") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
			} else if (sixthHero.indexOf("Mei") == 0){
				damage++;
				defense++;
				defense++;
			} else if (sixthHero.indexOf("Mercy") == 0){
				heal++;
				heal++;
				heal++;
				defense++;
				defense++;
			} else if (sixthHero.indexOf("Moira") == 0){
				heal++;
				heal++;
				heal++;
				dive++;
				defense++;
			} else if (sixthHero.indexOf("Orisa") == 0){
				tank++;
				tank++;
				tank++;
				defense++;
				defense++;
			} else if (sixthHero.indexOf("Pharah") == 0){
				damage++;
				damage++;
				damage++;
				flank++;
			} else if (sixthHero.indexOf("Reaper") == 0){
				damage++;
				damage++;
				damage++;
				flank++;
			} else if (sixthHero.indexOf("Reinhardt") == 0){
				tank++;
				tank++;
				tank++;
				damage++;
				defense++;
				defense++;
			} else if (sixthHero.indexOf("Roadhog") == 0){
				tank++;
				defense++;
				damage++;
				damage++;
			} else if (sixthHero.indexOf("Soldier 76") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
			} else if (sixthHero.indexOf("Sombra") == 0){
				damage++;
				hitscan++;
				flank++;
				flank++;
			} else if (sixthHero.indexOf("Symmetra") == 0){
				damage++;
				damage++;
				defense++;
				defense++;
			} else if (sixthHero.indexOf("Torbjorn") == 0){
				damage++;
				damage++;
				defense++;
				defense++;
				hitscan++;
			} else if (sixthHero.indexOf("Tracer") == 0){
				damage++;
				damage++;
				flank++;
				flank++;
			} else if (sixthHero.indexOf("Widowmaker") == 0){
				damage++;
				damage++;
				hitscan++;
				hitscan++;
				hitscan++;
				defense++;
				defense++;
			} else if (sixthHero.indexOf("Winston") == 0){
				tank++;
				tank++;
				dive++;
				dive++;
			} else if (sixthHero.indexOf("Wrecking Ball") == 0){
				tank++;
				dive++;
				flank++;
				defense++;
				hitscan++;			
			} else if (sixthHero.indexOf("Zarya") == 0){
				tank++;
				tank++;
				damage++;
				defense++;
			} else if (sixthHero.indexOf("Zenyatta") == 0){
				heal++;
				damage++;
				defense++;
			}
			
			console.log(tank);
			
			if (tank > 10) {
				tank = 10;
			}
			
			if (dive > 10) {
				dive = 10;
			}
			
			if (damage > 12) {
				damage = 12;
			}
			
			if (hitscan > 10) {
				hitscan = 10;
			}
			
			if (flank > 10) {
				flank = 10;
			}
			
			if (defense > 10) {
				defense = 10;
			}
			
			if (heal > 8) {
				heal = 8;
			}
			
			document.getElementById("tankBar").value = tank;
			document.getElementById("diveBar").value = dive;
			document.getElementById("damageBar").value = damage;
			document.getElementById("hitscanBar").value = hitscan;
			document.getElementById("flankBar").value = flank;
			document.getElementById("defenseBar").value = defense;
			document.getElementById("healBar").value = heal;
			
			
			
			if (tank <= 1) {
				document.getElementById("tankR").innerHTML = "- No tanking capability, heroes in team dies fastly to damage";
			} else if (tank <= 3) {
				document.getElementById("tankR").innerHTML = "- Tanking capability is lacking, and therefore not granting enough protection from damage to other hero types";
			} else if (tank <= 6) {
				document.getElementById("tankR").innerHTML = "- Tanking capability is in good balance";	
			} else if (tank <= 10) {
				document.getElementById("tankR").innerHTML = "- Very tanky team, some of the tanking potential could be invested into damage or healing. Can still work with GOATS strat";
			}
			
			if (dive <= 1) {
				document.getElementById("diveR").innerHTML = "- Team doesn't have any dive potential";
			} else if (dive <= 3) {
				document.getElementById("diveR").innerHTML = "- Team doesn't have much dive potential, individual heroes can try diving at times";	
			} else if (dive <= 6) {
				document.getElementById("diveR").innerHTML = "- Team can dive efficiently together";
			} else if (dive <= 10) {
				document.getElementById("diveR").innerHTML = "- Team can dive without problems, probably good with GOATS strat too";
			}
			
			if (damage <= 2) {
				document.getElementById("damageR").innerHTML = "- Kill power is nonexistent, team need more damage to get kills";
			} else if (damage <= 5) {
				document.getElementById("damageR").innerHTML = "- Kill power is really low, requires focused attacks from the team to kill enemies";
			} else if (damage <= 8) {
				document.getElementById("damageR").innerHTML = "- Efficient enough kill power, team can kill enemies without notable struggle";
			} else if (damage <= 12) {
				document.getElementById("damageR").innerHTML = "- Very high damage, team can safely invest some of it into other stats for better survavibility";
			}
			
			if (hitscan <= 1) {
				document.getElementById("hitscanR").innerHTML = "- Team doesn't have options efficient enough for handling flying or distant enemies";
			} else if (hitscan <= 3) {
				document.getElementById("hitscanR").innerHTML = "- Team has few options against flying and distant enemies";
			} else if (hitscan <= 6) {
				document.getElementById("hitscanR").innerHTML = "- Team can handle flying and distant enemies well";
			} else if (hitscan <= 10) {
				document.getElementById("hitscanR").innerHTML = "- Team hard counter flying and distant enemies, might struggle in close combat situations";
			}
			
			if (flank <= 1) {
				document.getElementById("flankR").innerHTML = "- No efficient flanking power";
			} else if (flank <= 3) {
				document.getElementById("flankR").innerHTML = "- Team can do some flanking and try to kill healers";
			} else if (flank <= 6) {
				document.getElementById("flankR").innerHTML = "- Team can flank efficiently, being a huge threat for isolated enemies and healers";
			} else if (hitscan <= 10) {
				document.getElementById("flankR").innerHTML = "- Team has huge flanking potential, relying on it almost completely. Some of it could be invested into other stats";
			}
			
			if (defense <= 1) {
				document.getElementById("defenseR").innerHTML = "- Team has no mentionable defensive tools against flankers etc.";
			} else if (defense <= 3) {
				document.getElementById("defenseR").innerHTML = "- Team has some defensive options against highly offensive teams";
			} else if (defense <= 6) {
				document.getElementById("defenseR").innerHTML = "- Team can handle offensive teams well with high defensive potential";
			} else if (defense <= 10) {
				document.getElementById("defenseR").innerHTML = "- Team focuses mostly on defensive options, which can work against flankers and divers well";
			}
			
			if (heal <= 1) {
				document.getElementById("healR").innerHTML = "- Team has no efficient healing, heroes in team die easily from the lack of it";
			} else if (heal <= 3) {
				document.getElementById("healR").innerHTML = "- Team has weak healing. Healing's inconsistency can lead into trouble";
			} else if (heal <= 5) {
				document.getElementById("healR").innerHTML = "- Healing is consistent and efficient enough to keep teammates alive longer";
			} else if (heal <= 8) {
				document.getElementById("healR").innerHTML = "- Team has lots of healing, some of it can be invested into tanking or damage, if the team's not using GOATS strat";
			}
			
			
		});
		
		</script>
		

</head>


<body>



<div class="container" id="navigations">
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand mb-0" href="index.php">
    <img src="pics/Overwatch_circle_logo.png" width="50" height="50" class="d-inline-block align-top" alt="">
    <i>Overwatch Team Rater</i>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i>Rating</i> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="saved-teams.php"><i>Saved teams</i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="manage-teams.php"><i>Manage teams</i></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="login-page.php"><i>Sign up</i> <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="login-page2.php"><i>
		<?php
		
		//Checks if user has logged in; if they have, displays user's name instead of "Login" text in the navbar
		if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == false){
			$userName = "Login";
		}else{	
			$userName = htmlspecialchars($_SESSION["username"])."'s Account";	
		}
		echo $userName;
		
		?>
		</i></a></li>
    </ul>
  </div>
</nav>
</div>

<br>



<form action="save-team.php" method="post">
<div class="container" id="main_content">


	<div class="row">
		
		<div class="col" > 
			<div><input type="text" class="selected-text" id="selected-text-0" readonly="true" style="border: none; border-color: transparent; background-color: transparent; font-size:28px;" name="selected-text-0" value="<?php print "$hero1" ?>"></div>
		</div>
	
		
		<div class="col" > 
			<div><input type="text" class="selected-text" id="selected-text-02" readonly="true" style="border: none; border-color: transparent; background-color: transparent; font-size:28px;" name="selected-text-02" value="<?php print "$hero2" ?>"></div>
		</div>
	


		
		<div class="col" > 
			<div><input type="text" class="selected-text" id="selected-text-03" readonly="true" style="border: none; border-color: transparent; background-color: transparent; font-size:28px;" name="selected-text-03" value="<?php print "$hero3" ?>"></div>
		</div>
	


		
		<div class="col" > 
			<div><input type="text" class="selected-text" id="selected-text-04" readonly="true" style="border: none; border-color: transparent; background-color: transparent; font-size:28px;" name="selected-text-04" value="<?php print "$hero4" ?>"></div>
		</div>



		
		<div class="col" > 
			<div><input type="text" class="selected-text" id="selected-text-05" readonly="true" style="border: none; border-color: transparent; background-color: transparent; font-size:28px;" name="selected-text-05" value="<?php print "$hero5" ?>"></div>
		</div>



		
		<div class="col" > 
			<div><input type="text" class="selected-text" id="selected-text-06" readonly="true" style="border: none; border-color: transparent; background-color: transparent; font-size:28px;" name="selected-text-06" value="<?php print "$hero6" ?>"></div>
		</div>
	</div>

<br>
<br>
<br>




  <div class="row">
    <div class="col" id="main_text">
	<br>
      <h1 style="font-style:italic; font-family: owFont;">Team</h1>
	  <br>
	  <p> <img src="pics/Icon-<?php print "$hero1"; ?>.png"><br> <?php print "$hero1" ?> <?php $myfilename = "heroInfo/$hero1.txt";  print file_get_contents($myfilename); ?>  </p>
	  <br>
	  <p> <img src="pics/Icon-<?php print "$hero2"; ?>.png"><br> <?php print "$hero2" ?> <?php $myfilename = "heroInfo/$hero2.txt";  print file_get_contents($myfilename); ?></p>
	  <br>
	  <p> <img src="pics/Icon-<?php print "$hero3"; ?>.png"><br> <?php print "$hero3" ?> <?php $myfilename = "heroInfo/$hero3.txt";  print file_get_contents($myfilename); ?> </p>
	  <br>
	  <p> <img src="pics/Icon-<?php print "$hero4"; ?>.png"><br> <?php print "$hero4" ?> <?php $myfilename = "heroInfo/$hero4.txt";  print file_get_contents($myfilename); ?> </p>
	  <br>
	  <p> <img src="pics/Icon-<?php print "$hero5"; ?>.png"><br> <?php print "$hero5" ?> <?php $myfilename = "heroInfo/$hero5.txt";  print file_get_contents($myfilename); ?> </p>
	  <br>
	  <p> <img src="pics/Icon-<?php print "$hero6"; ?>.png"><br> <?php print "$hero6" ?> <?php $myfilename = "heroInfo/$hero6.txt";  print file_get_contents($myfilename); ?> </p>
    </div>
	
    <div class="col" id="extra_content">
	<br>
	<h1 style="font-style:italic; font-family: owFont;">Rating</h1>
	<br>
	<p>Tank: </p> <progress id="tankBar" max="10"></progress>
	<br>
	<p>Dive: </p> <progress id="diveBar" max="10"></progress>
	<br>
	<p>Damage: </p> <progress id="damageBar" max="12"></progress>
	<br>
	<p>Hitscan: </p> <progress id="hitscanBar" max="10"></progress>
	<br>
	<p>Flank: </p> <progress id="flankBar" max="10"></progress>
	<br>
	<p>Defense: </p> <progress id="defenseBar" max="10"></progress>
	<br>
	<p>Heal: </p> <progress id="healBar" max="8"></progress>
	<br>
	<br>
	<h1 style="font-style:italic; font-family: owFont;">Review</h1>
	<br>
	<p id="tankR"></p>
	<br>
	<p id="diveR"></p>
	<br>
	<p id="damageR"></p>
	<br>
	<p id="hitscanR"></p>
	<br>
	<p id="flankR"></p>
	<br>
	<p id="defenseR"></p>
	<br>
	<p id="healR"></p>
	<br>
   </div>
  </div>
</div>

<br>
<div class="container">
	<div class="row">
		<div class="col" > 
		</div>
		<div class="col" > 
			<?php include 'copyright.php';?>
		</div>
		<div class="col" > 
		</div>
	</div>
</div>

</body>
</html>