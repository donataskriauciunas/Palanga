<?php

namespace solid\SingleResponsability;

use solid\SingleResponsability\Objects\Circle;
use solid\SingleResponsability\Output\XmlOutput;

class Execute
{
    public function __construct()
    {
        $shapes = [
            new Circle(5),
            new Circle(7)
        ];

        $xmlOutPutProcessor = new XmlOutput($shapes);
        $xmlOutPutProcessor->outputXml();
    }
}