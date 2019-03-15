<?php
    include "../controller.php";
    var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../lib/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="../lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="extra.css">
    <script src="../lib/bootstrap/bootstrap.min.js"></script>
    <script src="postTemplate.js"></script>
    <script>
        var login={
            'username': 'email@email.com',
            'password': '1234'
        }
        $(document).ready(()=>{

            //prep si form status
            $("#CreatePost").prop("disabled", true);
            $('#NewPostContent').on('keydown change keyup',()=>{
                if( $('#NewPostContent').val() == ""){
                    $("#CreatePost").prop("disabled", true);
                }else{
                    $("#CreatePost").prop("disabled", false);
                }
            })

            //login procedure
            $.post("../controller.php",
			{'login' : login},
			function (response){ 
               let result=JSON.parse(response);
               console.log(result);
               localStorage.setItem("Name",result['NamaDepan']+' '+result['NamaBelakang']);
               $(".profile").attr("src","../images/user/"+result['UserID']+".jpg");
               $("#FullName").text(result['NamaDepan']+' '+result['NamaBelakang']);
               $("#Bio").text(result['Bio']);
               $("#Kota").text(result['Kota']);
               $("#UserName").text('@'+result['UserID']);
			})

            //tampilkan semua post yang dimiliki oleh user tersebut
            $.post("../controller.php",
			{'getPost' : 1},
			function (response){ 
                data=JSON.parse(response)
                console.log(data);
                for(let item of data){
                    delete item[0]
                    delete item[1]
                    delete item[2]
                    delete item[3]
                    item['name']=localStorage.getItem("Name");
                }            
                $(".timeline").html(data.map(postTemplate).join(''));

                $.each(data, function(index) {
                    let selector=$(".list-of-comment").eq(index);
                    selector.html(data[index]['comments'].map(commentTemplate));
                });
            }) 
            //bikin post baru
            $("#CreatePost").click((e)=>{
                let temp=$('#NewPostContent').val();
                $.post("../controller.php",
                    {'NewPost' : temp },
                    function (response){ 
                        if(response)  window.location = window.location;
                    })
            })
            
            $("#CreatePost").click((e)=>{
                let temp=$('#NewPostContent').val();
                $.post("../controller.php",
                    {'NewPost' : temp },
                    function (response){ 
                        if(response)  window.location = window.location;
                    })
            })

            $(".profile").click(()=>{
                $("#ProfilePictureContainer").click();
            })
            $("#ProfilePictureContainer").change(()=>{
                $("#changeProfilePicture").submit();
            })
        })

        window.onscroll = function() {
  		var currentScrollPos = window.pageYOffset;
 		if (currentScrollPos >= 550) {
 			$(".navbar").fadeOut()
 		} else {
 			$(".navbar").fadeIn()
  		}
  		    prevScrollpos = currentScrollPos;
        }    
    </script>
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
.friendList {
    display:block;
    position:relative;
    width:150px;
    height:200px;
    margin: 0px 0 10px 90px;
    z-index:999;
}
.bg-main{
    background-color:#e9ebee;
}

.bg-timeLine{
    background-color:#fff;
    margin-top:10px; padding:40px;
}
.bg-postStatus{
    background-color:#fff;
    margin-top:50px;
     padding:40px;
    height:200px;
}

.profile-picture-post{
  	padding:0px;
   	width:64px;
   	height:64px;
    border:#ffffff solid 3px;
    border-radius:5px;
    box-shadow: 0px 0px 4px black;
}
.a-comment{
   	background-color:#dddddd;
   	padding: 1.0em;
    transition: 0.5s;
}

.a-comment:hover{
   	background-color:#efefef;
    box-shadow: 0px 0px 8px black;
}

.add-comment{
}

.a-post{
   	padding: 1.0em;
}

.comment-body{}
    
textarea{
    resize:none;
}
    
form{
  	padding: 1.0em;
}
    
.status-textarea textarea.md-textarea:focus:not([readonly]) {
    border-bottom: 1px solid blue;
    box-shadow: 0 1px 0 0 blue;
}
.active-status-textarea.md-form label.active {
    color: #ffa000;
}

</style>
<body class="bg-main">

<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" >
    <div class="container">
      <a class="navbar-brand" href="#">Pingendo</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation" style=""> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-2">
            <a class="nav-link" href="#features">Features</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#reviews">Reviews</a>
          </li>
        </ul>
        <a class="btn navbar-btn mx-2 btn-primary shadowed" href="#download">Download</a>
      </div>
    </div>
  </nav>

    <div class="container-fluid ">
        <div class="row ">
            <img class="cover" src="https://www.londoninstereo.com/lisnew/wp-content/uploads/2016/11/HONNE-Aug-2015-pic.jpg" alt="">
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-lg-2 col-6">
              	<div class="row">
              		<img src="http://malvorlagen-fensterbilder.de/bilder-bunt/Micky-Maus.jpg" class="profile" style="" caption="Tap/click to change profile picture">
                    <form style="visibility:hidden;" id="changeProfilePicture" enctype="multipart/form-data" action="../photoController.php" method="POST">
                        <input class="button" id="ProfilePictureContainer" name="gambar" type='file'>
                    </form>
            	</div>
                <div class="info">
                <h3><b id="FullName">Your Name</b></h3>              
                    <p id="Bio">Your very nice, keyword-rich bio.</p>
                    <p id="UserName">Your very nice, keyword-rich bio.</p>
                    <p>
                    <i id="Kota">Your Location</i><br>
                    </p>
                     </div>  
                     <div class="friendList">
                     <h5>list Friend</h5>
                    <ul>
                        <li>Jarwo koat</li>
                        <li>Udin gakKUoat</li>
                        <li>Supri angkot</li>
                    </ul>    
                </div>
              </div>
              <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-lg-7 ">
                      <div class="bg-postStatus">
                          <div class="row ">
                                <div class="col-md-12"> 
                                    <form class="d-form status-textarea active-status-textarea col-md-12">
                                    <textarea class=" md-textarea form-control" id="NewPostContent" rows="2" name="status" style="color:grey;" placeholder="Where are you now that I need ya?"></textarea>
                                    <input type="button" class="btn btn-primary" id="CreatePost" value="Buat Post Dong!"/>
                                    </form>
                                </div>
                        </div>   
                 </div>
                 <div class=" bg-timeLine">
                     <div class="row timeline">
                 </div>
		    </div>
        </div>
    </div>   
    </body>
</html>
