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





<div class="container">
	<div class="row">
		<div class="col" >     
			<div>
			<?php 

			//Function sends debug data do the browser's console
			
				function debug_to_console( $data ) {
					if ( is_array( $data ) )
					$output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
					else
					$output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
					echo $output;
				}

				//function to save the team to database table
				function team_save() {

				// get the values entered in the team-rater.php's form, which consist of the Heros' names originally received from index.php
				$hero1 = $_POST['selected-text-0'];
				$hero2 = $_POST['selected-text-02'];
				$hero3 = $_POST['selected-text-03'];
				$hero4 = $_POST['selected-text-04'];
				$hero5 = $_POST['selected-text-05'];
				$hero6 = $_POST['selected-text-06'];
		
		
		


				$link = mysqli_connect("localhost", "Mursu", "KkU0MFGKZqYUbbEf", "teams");
				
				$servername = "localhost";
				$username = "Mursu";
				$password = "KkU0MFGKZqYUbbEf";
				$dbname = "teams";
				
				// Check connection
				if($link === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
				}
				
				
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				} 
					

				//Prepare a select statement, and query to the database table
				$sql = "SELECT * FROM myteams";
				$result = $conn->query($sql);	
				
				//check if the database is "full", as in has 30 rows of data; if it is, informs the user to delete some teams to make room
				if($result->num_rows >= 30){
					echo ("Team storage full, delete some teams in Manage Teams page.");

				} else {
					// if there's space for team to be saved, inserts Hero names as team into the myteams-table. Each team is given an id by auto-increment key
				$sql = "INSERT INTO myteams (heroName1, heroName2, heroName3, heroName4, heroName5, heroName6) VALUES
									('$hero1', '$hero2', '$hero3', '$hero4', '$hero5', '$hero6')";

				
				//checks and reports if team save was succesfull or not
				if(mysqli_query($link, $sql)){
					debug_to_console( "Records added successfully." );
					echo ("Team saved successfully.");
				} else{
					debug_to_console( "ERROR: Could not able to execute $sql. " . mysqli_error($link) ); 
					echo ("Error saving team, please try again later.");
					}	
				}
				
			}
			//calls the function to be executed
			team_save();

			?>
			
			
			</div>
		</div>
	</div>
</div>

</div>

<!--Element is taken from another file with include-function -->

<?php include 'quick-navigation2.php';?>

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