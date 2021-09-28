<?php


use DesignPatterns\Behavioral\Iterator\Data;
use DesignPatterns\Behavioral\Iterator\PageIterator;
use PHPUnit\Framework\TestCase;

class DataTest extends TestCase
{
    public function testPage()
    {
        // $data = new Data();
        // for ($i = 1; $i < 20; $i++) {
        //     $res = $data->paginate($i);
        //     var_dump(json_encode($res, JSON_UNESCAPED_UNICODE));
        // }
        $this->assertEquals(1, 1);
        
        
        $pages = new PageIterator();
        foreach ($pages as $page) {
            var_dump(json_encode($page, JSON_UNESCAPED_UNICODE));
        }
    }
}
