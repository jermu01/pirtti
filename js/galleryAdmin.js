window.addEventListener('load', getAllPosts); //load all images
document.getElementById('posts-container').addEventListener('click', postAction); //button method (delete button)

//ajax request
function getAllPosts(){
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
      data = JSON.parse(this.responseText);
      console.log(data);
      showPosts(data);
    }
    //get data
    ajax.open("GET", "../backend/getAllImagesAdmin.php"); //included SQL-database script
    ajax.send();
  }


  //create for each post card looking style 
  function showPosts(data){
    data.forEach(post => {
      let postHtml = `
      <strong><div data-postid=${post.id} class="card border-primary mb-3" style="max-width: 20rem;"></strong>
        <div class="card-header"> ${post.name}</div>
        <div class="card-body">
          <h4 class="card-title">${post.title}</h4>
          <p class="card-text">${post.text}</p>
          <img src="../img/uploads/${post.file}" width="200px;"/>
          <br><br>
          <button type="button" class="btn btn-danger delete">Poista</button>
      </div>`;
      document.getElementById("posts-container").innerHTML += postHtml
    });
  }


  //delete image
  function postAction(event){
    console.log(event.target);
    const postId = event.target.parentElement.parentElement.dataset.postid; //target every image id

        //delete button
        if (event.target.classList.contains('delete')){
          alert("Poistit kuvan!"); //alert message
          deletePost(postId); //delete post for it
          location.reload(); //refresh page
          }
      }
      //delete post with id
      function deletePost(id) {
        let ajax = new XMLHttpRequest();
        ajax.onload = function(){
          data = JSON.parse(this.responseText);
          console.log(data);
        }
        //get data
        ajax.open("GET", "../backend/deletePostAdmin.php?id=" + id); //included SQL-database script + get image id
        ajax.send();
      }