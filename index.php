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
      <img src="images/logo.png" height="80px">
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
					<div class="cycle-slideshow" >
						<IMG class="displayed" src="./images/image1.jpg" alt="leonard"/>
						<IMG class="displayed" src="./images/image2.jpg" alt="leonard2"/>
						<IMG class="displayed" src="./images/image3.jpg" alt="ordinateurs"/>
						<IMG class="displayed" src="./images/image4.jpg" alt="amphitêatre"/>
					</div>
				
				</div>
		</div>		
		<br>
		<br>

			<?php

			echo '<div class="titre"> Les Différents axes </div>';
			include 'tableau.php';
			foreach ($axe as $key => $value){ 
			echo '<img src="'.$value['img'].'"></div>';
			}
			echo '</div>';
			?>
			
	</body>
</html>