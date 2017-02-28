<?php require_once 'core/database/connect.php';
$connection = db_connect(); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Imperium</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/base.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/jquery.marquee.js"></script>
</head>
<body>
  <div class="page-container">
    <?php include 'views/header.php'; ?>
    <div class="ym-column">
      <?php include_once 'views/trending-news.php'; ?>
      <div class="ym-col1">
        <?php include_once 'views/category-news.php'; ?>
      </div>
      <div class="ym-col2">
        <?php include_once 'views/latest-news.php'; ?>
      </div>
    </div>
    <?php include 'views/footer.php'; ?>
  </div>
</body>
</html>
