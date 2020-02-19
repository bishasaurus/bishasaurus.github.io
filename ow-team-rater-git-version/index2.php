<html>

<head>
<meta charset="UTF-8">
<script src="jquery-1.9.0.min.js" type="text/javascript"></script>
<script src="jquery.dd.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="dd.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!--<script src="script.js"></script> -->
<link rel="stylesheet" type="text/css" href="mystyle.css">

	<!-- IconSelect functionality -->
        <link rel="stylesheet" type="text/css" href="css/lib/control/iconselect.css" >
        <script type="text/javascript" src="lib/control/iconselect.js"></script>
        
        <script type="text/javascript" src="lib/iscroll.js"></script>
        
        <script>
		
       var iconSelect;

        window.onload = function(){

            iconSelect = new IconSelect("my-icon-select", 
                {'selectedIconWidth':23,
                'selectedIconHeight':23,
                'selectedBoxPadding':1,
                'iconsWidth':48,
                'iconsHeight':48,
                'boxIconSpace':1,
                'vectoralIconNumber':2,
                'horizontalIconNumber':6});

            var icons = [];
            icons.push({'iconFilePath':'images/icons/1.png', 'iconValue':'1'});
            icons.push({'iconFilePath':'images/icons/2.png', 'iconValue':'2'});
            icons.push({'iconFilePath':'images/icons/3.png', 'iconValue':'3'});
            icons.push({'iconFilePath':'images/icons/4.png', 'iconValue':'4'});
            icons.push({'iconFilePath':'images/icons/5.png', 'iconValue':'5'});
            icons.push({'iconFilePath':'images/icons/6.png', 'iconValue':'6'});
            icons.push({'iconFilePath':'images/icons/7.png', 'iconValue':'7'});
            icons.push({'iconFilePath':'images/icons/8.png', 'iconValue':'8'});
            icons.push({'iconFilePath':'images/icons/9.png', 'iconValue':'9'});
            icons.push({'iconFilePath':'images/icons/10.png', 'iconValue':'10'});
            icons.push({'iconFilePath':'images/icons/11.png', 'iconValue':'11'});
            icons.push({'iconFilePath':'images/icons/12.png', 'iconValue':'12'});
            icons.push({'iconFilePath':'images/icons/13.png', 'iconValue':'13'});
            icons.push({'iconFilePath':'images/icons/14.png', 'iconValue':'14'});
            
            iconSelect.refresh(icons);

        };
            
        </script>


</head>


<body>



<div class="container" id="navigation">
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand mb-0" href="#">
    <img src="pics/Overwatch_circle_logo.png" width="50" height="50" class="d-inline-block align-top" alt="">
    <i>Overwatch Team Rater</i>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i>Home</i> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i>Features</i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i>Pricing</i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i>Disabled</i></a>
      </li>
    </ul>
  </div>
</nav>
</div>

<br>

<div class="container" id="main_content">
  <div class="row">
    <div class="col" id="main_text">
	<br>
      <h1>Welcome</h1>
	  
	  <div id="my-icon-select"></div>
	  
    </div>
    <div class="col" id="extra_content">
	<br>
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.""Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.""
	  <br>
	  <br>
   </div>
  </div>
</div>

    <div id="my-icon-select"></div>


</body>

</html>