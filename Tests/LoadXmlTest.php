<?php

use PHPUnit\Framework\TestCase;
require 'src/LoadXml.php';

class LoadXmlTest extends TestCase
{
    public function testLoadXml()
    {
        printXml();
        $this->expectOutputString('ProductId: 1004004000008454 - Title: De beer is los - Price: 10.9
ProductId: 1004004006510342 - Title: Ticket to Ride Europe - Bordspel - Price: 37.95
');
    }

}
