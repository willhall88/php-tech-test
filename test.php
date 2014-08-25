<html>
<head>
  <title>Grossing Films Chart</title>
</head>
<body>
  <?php
  	ini_set('display_errors',1);  
		error_reporting(E_ALL);

		include 'src/pageScraper.php';

  	$curl_handler = curl_init("http://en.wikipedia.org/wiki/List_of_highest-grossing_films");
	  curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, true);
	  $wiki_page = curl_exec($curl_handler);

	  $scraped_page = new PageScraper($wiki_page);
	  $film_table = $scraped_page->getFilms();

	  echo '<pre>';
	  print_r($film_table);
	  
  ?>
</body>
</html>