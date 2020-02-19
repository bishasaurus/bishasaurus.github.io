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


				
		
		
			function team_delete() {


				// get the values entered into manage-teams.php's input field, and sanitize if before using the value for following functions
				$preDeleteRows = $_POST['deletableRows'];
				$deleteRows = filter_var($preDeleteRows, FILTER_SANITIZE_URL);
			
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
					
				$sql = "DELETE from myteams WHERE id IN ($deleteRows)"; 
				$result = $conn->query($sql);	
				
				
				//tries to delete teams declared in manage-teams.php from myteams-table, and reports whether the process was succesful or not
				if(mysqli_query($link, $sql)){
					debug_to_console( "Teams deleted succesfully." );
					echo ("Teams deleted succesfully.");
				} else{
					debug_to_console( "ERROR: Could not able to execute $sql. " . mysqli_error($link) ); 
					echo ("Error deleting team. Please input the deletable row numbers with commas, for example: 15,31,64");
					}	
			}
			
			//calls the function to be executed
			team_delete();
			
			?>
			
			
			
			
			
			
			
			
			</div>
		</div>
	</div>
</div>

</div>
<!--Element is taken from another file with include-function -->
<?php include 'quick-navigation.php';?>

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
</html>
</body>
</html>