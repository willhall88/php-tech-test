<html>
<head>
  <title>Grossing Films Chart</title>
</head>
<body>
  <?php
  	ini_set('display_errors',1);  
		error_reporting(E_ALL);

  	$curl_handler = curl_init("http://en.wikipedia.org/wiki/List_of_highest-grossing_films");
	  curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, true);
	  $wiki_page = curl_exec($curl_handler);

	  $dom = new DOMDocument();
	  @$dom->loadHTML($wiki_page);
	  $xpath = new DOMXpath($dom);
	  
	  $table = $xpath->query("//*[@id='mw-content-text']/table[1]/tr");
	  
	  foreach ($table as $inode => $row) {
	  	echo '<pre>';
	  	print_r($row);
      }
  ?>
</body>
</html>