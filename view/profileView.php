<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../lib/bootstrap/bootstrap.min.css">
    <script src="../lib/bootstrap/bootstrap.min.js"></script>
    <script src="../lib/jquery-3.3.1.min.js"></script>
    
</head>
<style>
    .cover {
    display:block;
    position:relative;
    width: 1500px;
        height: 500px;
        padding: 0px;
    overflow:hidden;
    z-index:1;
}

    .profile {
    display:block;
    position:relative;
    border:#ffffff solid 3px;
    border-radius:5px;
    width:200px;
    height:200px;
    margin: -100px 0 10px 100px;
    z-index:999;
}

.info {
    display:block;
    position:relative;
    width:200px;
    height:200px;
    margin: 0px 0 10px 100px;
    z-index:999;
}
    .bg-main{
        background-color:#e9ebee;
    }
    .bg-timeLine{
        background-color:#fff;
    }
    .profile-picture-post{
    	padding:0px;
    	width:64px;
    	height:64px;
    	border: black solid;
    }
    .a-comment{
    	background-color:#dddddd;
    	padding: 1.0em;
    }
    .add-comment{
    
    }
    .a-post{
    	padding: 1.0em;
    }
    .comment-body{
    
    }
    
    textarea{
    	resize:none;
    }
    
    form{
    	padding: 1.0em;
    }
    
</style>
<body class="bg-main">
    <div class="container-fluid ">
        <div class="row ">
            <img class="cover" src="https://www.londoninstereo.com/lisnew/wp-content/uploads/2016/11/HONNE-Aug-2015-pic.jpg" alt="">
        </div>
    
        <div class="row">
            <div class="col-md-4 col-sm-4 col-lg-2 col-6">
              	<div class="row">
              		<img src="http://malvorlagen-fensterbilder.de/bilder-bunt/Micky-Maus.jpg" class="profile" style="" caption="Tap/click to change profile picture">
            	</div>
                <div class="info">
                <p><b>Your Name</b></p>              
                    <p>@yourname</p> 

                    <p>Your very nice, keyword-rich bio.</p>
                    <p>
                    <i class="">Your Location</i><br>
                    <i class="" style="color:blue;">Your Website</i>  
                    </p>
                   
                </div>      
            </div>        
        <div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-lg-7 bg-timeLine" style="margin-top:50px; padding:40px;">
                <div class="row timeline">
                        <div class="cols a-post">
                        	<div class="post-main">
                            <img src="http://malvorlagen-fensterbilder.de/bilder-bunt/Micky-Maus.jpg" class="profile-picture-post" alt="">
                                <span>Your Name</span> at <span>time</span> writes..
                            <p>Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla
                            Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla
                            Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla 
                            Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla
                            Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla
                            Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla 
                           Bla bla bla bla
                           </p>  
                           </div>
                           <div class="container comment-body">
                           	<div class="row">
                           			<div class="a-comment col-12">
                           				 <div class="row col-sm-12 col-ml-3">
                           				 	<div class="col-12">
                           				 	<img src="http://malvorlagen-fensterbilder.de/bilder-bunt/Micky-Maus.jpg" class="profile-picture-post" alt="">
                           				  	<span>Your Name</span> at <span>time</span> says...
                           				 	</div>
                           				 </div>
                           				 <div class="col-sm-12 col-ml-6">
                           				 	<p>
                           				 	Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                           				 	Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                           				 	when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                           				 	</p>
                           				 </div>
                           		</div>
                           		<div class="col col-12 bg-secondary add-comment">
                           		<form action="">
                            		<textarea class="form-control" rows="4" id="comment" placeholder="Write something"></textarea>
                            		<button type="submit" class="btn btn-primary btn-block" >Post</button>
                           		</form>
                           		</div>
                        	</div>    
           
                    </div>
                    </div>
                    
				</div>
		</div>
		</body>
</html>