<div class="latest-news-container">
  <h3>Latest news</h3>
  <div class="latest-news-marquee">
    <ul>
      <?php
      if($result = mysqli_query($connection,
      'SELECT news.article_id, news.img_path, news.headline
      FROM news
      INNER JOIN articles
      ON articles.id=news.article_id
      ORDER BY articles.creation_time ASC
      LIMIT 10')) {
        while($row = $result->fetch_assoc()){
          echo '<li>' . $row['headline'] . '</li><br>';
        }
      } ?>
    </ul>
  </div>
  <script src="js/latestnewsscroll.js"></script>
</div>
