<?php
    include "../controller.php";
?>
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
    <script src="postTemplate.js"></script>
    <script>
        var login={
            'username': 'email@email.com',
            'password': '1234'
        }

        $(document).ready(()=>{

            $.post("../controller.php",
			{'login' : login},
			function (response){ 
               let result=JSON.parse(response);
               localStorage.setItem("Name",result['NamaDepan']+' '+result['NamaBelakang'])
               $("#FullName").text(result['NamaDepan']+' '+result['NamaBelakang']);
               $("#Bio").text(result['Bio']);
               $("#Kota").text(result['Kota']);
			})

            $.post("../controller.php",
			{'getPost' : 1},
			function (response){ 
                data=JSON.parse(response)
                for(let item of data){
                    delete item[0]
                    delete item[1]
                    delete item[2]
                    delete item[3]
                    item['name']=localStorage.getItem("Name");
                }            
                $(".timeline").html(data.map(postTemplate));
                $.each(data, function(index) {
                    let selector=$(".list-of-comment").eq(index);
                    selector.html(data[index]['comments'].map(commentTemplate));
                });
            })
            
        })

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
    margin-top:10px; padding:40px;
}
.bg-postStatus{
    background-color:#fff;
    margin-top:50px;
    margin-bottom:60px; padding:40px;
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
                <p><b id="FullName">Your Name</b></p>              
                    <p>@yourname</p> 

                    <p id="Bio">Your very nice, keyword-rich bio.</p>
                    <p>
                    <i id="Kota">Your Location</i><br>
                    <i class="" style="color:blue;">Your Website</i>  
                    </p>
                    <h5>list Friend</h5>
                    <ul>
                        <li>Jarwo koat</li>
                        <li>Udin gakKUoat</li>
                        <li>Supri angkot</li>
                    </ul>
                </div>      
            </div>     
            <div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-lg-7 bg-postStatus">
            <div class="row ">
       
                                <div class="col-md-12"> 
                                    <form class="d-form status-textarea active-status-textarea col-md-12">
                                    <textarea class=" md-textarea form-control" id="" rows="2" name="status" style="color:grey;" placeholder="Where are you now that I need ya?"></textarea>
                                    <button type="submit" nama="postStatus" class="float-right btn btn-primary btn-rounded" >Post Dong!</button>
                                    </form>
                                </div>
                        </div>   
                 </div>
        <div class="col-md-8 offset-md-4 col-sm-8 offset-sm-4 col-lg-7 bg-timeLine">
            <div class="row timeline">
            </div>
		</div>
    </body>
</html>
