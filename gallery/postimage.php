
<?php session_start(); ?>

<?php
if (!isset($_SESSION['logged_in'])){
  header('Location: ../login.php');
  die();
}
?>

<title>Päiväkoti Pirtti | Galleria </title>

<head>
  <link rel="stylesheet" href="../css/styles.css">
</head>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/minty/bootstrap.min.css" integrity="sha384-H4X+4tKc7b8s4GoMrylmy2ssQYpDHoqzPa9aKXbDwPoPUA3Ra8PA5dGzijN+ePnH" crossorigin="anonymous">
<link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>



</head>

<style>
body {
    background-image: url(../img/bg.jpg);
}

.container {
    max-width: 700px;
    margin: auto;
    align-items:center;
    justify-content: center;

    position:absolute;
    right: 0;
    left: 0;
    top: 0;
    bottom: 0;
    margin: auto;
}

div.container {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
}


form {
 width: 350px;
 height: 300px;
 margin: auto;
 position: relative;
}


</style>

<body>

<div class="container">
  <div class="jumbotron" style="text-align: center;">
  <a href="../admin/admin.php" class="previous">&laquo; Takaisin</a>



<div class="jumbotron" style="text-align: center;">
<h2>Make New Post</h2>
<br>
<button class="btn btn-info" onclick="postInfo()">Make Post</button>

    <div id="msg" class="alert alert-dismissible alert-warning d-none">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4 class="alert-heading"></h4>
        <p class="mb-0"></a></p>
    </div>

<br><br>


<div class="container1">
<div id="post" style="display:none">
  <form action="upload.php" method="post" enctype="multipart/form-data">
      <fieldset>
      <div class="form-group">
        <strong><label for="name"><?php echo $_SESSION['username']; ?></label></strong>
        <input type="hidden" name="name" value="<?php echo $_SESSION['username']; ?>">
        </div>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="text">Text</label>
            <textarea class="form-control" name="text" rows="3" placeholder="Text"></textarea>
            <br><br>
            <input type="file" name="file" class="btn btn-primary">
            <br><br>
        <button type="submit" name="insert" class="btn btn-primary">Upload</button>
        </fieldset>
      </form>
    </form>
</div>
</div>
</div>

</body>


<script>
  /* 
Toggle new post -form 
*/
function postInfo() {
    var x = document.getElementById("post");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
</script>
