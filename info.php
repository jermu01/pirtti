<!-- layout -->
<?php include_once 'layout/top.inc.php'; ?>

<title>Päiväkoti Pirtti | Tietoja</title>

<!-- style -->
<style>
.container {
  max-width: 900px;
  justify-content: center;
}
</style>

<body>

<!-- Infopage text is saved in SQL-Dabase. Text can be edited from admin website -->

<div class="container">
  <div class="jumbotron">
    <!-- Display text from SQL-Database -->
    <?php include_once 'backend/showTextInfopage.php'; ?>
</div>
<!-- footer -->
<?php include_once 'layout/bot.inc.php'; ?>
</div>
</body>



