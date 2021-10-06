window.addEventListener('load', getAllPosts); //load all images

function getAllPosts(){
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
      data = JSON.parse(this.responseText);
      console.log(data);
      showPosts(data); //display all posts
    }
    //get data
    ajax.open("GET", "backend/getAllImages.php"); //included SQL-database script
    ajax.send();
  }

  //create for each post card looking style 
  function showPosts(data){
    data.forEach(post => {
      let postHtml = `
      <strong><div style="max-width: 20rem;"></strong>
          <h4 class="card-title">${post.title}</h4>
          <p class="card-text">${post.text}</p>
          <img src="img/uploads/${post.file}" width="260px;"/>
      </div>`;
      document.getElementById("posts-container").innerHTML += postHtml
    });
  }