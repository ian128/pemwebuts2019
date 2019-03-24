<?php
    include "../controller.php";
    include '../include/LibraryRequirements.php';    
    include 'partials/navbar/navbar.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Friend's Profile </title>
</head>

<body class="bg-main">
    <div class="container-fluid ">
        <div class="row ">
            <img class="cover" src="../default/cover.jpg">
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-lg-2 col-6">
              	<div class="row">
              		<img src="http://malvorlagen-fensterbilder.de/bilder-bunt/Micky-Maus.jpg"
                      class="profile" style="" caption="Tap/click to change profile picture"
                      onerror="defaultImage()">
            	</div>
                <div class="info">
                <h3><b id="FullName">Your Name</b></h3> 
                    <p id="UserName">Your very nice, keyword-rich bio.</p>
                    <p>
                    <i id="Kota">Your Location</i><br>
                    </p>
                     </div>                  
              </div>
              <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-lg-7 ">
                 <div class=" bg-timeLine">
                     <div class="row timeline">
                 </div>
		    </div>
        </div>
    </div>   
    </body>
</html>
