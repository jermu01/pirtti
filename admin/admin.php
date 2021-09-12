
<?php session_start(); ?>

<?php
if (!isset($_SESSION['logged_in'])){
  header('Location: login.php');
  die();
}
?>

<title> Päiväkoti Pirtti | Admin </title>

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

</style>
<body>

<div class="container">
  <div class="jumbotron" style="text-align: center;">
  <h1 class="display-3">Admin page</h1>

  <div id="msg" class="alert alert-dismissible alert-warning d-none">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4 class="alert-heading">Warning!</h4>
    <p class="mb-0"></a></p>
  </div>

    <?php if (isset($_SESSION['logged_in'])): ?>
    <strong><p>Tervetuloa!
      <br>
      <?php echo $_SESSION['username']; ?></p></strong>
    <?php endif; ?>

    <div class="list-group">
    <a href="registerAdmin.php" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Luo Käyttäjä</h5>
    </div>
    <p class="mb-1">Uuden käyttäjän luonti</p>
  </a>

  <a href="../forgotpwd/reset-password.php" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Vaihda salasana</h5>
    </div>
    <p class="mb-1">Salasanan vaihto</p>
  </a>

  <a href="../gallery/postimage.php" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Lataa Kuva</h5>
    </div>
    <p class="mb-1">Kuvien lisääminen</p>
  </a>

  <a href="../gallery/galleryAdmin.php" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Gallery</h5>
    </div>
    <p class="mb-1">Kaikki kuvat</p>
  </a>

</div>
    
<br><br>
<button type="button" class="btn btn-danger"><a href="logout.php">Log Out</button></a>
</div>

</body>

<script src="../js/common.js"></script>

<?php include_once '../layout/bot.inc.php'; ?>