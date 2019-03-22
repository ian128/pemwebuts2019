<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" >
    <div class="container">
      <a class="navbar-brand" href="#">Pesbuk</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation" style=""> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Directories</a>
            <div class="dropdown-menu dropdown-menu-left" id="listOfFriends" style="max-height:20em; overflow-y: scroll;">
            </div>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link myprofile" href="profile.php"><b>Hello, <?php echo $_SESSION['FullName']?></b></a>
          </li>
        </ul>
        <a class="btn navbar-btn mx-2 btn-primary shadowed" href="#download">Logout</a>
      </div>
   </div>
</nav>
<script src="partials/navbar/navbar.js"></script>

<script>
  $(document).ready(()=>{
    $(".myprofile").click(()=>{
      $.post("../controller.php",
        {'MyProfile' : "1"},
        function (response){ 
            
        })
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