
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

<title> Päiväkoti Pirtti | Käyttäjän luonti </title>

<!-- Create newuser -->

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
    top: 70px;
    bottom: 0;
    margin: auto;

}

</style>

<body>

  <div class="container">
    <div class="jumbotron">
    <a href="admin.php" class="previous">&laquo; Takaisin</a>

  <!-- display message -->
  <div id="msg" class="alert alert-dismissible alert-warning d-none">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4 class="alert-heading">Warning!</h4>
    <p class="mb-0"></a></p>
  </div>

  <br><br>

  <!-- register form -->
  <form name="register">
      <fieldset>
        <legend>Luo uusi käyttäjä</legend>
        <div class="form-group">
          <label for="username">Käyttäjätunnus</label>
          <input name="username" type="username" class="form-control" placeholder="Käyttäjätunnus">
          </div>
        <div class="form-group">
          <label for="password">Salasana</label>
          <input name="password" type="password" class="form-control" id="password" placeholder="Salasana">
        </div>
        <div class="form-group">
        <label for="email">Sähköposti</label>
          <input name="email" type="email" class="form-control" id="email" placeholder="Sähköposti">
        </div>
        <button type="submit" class="btn btn-primary">Uusi käyttäjä</button>
      </fieldset>
    </form>
  </div>
</div>

<!-- Javascript scripts -->
<script src="../js/registerAdmin.js"></script>
<script src="../js/common.js"></script>

</body>

