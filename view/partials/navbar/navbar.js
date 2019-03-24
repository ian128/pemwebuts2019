$(document).ready(()=>{
    $.post("../controller.php",
    {'getFriends' : 1},
    function (response){ 
      let d=JSON.parse(response);
      $('#listOfFriends').html(d.map(friends).join(''));
    }) 
    
    $("#logout").click(()=>{
      $.post("../controller.php",
      {'logout' : 1},
      function (response){ 
        document.location.href="login";
      }) 
    })
    
  })

friends=({NamaLengkap,UserID})=>`
    <a click=getValue() class="dropdown-item" id="${UserID}">
    <span>${NamaLengkap} </span><span>(@${UserID})</span></a>

    <script>
    $("#${UserID}").click(()=>{
        $.post("../controller.php",
        {'VisitFriend' : "${UserID}"},
        function (response){ 
          document.location.href="friends.php"
        }) 
    })
    </script>
    `;