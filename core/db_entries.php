<?php
require_once 'database/lazydbentry.php';


//EXAMPLE
/*news_entry($connection, //Databas connection
"0", //Views for this article (för "trending" saker att funka)
"technology", //News category
"Unknown",  //Author
"", //Article text
"http://images.entertainment.ie/images_content/rectangle/620x372/E-T.jpg", //News img url/path
"Very good alien", //News headline
"Look at this crazy motherfucker."); //News summary */

function insertEntries($connection){

  news_entry($connection, //Databas connection
  "259", //Views for this article (för "trending" saker att funka)
  "entertainment", //News category
  "Unknown" ,  //Author
  "", //Article text
  "http://static3.businessinsider.com/image/55819eefecad04794d53bd28/emma-stone-did-one-of-the-worst-things-ever-after-her-contact-info-was-published-in-the-sony-hack.jpg", //News img url/path
  "Emma Stone wins Best Actress", //News headline
  "Emma Stone said thank you to her family and friends during her speech."); //News summary

  news_entry($connection, //Databas connection
  "821", //Views for this article (för "trending" saker att funka)
  "international", //News category
  "Unknown",  //Author
  "", //Article text
  "https://cdn.quizme.se/quiz/7865ac56-d394-471e-b3ad-1ec0c86eaa94.jpg", //News img url/path
  "Donald Trump's first budget: enormous defense spending cut", //News headline
  "Donald Trump will seek a $54bn hike in military spending while cutting foreign aid."); //News summary

  news_entry($connection, //Databas connection
  "92", //Views for this article (för "trending" saker att funka)
  "Entertainment", //News category
  "Unknown",  //Author
  "", //Article text
  "https://i.guim.co.uk/img/media/bc45ba3e05dbfa2b80d5592a7b14ac79eac7da42/0_0_2560_1536/master/2560.jpg?w=620&q=20&auto=format&usm=12&fit=max&dpr=2&s=b71034b63e8cc1d98f7b40759e56c866", //News img url/path
  "From gay rights to Black Lives Matter: why network TV suddenly got serious", //News headline
  "On a reputable college campus, a young undergrad comes forward and names multiple star football players as her rapists."); //News summary

  news_entry($connection, //Databas connection
  "1052", //Views for this article (för "trending" saker att funka)
  "sport", //News category
  "Unknown",  //Author
  "", //Article text
  "http://www.telegraph.co.uk/content/dam/football/2016/08/07/105034453-mourinho-ibra-sport-large_trans_NvBQzQNjv4BqhaQcnQgX1lblZ3yiN-_RsFgQYydLoD49TznpdCvx63E.jpg", //News img url/path
  "Fans could camp outside Zlatan's house - Mourinho", //News headline
  "Manchester United boss Jose Mourinho says he does not beg players to stay at a football club but suggests fans could camp outside Zlatan Ibrahimovic's house to convince him to stay at Old Trafford."); //News summary

  news_entry($connection, //Databas connection
  "0", //Views for this article (för "trending" saker att funka)
  "technology & science", //News category
  "Unknown",  //Author
  "", //Article text
  "http://ichef.bbci.co.uk/wwfeatures/live/624_351/images/live/p0/4t/y9/p04ty9kp.jpg", //News img url/path
  "The island of lost explorers", //News headline
  "On Canada’s bleak Beechey Island are the remains of four men who died in the 19th Century. They weren’t famous in life – but their deaths sparked 165 years of searching for answers."); //News summary

  news_entry($connection, //Databas connection
  "0", //Views for this article (för "trending" saker att funka)
  "politics", //News category
  "Unknown",  //Author
  "", //Article text
  "https://i.guim.co.uk/img/media/fa2c5cd862298bede92c1d68857d45ca60a096ba/0_292_4386_2632/master/4386.jpg?w=620&q=20&auto=format&usm=12&fit=max&dpr=2&s=225aa60b65fdc213c06303b3edc55638", //News img url/path
  "City watchdog sounds alarm bells over hard Brexit", //News headline
  "FCA chief says sudden EU exit would create myriad headaches, not least making it harder to keep an eye on banks.");

} ?>
