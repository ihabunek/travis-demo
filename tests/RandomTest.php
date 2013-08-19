<?php

class RandomTest extends \PHPUnit_Framework_TestCase
{
    public function testGetRandomNumber()
    {
        $rng = new Random();
        $actual = $rng->getRandomNumber();
        $this->assertSame(4, $actual);
    }
}
