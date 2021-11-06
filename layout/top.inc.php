<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/minty/bootstrap.min.css" integrity="sha384-H4X+4tKc7b8s4GoMrylmy2ssQYpDHoqzPa9aKXbDwPoPUA3Ra8PA5dGzijN+ePnH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<style>

h1 {
  text-align: center;
}


</style>


<body>
<h1>Päiväkotiyhdistys Pirtti ry</h1>

<!-- toggele button for mobile view -->
    <nav class="navbar">
      <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <!-- Buttons -->
      <div class="navbar-links">
        <ul>
            <a href="index.php" class="btn btn-primary btn-lg" role="button"><i class="fa fa-home"></i> Etusivu</a>
            <a href="info.php" class="btn btn-secondary btn-lg" role="button"><i class="fa fa-info"></i> Tietoja</a>
            <a href="contacts.php" class="btn btn-info btn-lg" role="button"><i class="fa fa-phone"></i> Yhteistiedot</a>
            <a href="applications.php" class="btn btn-success btn-lg"><i class="fa fa-list-alt"></i> Hakemukset</a>
            <a href="gallery.php" class="btn btn-danger btn-lg" role="button"><i class="fa fa-folder"></i> Galleria</a>
        </ul>
      </div>
    </nav>
</body>

<script>
  
const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})
</script>

