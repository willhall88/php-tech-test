<?php
  require_once "src/graphPlotter.php";
  class graphPlotterTest extends \PHPUnit_Framework_TestCase
  {
      
    function __construct()
    {
      include "./tests/Helpers/filmArray.php";
    	$this->plot = new graphPlotter($FILM_ARRAY);
    }

    public function testRevenueIsExtracted()
    {	
    	$revenues = $this->plot->getRevenue();
      $first_revenue = $revenues[0];
      $this->assertEquals(count($revenues), 10);
      $this->assertEquals($first_revenue, 2.787965087);
    }

    public function testYearIsExtracted()
    { 
      $years = $this->plot->getYear();
      $first_year = $years[0];
      $this->assertEquals(count($years), 10);
      $this->assertEquals($first_year, 2009);
    }
  }
?>