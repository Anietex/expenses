<?php

namespace Tests\Unit;

use App\Utils\CurrencyConverter;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CurrencyConverterTest extends TestCase
{





    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testGetConversionRate(){
        $converter = new CurrencyConverter();

        $rate = $converter->getConversionRate('USD','NGN');

        $this->assertIsNumeric($rate);
    }


    public function testConvert(){
        $converter = new CurrencyConverter();

        $rate = $converter->getConversionRate('USD','NGN');

        $convertedAmount = $converter->convert(500,'USD','NGN');

        $this->assertEquals($convertedAmount,$rate*500);
    }

}
