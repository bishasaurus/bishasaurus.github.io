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