<?php
require_once "src/pageScraper.php";
class PageScraperTest extends \PHPUnit_Framework_TestCase
{
    
    function __construct()
    {
    	$static_html = file_get_contents('./tests/Helpers/wikipage.html');
    	$this->film_page = new PageScraper($static_html);
    }

    public function testTableOfFilmsIsExtracted()
    {	
    	$films = $this->film_page->getFilms();
    	$this->assertEquals(count($films), 50);
    }

}