
<?php session_start(); ?>
<?php
if (!isset($_SESSION['logged_in'])){
  header('Location: login.php');
  die();
}
?>


<title> Päiväkoti Pirtti | Salasanan vaihto </title>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/minty/bootstrap.min.css" integrity="sha384-H4X+4tKc7b8s4GoMrylmy2ssQYpDHoqzPa9aKXbDwPoPUA3Ra8PA5dGzijN+ePnH" crossorigin="anonymous">
<link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
body {
    background-image: url(img/bg.jpg);
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

  <div id="msg" class="alert alert-dismissible alert-warning d-none">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4 class="alert-heading">Warning!</h4>
    <p class="mb-0"></a></p>
  </div>


  <div class="jumbotron">
  <a href="admin.php" class="previous">&laquo; Takaisin</a>
  <br><br>
  <form name="changePwd">
      <fieldset>
        <legend>Vaihda salasana</legend>
        <br>
        <div class="form-group">
        <fieldset disabled="">
        <label class="form-label" for="username">Käyttäjätunnus</label>
        <input class="form-control" id="username" type="text" name="username" placeholder="<?php echo $_SESSION['username']; ?>" disabled="">
        <fieldset>
        </div>
        <div class="form-group">
          <label for="password">Salasana</label>
          <input name="password" type="password" class="form-control" placeholder="Salasana">
          </div>
          <div class="form-group">
          <label for="password2">Uudelleen salasana</label>
          <input name="password2" type="password" class="form-control" placeholder="Salasana">
          </div>
        <button type="submit" class="btn btn-primary">Vaihda Salasana</button>
      </fieldset>
    </form>
</div>
</div>

<script src="js/changePwd.js"></script>
<script src="js/common.js"></script>

</body>