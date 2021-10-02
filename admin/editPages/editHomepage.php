<!DOCTYPE HTML>

<?php session_start(); ?>

<?php
if (!isset($_SESSION['logged_in'])){
  header('Location: login.php');
  die();
}
?>

<title>Päiväkoti Pirtti | Sivun Editointi</title>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/minty/bootstrap.min.css" integrity="sha384-H4X+4tKc7b8s4GoMrylmy2ssQYpDHoqzPa9aKXbDwPoPUA3Ra8PA5dGzijN+ePnH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../js/common.js"></script>
</head>

<style>
body {
    background-image: url(../../img/bg.jpg);
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

<a href="../admin.php" class="previous">&laquo; Takaisin</a>

<form method="POST" name="textEdit">
  <h1>Kotisivun Muokkaaminen</h1>
    <textarea id="text" name="text" cols="30" rows="20">
  <?php
    include_once '../../backend/showTextHomePage.php';
  ?>
  </textarea>
  <br>
  <button type="submit" class="btn btn-primary">Muokkaa sivu</button>
  </div>
</form>


<script src="../../tinymce/js/tinymce.min.js"></script>
<script src="../../js/editHomepage.js"></script>

<script>
tinymce.init({
  selector: "#text",
  entity_encoding : "raw",
  plugins: "link, lists, image",
  toolbar1: 'undo redo | styleselect | fontsizeselect | fontselect | bold italic |',
  toolbar2: 'alignleft aligncenter alignright | bullist | numlist | link | image |'
});
</script>

</body>
</html>
<?php include_once '../../layout/bot.inc.php'; ?>
