<div class="trending-news-container">
  <div class="trending-news-title">
    <h3>Trending</h3>
  </div>
  <div class="trending-news-marquee">
    <ul>
      <?php
      if($result = mysqli_query($connection,
      'SELECT news.article_id, news.headline
      FROM news
      INNER JOIN articles
      ON articles.id=news.article_id
      ORDER BY articles.views DESC
      LIMIT 5')) {
        while($row = $result->fetch_assoc()){
          echo '<li>' . $row['headline'] . '</li>';
        }
      } ?>
    </ul>
  </div>
  <script src="js/newsscroll.js"></script>
</div>
