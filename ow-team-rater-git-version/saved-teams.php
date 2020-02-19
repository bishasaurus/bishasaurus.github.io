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
      <li class="nav-item active">
        <a class="nav-link" href="saved-teams.php"><i>Saved teams</i> <span class="sr-only">(current)</span></a>
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

<div class="container" id="main_content">

<br>
<p>In this page, you can view saved teams' rating again. To do so, choose the team you desire by scrolling to right and pressing <span style="color:orange;">Rate Team</span> -button on the same row as the team which rating you want to view.</p>




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

			//checks if there are any rows in the myteams-table. if there is, prints the first 30 rows from the table into own form and HTML table each, so that the team's Heroes' names can easily be transfered into team-rater2.php
		
			echo ""; 
			$tablerowid = 0;
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {   //Creates a loop to loop through results
				echo "<form action='team-rater2.php' method='post'><table cellpadding='3' style='border: 1px solid black;'><tr style='border: 1px solid black;'><td style='border: 1px solid black;'> <input type='text' id='selected-text-" . $tablerowid . "' readonly='true' style='border: none; border-color: transparent; background-color: transparent;' name='selected-text' value='$row[heroName1]'></td><td style='border: 1px solid black;'><input type='text' id='selected-text-" . $tablerowid . "2' readonly='true' style='border: none; border-color: transparent; background-color: transparent;' name='selected-text-2' value='$row[heroName2]'></td><td style='border: 1px solid black;'> <input type='text' id='selected-text-" . $tablerowid . "3' readonly='true' style='border: none; border-color: transparent; background-color: transparent;' name='selected-text-3' value='$row[heroName3]'></td><td style='border: 1px solid black;'> <input type='text' id='selected-text-" . $tablerowid . "4' readonly='true' style='border: none; border-color: transparent; background-color: transparent;' name='selected-text-4' value='$row[heroName4]'></td><td style='border: 1px solid black;'><input type='text' id='selected-text-" . $tablerowid . "5' readonly='true' style='border: none; border-color: transparent; background-color: transparent;' name='selected-text-5' value='$row[heroName5]'></td><td style='border: 1px solid black;'> <input type='text' id='selected-text-" . $tablerowid ."6' readonly='true' style='border: none; border-color: transparent; background-color: transparent;' name='selected-text-6' value='$row[heroName6]'></td><td> <button type='submit'>Rate Team</button> </td></tr></table></form>";  //$row['index'] the index here is a field name
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
<br>
<div class="container">
	<div class="row">
		<div class="col" > 
		</div>
		<div class="col" > 
		<!--Element is taken from another file with include-function -->
			<?php include 'copyright.php';?>
		</div>
		<div class="col" > 
		</div>
	</div>
</div>
</body>
</html>


