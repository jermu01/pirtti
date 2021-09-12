

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

<body>

  <div class="container">
  <div class="jumbotron">
  <a href="../admin/admin.php" class="previous">&laquo; Takaisin</a>

  <br><br>

    <form action="reset-request.php" method="POST">
        <legend>Anna Sähköpostisi</legend>
          <div class="form-group">
          <label for="email">Saat sähköpostiin linkin uudesta salasanasta </label>
          <input name="email" type="email" class="form-control" placeholder="Sähköposti">
          <br>
        <button type="submit" name="reset-request-submit" class="btn btn-primary">Lähetä salasana pyyntö</button>
    </form>

    <?php
    if (isset($_GET["reset"])) {
      if ($_GET["reset"] == "success") {
        echo '<strong><p class="signupsuccess">Check your email!</p></strong>';
      }
    }
    ?>
</div>
</div>


</body>