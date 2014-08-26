<?php
  DEFINE("TTF_DIR","/Library/Fonts/");
  DEFINE("TTF_FONTFILE","Verdana.ttf");

  include ('jpgraph/src/jpgraph.php');
  include ('jpgraph/src/jpgraph_scatter.php');
  
  class graphPlotter
  {
    
    function __construct($array)
    {
      $this->films = $array;
    }

    public function showGraph()
    {
      $this->initializeGraph();
      $this->addDataPoints();

      $this->graph->Add($this->scatterplot);
      $this->graph->Stroke();
    }

    public function getRevenue()
    {
      $this->revenues = array();
      
      foreach ($this->films as $film) 
      {
        $this->revenues[] = $film['revenue'];
      }
      return $this->revenues;
    }

    public function getYear()
    {
      $this->years = array();
      
      foreach ($this->films as $film) 
      {
        $this->years[] = $film['year'];
      }
      return $this->years;
    }

    private function initializeGraph()
    {
      $this->graph = new Graph(900,600);
      $this->graph->SetScale('linlin',0.6,3,1976,2015); 
      $this->graph->img->SetMargin(100,100,100,100);
      $this->graph->yaxis->scale->ticks->Set(0.2);

      $this->graph->title->Set("Adjusted Gross Revenue vs Film Year");
      $this->graph->title->SetMargin(50,50,50,50);
      $this->graph->title->SetFont(FF_VERDANA, FS_NORMAL, 20);
      
      $this->graph->xaxis->SetTitle("Year", "center");
      $this->graph->xaxis->SetFont(FF_VERDANA, FS_NORMAL, 10);
      $this->graph->xaxis->title->SetFont(FF_VERDANA, FS_NORMAL, 15) ;
      $this->graph->xaxis->title->SetMargin(20) ;
      
      $this->graph->yaxis->SetTitle('Gross Revenue - $Billion', "center");
      $this->graph->yaxis->SetFont(FF_VERDANA, FS_NORMAL, 10);
      $this->graph->yaxis->title->SetFont(FF_VERDANA, FS_NORMAL, 15) ;
      $this->graph->yaxis->title->SetMargin(20) ;
    }

    private function addDataPoints()
    {
      $this->scatterplot = new ScatterPlot($this->getRevenue(),$this->getYear());
      $this->scatterplot->mark->SetType(MARK_FILLEDCIRCLE);
      $this->scatterplot->mark->SetWidth(4);
      $this->scatterplot->mark->SetColor("blue");
    }

  }

?>