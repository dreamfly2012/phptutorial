<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertContains;
use function PHPUnit\Framework\assertEquals;

class DataTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param [type] $a
     * @param [type] $b
     * @param [type] $result
     * @return void
     */
    public function testAdd($a, $b, $result)
    {
        assertEquals($result, $a +$b);
    }

    public function dataProvider()
    {
        return [
            [1,2,3],
            [2,5,7],
            [3,5,8]
        ];
    }


    public function testPush()
    {
        $array = [];
        array_push($array, 3);
        assertContains(3,$array);
        return $array;
    }

    /**
     * @depends testPush
     *
     * @param [type] $array
     * @return void
     */
    public function testPop($array)
    {
        array_pop($array);
        $this->assertCount(0, $array);
    }
}