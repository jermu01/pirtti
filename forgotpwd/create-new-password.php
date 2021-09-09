

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
    $selector = $_GET["selector"];
    $validator = $_GET["validator"];

    if (empty($selector) || empty($validator)) {
        echo "Could not validate your request!";
    } else {
        if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
            ?>

            <div class="container">
            <div class="jumbotron">
            <form action="reset_password.php" method="post">
            <legend>Salasanan vaihtaminen</legend>
                <div class="form-group">
                <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                <div class="form-group">
                <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                <div class="form-group">
                <label for="pwd">Salasana</label>
                <input name="pwd" type="password" class="form-control" placeholder="Salasana">
                </div>
                <div class="form-group">
                <label for="pwd-repeat">Uudelleen salasana</label>
                <input name="pwd-repeat" type="password" class="form-control" placeholder="Salasana">
                <br>
                <button type="submit" class="btn btn-primary" name="reset-password-submit">Vaihda salasana</button>
                </div>
            </form>

            <?php
        }
    }
?>

