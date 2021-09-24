<?php

namespace DesignPatterns\Structural\Decorator;

use DOMDocument;

class RenderInXmlDecorator extends Decorator
{
    public function renderData()
    {
        $output = $this->wrappable->renderData();

        $doc = new DOMDocument();

        foreach ($output as $key => $val) {
            $doc->appendChild($doc->createElement($key, $val));
        }

        return $doc->saveXML();
    }
}
