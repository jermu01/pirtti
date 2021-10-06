<!-- layout -->
<?php include_once 'layout/top.inc.php'; ?>

<title>Päiväkoti Pirtti | Kuvat</title>

<style>

body {
  background-image: url(img/bg.jpg);
}

h1 {
  text-align: center;
}


.container {
  max-width: 900px;
  justify-content: center;
}

.container div {
  float: left;
}

img {
  padding: 10px;
}

</style>

<body>

<!-- Gallery website where you can see all uploaded images. Images is uploaded in SQL-Database -->

<div class="container">
  <div class="jumbotron">
    <h1>Kuvia</h1>
    
    <!-- display images -->
      <div class="container">
        <div class="row">
        <div class="card text-center">
        <div id="posts-container">
        <br><br>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Javascript scripts -->
<script src="js/gallery.js"></script>

</body>

