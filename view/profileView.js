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

    $.post("../controller.php",
    {'getProfile' : '1'},
    function (response){ 
       let result=JSON.parse(response);
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
        for(let item of data){
            delete item[0]
            delete item[1]
            delete item[2]
            delete item[3]
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

    $(".profile").click(()=>{
        $("#ProfilePictureContainer").click();
    })
    $("#ProfilePictureContainer").change(()=>{
        $("#changeProfilePicture").submit();
    })
})

function defaultImage(){
    $(".profile").attr("src","../default/user.jpg");
}