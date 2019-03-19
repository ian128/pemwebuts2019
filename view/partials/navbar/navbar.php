<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" >
    <div class="container">
      <a class="navbar-brand" href="#">Fesbuk</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation" style=""> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Directories</a>
            <div class="dropdown-menu dropdown-menu-left" id="listOfFriends" style="max-height:20em; overflow-y: scroll;">
            </div>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link"><b>Hello, <?php echo $_SESSION['FullName']?></b></a>
          </li>
        </ul>
        <a class="btn navbar-btn mx-2 btn-primary shadowed" href="#download">Logout</a>
      </div>
   </div>
</nav>
<script>
  $(document).ready(()=>{
    $.post("../controller.php",
    {'getFriends' : 1},
    function (response){ 
      let d=JSON.parse(response);
      $('#listOfFriends').html(d.map(friends).join(''));
    }) 
    
  })

friends=({NamaLengkap,UserID})=>`
    <a click=getValue() class="dropdown-item" id="friendEntries" value="${UserID}"><span>${NamaLengkap} </span><span>(@${UserID})</span></a>
    `;
</script>