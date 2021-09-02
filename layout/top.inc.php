<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/minty/bootstrap.min.css" integrity="sha384-H4X+4tKc7b8s4GoMrylmy2ssQYpDHoqzPa9aKXbDwPoPUA3Ra8PA5dGzijN+ePnH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 15px 5px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}

</style>

<div class ="buttons">
    <h1>Päiväkotiyhdistys Pirtti ry</h1>

<body>
    <nav>
        <ul>
            <a href="mainpage.php" class="btn btn-primary btn-lg" role="button"><i class="fa fa-home"></i> Etusivu</button></a>
            <a href="info.php" class="btn btn-secondary btn-lg" role="button"><i class="fa fa-info"></i> Tietoja</button></a>
            <a href="contacts.php" class="btn btn-info btn-lg" role="button"><i class="fa fa-phone"></i> Yhteistiedot</button></a>
            <div class="dropdown">
            <a href="applications.php" button class="btn btn-success btn-lg"><i class="fa fa-bars"></i> Hakemukset</button></a>
            <div class="dropdown-content" style="left:0;">
            <a href="kindergarten.php">Varhaiskasvatushakemus</a>
            <a href="pre-school.php">Esiopetushakemus</a>
            <a href="service_voucher.php">Palvelusetelihakemus</a>
        </div>
    </div>
        <a href="gallery.php" class="btn btn-danger btn-lg" role="button"><i class="fa fa-folder"></i> Kuvat</button></a>
        <ul>
    <nav>
</div>

    
</head>
</body>