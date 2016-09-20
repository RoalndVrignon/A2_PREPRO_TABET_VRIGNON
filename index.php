<!DOCTYPE html>
<html lang="en">
	<header>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://malsup.github.com/jquery.cycle2.js"></script>
		<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">


		<title>IIM - Leonard de Vinci</title>
<div id="background"></div>
<div class="navbar navbar-fixed-top">
  <nav class="navbar-inner header">
      <div class="brand">
      <img class="logo" src="images/logo.png" height="80px">
      <ul class="nav pull-right">
		        <li>
		          	<a class="nav-link">
		            	VIE ETUDIANTE
		          	</a>
		        </li>

		        <li>
		          	<a class="nav-link">
		            	MODELS
		          	</a>
		        </li>

		        <li>
		          	<a class="nav-link">
		            	PLACES
		          	</a>
		        </li>

		        <li class="dropdown">
		          	<a class="dropdown-toggle nav-link" data-toggle="dropdown">
		            	DROP
		          	</a> 
        		</li>
      </ul>
      </div>
    </div>
   </nav>
  </div>    
<!--/cloud footer :)
-->

<br/>
<br/>
<br/>
<br/>



	</header>

	<body>
	<br>
	<br>
		<div class="bandeau">
		<br>
			<div class="cycle-slideshow"  >
				<img class="displayed" src="./images/image1.jpg" alt="leonard" padding=10px/>
				<img class="displayed" src="./images/image2.jpg" alt="leonard2"/>
				<img class="displayed" src="./images/image3.jpg" alt="ordinateurs"/>
				<img class="displayed" src="./images/image4.jpg" alt="amphitêatre"/>
			</div>
			<br>
		</div>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta tenetur illum minus quos architecto exercitationem temporibus maxime sint repellat. Voluptas suscipit quas sequi nulla deserunt eaque adipisci inventore maiores culpa.
		</p>
	<br>
	<br>

	<div class="gallery">
			<?php

			echo '<div class="titre"><h1> Les Différents axes </h1></div>';

			include 'tableau.php';
			foreach ($axe as $key => $value){ 
			echo '<img src="'.$value['img'].'"/>';
			}
			?>
	</div>		
	</body>
</html>