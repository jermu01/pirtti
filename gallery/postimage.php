
<?php
session_start(); //session start
?>

<!-- check if you are log in or not -->
<?php
if (!isset($_SESSION['logged_in'])){
  header('Location: ../login.php');
  die();
}
?>

<title>Päiväkoti Pirtti | Galleria </title>

<!-- Upload images. Uploaded images will be saved in SQL-Database and img/uploads folder -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/minty/bootstrap.min.css" integrity="sha384-H4X+4tKc7b8s4GoMrylmy2ssQYpDHoqzPa9aKXbDwPoPUA3Ra8PA5dGzijN+ePnH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.css">
  <link rel="stylesheet" href="../css/styles.css">
</head>

<style>
body {
  background-image: url(../img/bg.jpg);
}

.container {
  max-width: 500px;
  align-items:center;
  justify-content: center;

  position:absolute;
  right: 0;
  left: 0;
  top: 70px;
  bottom: 0;
  margin: auto;
}


form {
 width: 400px;
 margin: auto;
}


</style>

<body>

<div class="container">
  <div class="jumbotron" style="text-align: center;">
  <a href="../admin/admin.php" class="previous">&laquo; Takaisin</a>

  <h1>Lataa Kuva</h1>

  <br>

  <!-- upload form -->
  <form action="upload.php" method="post" enctype="multipart/form-data">
      <fieldset>
      <div class="form-group">
        <strong><label for="name"><?php echo $_SESSION['username']; ?></label></strong>
        <input type="hidden" name="name" value="<?php echo $_SESSION['username']; ?>">
        </div>
        <div class="form-group">
          <label for="title">Otsikko</label>
          <input type="text" name="title" class="form-control" placeholder="Otsikko">
        </div>
        <div class="form-group">
            <label for="text">Teksti</label>
            <textarea class="form-control" name="text" rows="3" placeholder="Teksti"></textarea>
            <br><br>
            <input type="file" name="file" class="btn btn-primary">
            <br><br>
        <button type="submit" name="insert" class="btn btn-primary">Julkaise</button>
        </fieldset>
      </form>
  </div>
</div>

</body>
