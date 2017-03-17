# bolcom-partnerprogramma-feed-php-example
Example PHP code for interpreting the Product Feed.

This example shows how the Product Feed can be read with PHP.
Supported PHP versions: 5.1.0 or higher, including PHP 7.

example: 
```shell
php -f src/LoadXml.php
```

Product Feeds can be pretty large (gigabytes). For this reason, this example does not load the whole XML in memory. We use XMLReader to read through the XML file step by step. 

For running the tests: 
```shell
phpunit Tests/
```

In the resources folder the XSD files can be found. The file product-feed-1.0.xsd is the starting point there (which wraps the product-1.0.xsd).

