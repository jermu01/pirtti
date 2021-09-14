

<title> Päiväkoti Pirtti | Salasanan vaihto </title>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/minty/bootstrap.min.css" integrity="sha384-H4X+4tKc7b8s4GoMrylmy2ssQYpDHoqzPa9aKXbDwPoPUA3Ra8PA5dGzijN+ePnH" crossorigin="anonymous">
<link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

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

<?php

    include_once '../backend/db.php';
    $email = $_GET["email"];
?>


    <div class="container">

    <div id="msg" class="alert alert-dismissible alert-warning d-none">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4 class="alert-heading">Warning!</h4>
    <p class="mb-0"></a></p>
    </div>

<div class="jumbotron">
    <form name="resetpwd">
        <fieldset>
        <legend>Salasanan vaihtaminen</legend>
        <div class="form-group">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
            </div>
        <div class="form-group">
            <label for="password">Salasana</label>
            <input name="password" type="password" class="form-control" placeholder="Salasana">
            </div>
        <div class="form-group">
            <label for="confirmpwd">Uudelleen salasana</label>
            <input name="confirmpwd" type="password" class="form-control" placeholder="Salasana">
            <br>
            </div>
            <button type="submit" class="btn btn-primary">Vaihda salasana</button>
        </fieldset>
    </form>
</div>

<script type="text/javascript" src="../js/resetpwd.js"></script>
<script type="text/javascript" src="../js/common.js"></script>

