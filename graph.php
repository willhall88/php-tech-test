<?php
	include 'src/pageScraper.php';
	include 'src/graphPlotter.php';

	$curl_handler = curl_init("http://en.wikipedia.org/wiki/List_of_highest-grossing_films");
  curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, true);
  $wiki_page = curl_exec($curl_handler);

  $scraped_page = new PageScraper($wiki_page);
  $film_table = $scraped_page->getFilms();

  $plot = new graphPlotter($film_table);
	$plot->showGraph();
	  
?>