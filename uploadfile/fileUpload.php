<?php session_start(); ?>

<?php
if (!isset($_SESSION['logged_in'])){
  header('Location: login.php');
  die();
}
?>

<title> Päiväkoti Pirtti | Tiedoston lisääminen </title>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/minty/bootstrap.min.css" integrity="sha384-H4X+4tKc7b8s4GoMrylmy2ssQYpDHoqzPa9aKXbDwPoPUA3Ra8PA5dGzijN+ePnH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.css">
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
    top: 30px;
    bottom: 0;
    margin: auto;

}

</style>

<body>

<div class="container">
<div class="jumbotron" style="text-align: center;">
<a href="admin.php" class="previous">&laquo; Takaisin</a>
<br><br>
<h1>Lataa tiedosto</h1>
<br>
<form action="uploadFile.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="button" value="Lataa tiedosto" name="submit">
</form>


</body>
