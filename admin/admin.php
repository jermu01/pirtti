
<?php
session_start(); //session start
?>

<!-- Check if u are logged in or not -->
<?php
if (!isset($_SESSION['logged_in'])){
  header('Location: login.php');
  die();
}
?>

<title> Päiväkoti Pirtti | Admin </title>

<!-- Adminpage -->

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
  <h1 class="display-3">Tiedonhallinta</h1>

  <!-- display message -->
  <div id="msg" class="alert alert-dismissible alert-warning d-none">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4 class="alert-heading"></h4>
    <p class="mb-0"></a></p>
  </div>

    <?php if (isset($_SESSION['logged_in'])): ?>
    <strong><p>Tervetuloa!
      <br>
      <!-- display username -->
      <?php echo $_SESSION['username']; ?></p></strong> 
    <?php endif; ?>

    <!-- adminpage systems -->

    <!-- newuser page -->
    <div class="list-group">
    <a href="newUser.php" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Luo Käyttäjä</h5>
    </div>
    <p class="mb-1">Uuden käyttäjän luonti</p>
  </a>

  <!-- change password page -->
  <a href="../forgotpwd/loggedpwdreset.php" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Vaihda salasana</h5>
    </div>
    <p class="mb-1">Salasanan vaihto</p>
  </a>

  <!-- upload image page -->
  <a href="../gallery/postimage.php" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Lataa Kuva</h5>
    </div>
    <p class="mb-1">Kuvien lisääminen</p>
  </a>

  <!-- gallery page -->
  <a href="../gallery/galleryAdmin.php" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Gallery</h5>
    </div>
    <p class="mb-1">Kaikki kuvat</p>
  </a>

  <!-- edithomepage -->
  <a href="editPages/editHomepage.php" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Kotisivun Muokkaaminen</h5>
    </div>
    <p class="mb-1">muokkaa kotisivua</p>
  </a>

  <!-- editinfopage -->
  <a href="editPages/editInfopage.php" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Tietojasivun Muokkaaminen</h5>
    </div>
    <p class="mb-1">muokkaa tietojasivu</p>
  </a>

  <!-- upload file -->
  <a href="uploadfile/fileUpload.php" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Omavalvontasuunnitelma</h5>
    </div>
    <p class="mb-1">lataa uusi omavalvontasuunnitelma</p>
  </a>

</div>
    
<br><br>
<!-- log out -->
<a href="logout.php"><button type="button" class="btn btn-danger">Kirjaudu ulos</button></a>
</div>

</body>

<!-- Javascript scripts -->
<script src="../js/common.js"></script>

<!-- footer -->
<?php include_once '../layout/bot.inc.php'; ?>