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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  text-align: center;
}

.container div {
  float: left;
  margin: 10px;
}


h1 {
  text-align: center;
}
</style>

<body>

<h1>All Uploads</h1>

<center><a href="../admin/admin.php" class="previous">&laquo; Takaisin</a></center>

<div class="container">
      <div id="posts-container">
      <div class="row">
      <br><br>
      </div>
    </div>
  </div>
</div>


</body>

<script src="../js/galleryAdmin.js"></script>
