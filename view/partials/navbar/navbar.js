$(document).ready(()=>{
    $.post("../controller.php",
    {'getFriends' : 1},
    function (response){ 
      let d=JSON.parse(response);
      $('#listOfFriends').html(d.map(friends).join(''));
    }) 
    
  })

friends=({NamaLengkap,UserID})=>`
    <a click=getValue() class="dropdown-item" id="${UserID}">
    <span>${NamaLengkap} </span><span>(@${UserID})</span></a>
    <script>
    $("#${UserID}").click(()=>{
        console.log("${UserID} clicked");
    })
    </script>
    `;