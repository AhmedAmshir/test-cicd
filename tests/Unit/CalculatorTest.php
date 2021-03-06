<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Managers\Calculators;

class CalculatorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSumTwoNumber()
    {
        $calculators = new Calculators();
        $num1 = 5;
        $num2 = 10;
        $this->assertEquals(15, $calculators->sum($num1, $num2));
    }

    public function testDividTwoNumber()
    {
        $calculators = new Calculators();
        $num1 = 20;
        $num2 = 4;
        $this->assertEquals(5, $calculators->divid($num1, $num2));
    }

}
