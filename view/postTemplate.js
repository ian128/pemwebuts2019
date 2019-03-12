//this template writes on timeline
const postTemplate = ({name,DateCreated,content}) => `
<div class="container a-post">
    <div class="post-main">
        <img src="http://malvorlagen-fensterbilder.de/bilder-bunt/Micky-Maus.jpg" class="profile-picture-post" alt="">
        <span>You</span> at <span>${DateCreated}</span> writes..
        <p>${content}</p>  
    </div>
    <div class="container comment-body">
        <div class="row list-of-comment">
        </div>
    </div>
    <div class="container bg-secondary add-comment">
        <form action="" class="col col-12">
            <textarea class="form-control" rows="4" id="comment" placeholder="Write something"></textarea>
            <button type="submit" class="btn btn-primary btn-block" >Post</button>
        </form>
    </div>
</div>`;

// this template writes on list-of-comment
const commentTemplate = ({NamaLengkap,DateCreated,Content}) => `
<div class="a-comment col-12">
<div class="row col-sm-12 col-ml-3">
    <div class="col-12">
        <img src="http://malvorlagen-fensterbilder.de/bilder-bunt/Micky-Maus.jpg" class="profile-picture-post" alt="">
        <span>${NamaLengkap}</span> at <span>${DateCreated}</span> says...</div>
    </div>
    <div class="col-sm-12 col-ml-6">
     <p>
         ${Content}
    </p>
    </div>
</div>
</div>    
`;
