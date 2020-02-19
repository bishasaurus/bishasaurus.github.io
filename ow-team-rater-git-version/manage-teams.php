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
// Initialize the session
session_start();
?>
		
		
		
		


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
      <li class="nav-item">
        <a class="nav-link" href="index.php"><i>Rating</i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="saved-teams.php"><i>Saved teams</i> </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="manage-teams.php"><i>Manage teams</i> <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="login-page.php"><i>Sign up</i></a>
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

<div class="container" id="main_content">


<br>
<p>In this page, you can delete saved teams. To do so, type the deletable rows' numbers into the input field below. If you want to delete many rows at the same time, separate the values with commas. For example, if you want to delete rows numbered 12, 14 and 89, type "12,14,89" into the input field. After you've given the rows to delete, send the input with Enter or pressing <span style="color:orange;">Send Input!</span> -button below.</p>



<div class="table-responsive">
	<div class="row">
		<div class="col" >     
			<div>
			
			
			
			<?php 
			$servername = "localhost";
			$username = "Mursu";
			$password = "KkU0MFGKZqYUbbEf";
			$dbname = "teams";
			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			} 
			
			
			//Prepare a select statement, and query to the database table

			$sql = "SELECT * FROM myteams LIMIT 30"; 
			$result = $conn->query($sql);

			//Prints every row of the myteams-table (max 30) into own HTML table with id. The id can be used to identify rows to be deleted.
			echo ""; 
			$tablerowid = 0;
			if ($result->num_rows > 0) {
				//Creates a loop to loop through results
				while($row = $result->fetch_assoc()) {   
				echo "<table cellpadding='5' style='border: 1px solid black;'><tr style='border: 1px solid black;'><td class='nr' style='border: 1px solid black;'> <input type='text' id='tablerow" . $tablerowid . "' readonly='true' style='border: none; border-color: transparent; background-color: transparent;' name='tablerownumber' value='$row[id]'></td><td class='nr' style='border: 1px solid black;'> <input type='text' id='selected-text-" . $tablerowid . "' readonly='true' style='border: none; border-color: transparent; background-color: transparent;' name='selected-text' value='$row[heroName1]'></td><td style='border: 1px solid black;'><input type='text' id='selected-text-" . $tablerowid . "2' readonly='true' style='border: none; border-color: transparent; background-color: transparent;' name='selected-text-2' value='$row[heroName2]'></td><td style='border: 1px solid black;'> <input type='text' id='selected-text-" . $tablerowid . "3' readonly='true' style='border: none; border-color: transparent; background-color: transparent;' name='selected-text-3' value='$row[heroName3]'></td><td style='border: 1px solid black;'> <input type='text' id='selected-text-" . $tablerowid . "4' readonly='true' style='border: none; border-color: transparent; background-color: transparent;' name='selected-text-4' value='$row[heroName4]'></td><td style='border: 1px solid black;'><input type='text' id='selected-text-" . $tablerowid . "5' readonly='true' style='border: none; border-color: transparent; background-color: transparent;' name='selected-text-5' value='$row[heroName5]'></td><td style='border: 1px solid black;'> <input type='text' id='selected-text-" . $tablerowid ."6' readonly='true' style='border: none; border-color: transparent; background-color: transparent;' name='selected-text-6' value='$row[heroName6]'></td></tr></table>";
				$tablerowid++;
				} 
			} else {
				echo "0 results";
}

			echo "";

			$conn->close();
			
			?>
			
			
			
			
			
			
			
			
			</div>
		</div>
		<div class="col" > 
			<div></div>
		</div>
	</div>
</div>

</div>
<form action="manage-teams-deletion.php" method="post">
<div class="container" id="assemble" style="font-style:italic; font-size:40px;">
	<div class="row">
	<div class="col" > 
		</div>
		<div class="col" > 
			<input type="text" id="deletableRows" name="deletableRows" size="35"; style="font-style:italic; font-size:40px; border: 2px; border-color: white; padding: 15px; background-color: white;" placeholder="Rows to delete (1,13,35,etc.)">
		</div>
		<div class="col" > 
		</div>
	</div>
</div>

<div class="container" id="assemble" style="font-style:italic; font-size:40px;">
	<div class="row">
	<div class="col" > 
		</div>
		<div class="col" > 
			<input type="submit" style="font-style:italic; font-size:40px; color:white; border: none; border-color: transparent; padding: 15px; background-color: transparent;" value="Send input!">
		</div>
		<div class="col" > 
		</div>
	</div>
</div>
</form>

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
</html>
</body>
</html>