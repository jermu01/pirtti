
<title> Päiväkoti Pirtti | Admin </title>

<!-- log in -->

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

h3 {
  text-align: center;
}

body {
    background-image: url(../img/bg.jpg);
}

.container {
    max-width: 700px;
    align-items: center;
    justify-content: center;
    text-align: center;

    position: absolute;
    right: 0;
    left: 0;
    top: 70px;
    bottom: 0;
    margin: auto;
}


.form-control {
  width: 50%;
  margin: auto;
}


</style>

<div class="container">
  <div class="jumbotron">

  <!-- display message -->
  <div id="msg" class="alert alert-dismissible alert-warning d-none">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4 class="alert-heading"></h4>
    <p class="mb-0"></a></p>
  </div>

  <!-- login form -->
    <form name="login">
      <fieldset>
        <strong><h3>Päiväkotiyhdistys Pirtti ry</h3></strong>
        <br>
        <legend>Kirjautuminen </legend>
        <div class="form-group">
          <label for="username">Käyttäjätunnus</label>
          <input name="username" type="text" class="form-control" placeholder="Käyttäjätunnus">
          </div>
        <div class="form-group">
          <label for="password">Salasana</label>
          <input name="password" type="password" class="form-control" placeholder="Salasana">
        </div>
        <!-- link to pwdforgot -->
        <p><a href="../forgotpwd/pwdforgot.php">Unohtuiko salasana?</a></p>

        <button type="submit" class="btn btn-primary">Kirjaudu</button>
      </fieldset>
    </form>

</div>

<!-- Javascript scripts -->
<script src="../js/login.js"></script>
<script src="../js/common.js"></script>

<!-- footer -->
<?php include_once '../layout/bot.inc.php'; ?>
