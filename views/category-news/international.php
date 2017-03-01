<div class="category-container">
  <h1>International</h1>
</div>

<?php
$counter = 1;

if($result = mysqli_query($connection,
'SELECT news.article_id, news.img_path, news.headline, news.summary
FROM news
INNER JOIN articles
ON articles.category LIKE "%international%" and articles.id=news.article_id
ORDER BY articles.views DESC
LIMIT 6')) {
  while($row = $result->fetch_assoc()){
    if($counter == 1 || $counter == 4){
      //left ?>
      <div class="news-box-left">
        <div class="news-box">
          <img src="<?php echo $row['img_path']; ?>" alt="">
          <h3><?php echo $row['headline']; ?></h3>
          <p><?php echo $row['summary']; ?></p>
        </div>
      </div>
      <?php
    } elseif($counter == 2 || $counter == 5){
      //Center ?>
      <div class="news-box-center">
        <div class="news-box">
          <img src="<?php echo $row['img_path']; ?>" alt="">
          <h3><?php echo $row['headline']; ?></h3>
          <p><?php echo $row['summary']; ?></p>
        </div>
      </div>
      <?php
    } elseif($counter == 3 || $counter == 6){
      //Right ?>
      <div class="news-box-right">
        <div class="news-box">
          <img src="<?php echo $row['img_path']; ?>" alt="">
          <h3><?php echo $row['headline']; ?></h3>
          <p><?php echo $row['summary']; ?></p>
        </div>
      </div>
      <?php
    }
    $counter++;
  }
} else {
  echo '<h1>DOESNT WORK</h1>';
} ?>
<button type="button" name="button">Read more..</button>
