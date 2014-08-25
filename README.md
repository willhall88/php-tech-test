# PHP Technical Test 

**This test is to design a program to scrape the table of top 50 grossing films from a wikipedia page and then produce a scatterplot of revenue against year produced. **

I started off this test by writing down what classes there should be and what responsibilities they should have. I began with creating a pixel object which would make up the image. The pixel was responsible for knowing what colour it was,  later when I was creating the fill image method I realised it needed to know its own position within the image as well. The image class was built up out of nested arrays of pixels and was responsible for changing the image of pixels. The commands class was responsible for interpreting the user input and communicating those inputs to the image class.
I wrote rspec tests to help build up each part of the program before it was ready to be tested manually. When I had the program running I could then test true user input and could find any edge cases that might crash the program.


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
```sh

$ phpunit tests/.
```


