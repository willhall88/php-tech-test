# PHP Technical Test 

**This test is to design a program to scrape the table of top 50 grossing films from a wikipedia page and then produce a scatterplot of revenue against year produced. **

I started off by writing some tests to scrape the webpage and collect the table data into its own array. I then wrote some tests in order to produce a graph from this data. There is perhaps some slight repetition as the PageScraper class pulls all the data into an array and then in the GraphPlotter then pulls the revenue and year out of that array into seperate ones for use with the graph. I was pondering this for a while, but I decided that it was better to collect all the film data into one array to begin with as this may be useful further down the line of the project if further requirements were asked for.


Technologies used
----
- PHP
- PHPunit
- JpGraph
- HTML
- CSS

How to run it
----
```sh
Start server
Visit 'http://localhost/test.php' or the directory the test.php is located in on your machine.
```

How to run unit tests
----
There are a number of warnings that appear when running graphPlotterTest.php. This is coming from the jpgraph library. The include lines can be commented out when running tests to hide these warnings if prefered.

```sh

$ phpunit tests/graphPlotterTests.php
$ phpunit tests/pageScraperTests.php

```


