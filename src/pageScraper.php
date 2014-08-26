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
          	'title' => $this->getTitle($row),
            'revenue' => $this->formatCurrency($cells[1]),
            'year' => (String)$cells[2],
          );
      }

      array_shift($films);
			return $films;
    }

    private function formatCurrency($currency)
    {
    	$remove_characters = (Integer)str_replace(array('$', ','), '' , $currency);
    	$formatted_currency = ($remove_characters/1000000000); 
      return $formatted_currency;
    }

    private function getTitle($row)
    {
    	$title = (String)$row->th->i->a;
    	return $title;
    }

  }
?>