<?php
class PageScraper
{
    
    function __construct($string)
    {
    	$this->xml = simplexml_load_string($string);
    }

    public function getFilms()
    {
    	$films = array();
    	$xpath_query = '//*[@id="mw-content-text"]/table[1]/tr';
      
      foreach ($this->xml->xpath($xpath_query) as $count => $row) {
          $cells = $row->td;
          $films[] = array(
            'revenue' => (String)$cells[1],
            'year' => (String)$cells[2],
          );
      }

      array_shift($films);
			return $films;
    }

}