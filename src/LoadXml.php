<?php

function printXml() {
    $xmlfile = 'compress.zlib://resources/product-feed_toys.xml.gz';
    $xml_reader = new XMLReader();
    $xml_reader->open($xmlfile);

    // move the pointer to the first product
    while ($xml_reader->read() && $xml_reader->name != 'Product');

    // loop through the products until end of file or when reached 100 (used for example only)
    $count = 0;
    while ($xml_reader->name == 'Product' && $count < 100) {

        // load the current xml element into simplexml and we’re off and running!
        $xml = simplexml_load_string($xml_reader->readOuterXML());
        // now you can use your simpleXML object ($xml).

        print("ProductId: {$xml->productId} - Title: {$xml->title} - Price: {$xml->OfferNL->sellingPrice}\n");

        // move the pointer to the next product
        $xml_reader->next('Product');
        $count++;
    }

    // don’t forget to close the file
    $xml_reader->close();
}

printXml();

?>
