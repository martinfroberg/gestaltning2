<?php
function news_entry($connection, $views, $category, $author, $text, $img_path, $headline, $summary){

//Enter article
mysqli_query($connection,
  'INSERT INTO articles
  (views, author, category, text)
  VALUES ("' . $views . '", "' . $author . '", "' . $category . '","' . $text . '")');

//Get article id
$last_id = mysqli_insert_id($connection);

//Enter news
mysqli_query($connection,
  'INSERT INTO news
  (article_id, img_path, headline, summary)
  VALUES ("' . $last_id . '", "' . $img_path . '", "' . $headline . '", "' . $summary . '")');

} ?>
