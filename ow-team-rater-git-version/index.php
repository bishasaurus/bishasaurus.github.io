<html>



<header>

<!--Links to various script and style resources-->

<script src="jquery-1.9.0.min.js" type="text/javascript"></script> 
<script src="jquery.dd.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="dd.css" />
</header>

<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<link rel="stylesheet"  href="mystyle.css">

<!--Checks if user is using mobile browser, if they are, directs user to mobile version on home page-->
<?php
if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) {
   header( 'Location: index-mobile.php' );
}
?>

<?php
// Initialize the session
session_start();
?>


	<!-- IconSelect functionality -->
        <link rel="stylesheet"  href="css/lib/control/iconselect.css" >
        <script type="text/javascript" src="lib/control/iconselect.js"></script>
        
        <script type="text/javascript" src="lib/iscroll.js"></script>
        
        <script>
		
		
		
        var iconSelect; 
		
		<!--The following function pics icons' values and enters them into the corresponding input fields. Those input fields' values will be sent to the team rater-->
		
        window.onload = function(){
			
		    selectedText = document.getElementById('selected-text');
			 
            
			   document.getElementById('my-icon-select').addEventListener('changed', function(e){
               selectedText.value = iconSelect.getSelectedValue();
			   });
			   
			   
			selectedText2 = document.getElementById('selected-text-2');
			   
			   document.getElementById('my-icon-select-2').addEventListener('changed', function(e){
               selectedText2.value = iconSelect2.getSelectedValue();
			   });
			   
			
			selectedText3 = document.getElementById('selected-text-3');
			   
			   document.getElementById('my-icon-select-3').addEventListener('changed', function(e){
               selectedText3.value = iconSelect3.getSelectedValue();
			   });
			   
			
			selectedText4 = document.getElementById('selected-text-4');
			   
			   document.getElementById('my-icon-select-4').addEventListener('changed', function(e){
               selectedText4.value = iconSelect4.getSelectedValue();
			   });
			   

			selectedText5 = document.getElementById('selected-text-5');
			   
			   document.getElementById('my-icon-select-5').addEventListener('changed', function(e){
               selectedText5.value = iconSelect5.getSelectedValue();
			   });
			   

			selectedText6 = document.getElementById('selected-text-6');
			   
			   document.getElementById('my-icon-select-6').addEventListener('changed', function(e){
               selectedText6.value = iconSelect6.getSelectedValue();
			   });
			   
		  <!--Determines the attributes of the six icon select drop down menus-->

            iconSelect = new IconSelect("my-icon-select", 
                {'selectedIconWidth':120,
                'selectedIconHeight':120,
                'selectedBoxPadding':1,
                'iconsWidth':60,
                'iconsHeight':60,
                'boxIconSpace':1,
                'vectoralIconNumber':14,
                'horizontalIconNumber':2});
		
			iconSelect2 = new IconSelect("my-icon-select-2", 
                {'selectedIconWidth':120,
                'selectedIconHeight':120,
                'selectedBoxPadding':1,
                'iconsWidth':60,
                'iconsHeight':60,
                'boxIconSpace':1,
                'vectoralIconNumber':14,
                'horizontalIconNumber':2});
	
				
			iconSelect3 = new IconSelect("my-icon-select-3", 
                {'selectedIconWidth':120,
                'selectedIconHeight':120,
                'selectedBoxPadding':1,
                'iconsWidth':60,
                'iconsHeight':60,
                'boxIconSpace':1,
                'vectoralIconNumber':14,
                'horizontalIconNumber':2});
				
			iconSelect4 = new IconSelect("my-icon-select-4", 
               {'selectedIconWidth':120,
                'selectedIconHeight':120,
                'selectedBoxPadding':1,
                'iconsWidth':60,
                'iconsHeight':60,
                'boxIconSpace':1,
                'vectoralIconNumber':14,
                'horizontalIconNumber':2});
				
			iconSelect5 = new IconSelect("my-icon-select-5", 
                {'selectedIconWidth':120,
                'selectedIconHeight':120,
                'selectedBoxPadding':1,
                'iconsWidth':60,
                'iconsHeight':60,
                'boxIconSpace':1,
                'vectoralIconNumber':14,
                'horizontalIconNumber':2});
				
			iconSelect6 = new IconSelect("my-icon-select-6", 
              {'selectedIconWidth':120,
                'selectedIconHeight':120,
                'selectedBoxPadding':1,
                'iconsWidth':60,
                'iconsHeight':60,
                'boxIconSpace':1,
                'vectoralIconNumber':14,
                'horizontalIconNumber':2});
		
	
			<!--Determines the icon select drop down menus items, their pictures and values-->
				
            var icons = [];
            icons.push({'iconFilePath':'pics/Icon-Ana.png', 'iconValue':'Ana'});
            icons.push({'iconFilePath':'pics/Icon-Bastion.png', 'iconValue':'Bastion'});
            icons.push({'iconFilePath':'pics/Icon-Brigitte.png', 'iconValue':'Brigitte'});
            icons.push({'iconFilePath':'pics/Icon-D.va.png', 'iconValue':'D.va'});
            icons.push({'iconFilePath':'pics/Icon-Doomfist.png', 'iconValue':'Doomfist'});
            icons.push({'iconFilePath':'pics/Icon-Genji.png', 'iconValue':'Genji'});
            icons.push({'iconFilePath':'pics/Icon-Hanzo.png', 'iconValue':'Hanzo'});
            icons.push({'iconFilePath':'pics/Icon-Junkrat.png', 'iconValue':'Junkrat'});
            icons.push({'iconFilePath':'pics/Icon-Lucio.png', 'iconValue':'Lucio'});
            icons.push({'iconFilePath':'pics/Icon-McCree.png', 'iconValue':'McCree'});
            icons.push({'iconFilePath':'pics/Icon-Mei.png', 'iconValue':'Mei'});
            icons.push({'iconFilePath':'pics/Icon-Mercy.png', 'iconValue':'Mercy'});
            icons.push({'iconFilePath':'pics/Icon-Moira.png', 'iconValue':'Moira'});
            icons.push({'iconFilePath':'pics/Icon-Orisa.png', 'iconValue':'Orisa'});
			icons.push({'iconFilePath':'pics/Icon-Pharah.png', 'iconValue':'Pharah'});
			icons.push({'iconFilePath':'pics/Icon-Reaper.png', 'iconValue':'Reaper'});
			icons.push({'iconFilePath':'pics/Icon-Reinhardt.png', 'iconValue':'Reinhardt'});
            icons.push({'iconFilePath':'pics/Icon-Roadhog.png', 'iconValue':'Roadhog'});
			icons.push({'iconFilePath':'pics/Icon-Soldier 76.png', 'iconValue':'Soldier 76'});
			icons.push({'iconFilePath':'pics/Icon-Sombra.png', 'iconValue':'Sombra'});
			icons.push({'iconFilePath':'pics/Icon-Symmetra.png', 'iconValue':'Symmetra'});
			icons.push({'iconFilePath':'pics/Icon-Torbjorn.png', 'iconValue':'Torbjorn'});
			icons.push({'iconFilePath':'pics/Icon-Tracer.png', 'iconValue':'Tracer'});
			icons.push({'iconFilePath':'pics/Icon-Widowmaker.png', 'iconValue':'Widowmaker'});
			icons.push({'iconFilePath':'pics/Icon-Winston.png', 'iconValue':'Winston'});
			icons.push({'iconFilePath':'pics/Icon-Wrecking Ball.png', 'iconValue':'Wrecking Ball'});
			icons.push({'iconFilePath':'pics/Icon-Zarya.png', 'iconValue':'Zarya'});
			icons.push({'iconFilePath':'pics/Icon-Zenyatta.png', 'iconValue':'Zenyatta'});
			
			<!--Refreshes the displayed picture on the icon select field after selection -->
			
            iconSelect.refresh(icons);
			iconSelect2.refresh(icons);
			iconSelect3.refresh(icons);
			iconSelect4.refresh(icons);
			iconSelect5.refresh(icons);
			iconSelect6.refresh(icons);
            


        };
            
        </script>


</head>


<body>

<!--Element is taken from another file with include-function -->

<?php include 'index-header.php';?>

<br>

<!-- -->

<div class="container" id="main_content">
  <div class="row">
    <div class="col" id="main_text">
	<br>
      <h1 style="font-style:italic; font-family: owFont;">Welcome</h1>
	  <!--Element is taken from another file with include-function -->
	  <?php include 'welcome-text.php';?>
	</div>
    <div class="col" id="extra_content">
	<br>
	  <h1 style="font-style:italic; font-family: owFont;">How to use</h1>
	  <!--Element is taken from another file with include-function -->
	  <?php include 'howto-text.php';?>
    <br>
	<br>
   </div>
  </div>
</div>

<br>

<div class="container" id="assemble" style="font-style:italic; font-size:40px;">
	<div class="row">
	<div class="col" > 
		</div>
		<div class="col" > 
			Assemble your team:
		</div>
		<div class="col" > 
		</div>
	</div>
</div>


<form action="team-rater.php" method="post">
<div class="container">
	<div class="row">
		<div class="col" >     
			<div id="my-icon-select"></div>
		</div>
		<div class="col" > 
			<div><input type="text" class="selected-text" id="selected-text" readonly="true" style="border: none; border-color: transparent; background-color: transparent;" name="selected-text"></div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col" >     
			<div id="my-icon-select-2"></div>
		</div>
		<div class="col" > 
			<div><input type="text" class="selected-text" id="selected-text-2" readonly="true" style="border: none; border-color: transparent; background-color: transparent;" name="selected-text-2"></div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col" >     
			<div id="my-icon-select-3"></div>
		</div>
		<div class="col" > 
			<div><input type="text" class="selected-text" id="selected-text-3" readonly="true" style="border: none; border-color: transparent; background-color: transparent;" name="selected-text-3"></div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col" >     
			<div id="my-icon-select-4"></div>
		</div>
		<div class="col" > 
			<div><input type="text" class="selected-text" id="selected-text-4" readonly="true" style="border: none; border-color: transparent; background-color: transparent;" name="selected-text-4"></div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col" >     
			<div id="my-icon-select-5"></div>
		</div>
		<div class="col" > 
			<div><input type="text" class="selected-text" id="selected-text-5" readonly="true" style="border: none; border-color: transparent; background-color: transparent;" name="selected-text-5"></div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col" >     
			<div id="my-icon-select-6"></div>
		</div>
		<div class="col" > 
			<div><input type="text" class="selected-text" id="selected-text-6" readonly="true" style="border: none; border-color: transparent; background-color: transparent;" name="selected-text-6"></div>
		</div>
	</div>
</div>

<div class="container" id="assemble" style="font-style:italic; font-size:40px;">
	<div class="row">
	<div class="col" > 
		</div>
		<div class="col" > 
			<input type="submit" id="assemble" style="font-style:italic; font-size:40px; color:white; border: none; border-color: transparent; padding: 15px; background-color: transparent;" value="Rate team!">
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
		<!--Element is taken from another file with include-function -->
			<?php include 'copyright.php';?>
		</div>
		<div class="col" > 
		</div>
	</div>
</div>

</body>

</html>