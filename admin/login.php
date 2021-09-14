<title> Päiväkoti Pirtti | Admin </title>

<head>
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
    width: 700px;
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

<div class="container">


<div id="msg" class="alert alert-dismissible alert-warning d-none">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4 class="alert-heading">Warning!</h4>
    <p class="mb-0"></a></p>
  </div>

<div class="jumbotron">

<form name="login">
      <fieldset>
        <legend>Login</legend>
        <div class="form-group">
          <label for="username">Username</label>
          <input name="username" type="text" class="form-control" placeholder="Username">
          </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input name="password" type="password" class="form-control" placeholder="Password">
        </div>
        <p><a href="../forgotpwd/pwdforgot.php">Unohtuiko salasana?</a></p>

        <button type="submit" class="btn btn-primary">Login</button>
      </fieldset>
    </form>

</div>

<script src="../js/login.js"></script>
<script src="../js/common.js"></script>


<?php include_once '../layout/bot.inc.php'; ?>
