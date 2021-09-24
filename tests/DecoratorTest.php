<?php

use DesignPatterns\Structural\Decorator\RenderInJsonDecorator;
use DesignPatterns\Structural\Decorator\RenderInXmlDecorator;
use DesignPatterns\Structural\Decorator\Webservice;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testXml()
    {
        $service = new RenderInXmlDecorator(new Webservice(['foo' => 'bar']));
        $xml = '<?xml version="1.0"?><foo>bar</foo>';

        $this->assertXmlStringEqualsXmlString($xml, $service->renderData());
    }

    public function testJson()
    {
        $test = ['foo' => 'bar'];
        $service = new RenderInJsonDecorator(new Webservice($test));

        $this->assertEquals(json_encode($test), $service->renderData());
    }
}
