//this template writes on timeline
postTemplate = ({DateCreated,content,PostID,CreatorID,Name}) => `
<div class="container a-post">
    <div class="post-main row">
        <div class="cols col-md-2 col-3"> <img src="../images/user/${CreatorID}.jpg" class="profile-picture-post  profile-picture-post-${CreatorID}"
        onerror="defaultImageProfile('${CreatorID}')" alt=""></div>
        <div class="cols col-md-10 col-8"> <span>${Name}</span> at <span>${DateCreated}</span> writes..</div>
        <p class="container">${content}</p>  
    </div>
    <div class="container comment-body">
        <div class="row list-of-comment">
        </div>
    </div>
    <div class="container bg-secondary add-comment">
        <form class="col col-12" id="CommentForm">
            <textarea class="form-control" rows="4" id="${PostID}"  placeholder="Write something"></textarea> 
            <button id="CreateComment" data="${PostID}" class="btn btn-primary btn-block">Post</button>
        </form>
    </div>
</div>

<script>
    $(document).ready(()=>{
        $("button[data='${PostID}']").prop("disabled", true);

        $('#${PostID}').on('keydown change keyup',()=>{
            if( $('#${PostID}').val() == ""){
                $("button[data='${PostID}']").prop("disabled", true);
            }else{
                $("button[data='${PostID}']").prop("disabled", false);
            }
        })
    })
    
    $("button[data='${PostID}']").click((e)=>{
        e.preventDefault();
        
        let data={
            PostID:'${PostID}',
            content: $('#${PostID}').val()
        }
        console.log(data);
        $.post("../controller.php",
            {'addComment' : data},
            function (response){ 
                if(response){
                    window.location = window.location;
                }
        })
        $('#${PostID}').val("")
        $("button[data='${PostID}']").prop("disabled", true);
    })

</script>
`;



// this template writes on list-of-comment
commentTemplate = ({NamaLengkap,DateCreated,Content,CreatorID}) => `
<div class="a-comment container">
<div class="row">
    <div class="col-md-2 col-3" ><img src="../images/user/${CreatorID}.jpg" class="profile-picture-post profile-picture-post-${CreatorID}"
    onerror="defaultImageProfile('${CreatorID}')"
    alt=""></div>
    <div class="col-md-10 col-9"><span>${NamaLengkap}</span> at <span><br>${DateCreated}</span> says...</div>
    </div>
    <div class="col-sm-12 col-ml-6">
     <p>
         ${Content}
    </p>
    </div>
</div>
</div>    
`;

function defaultImageProfile(input){
    var select=".profile-picture-post-"+input;
    $(select).attr("src","../default/user.jpg");
}

