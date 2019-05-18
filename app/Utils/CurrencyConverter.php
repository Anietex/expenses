<?php


namespace App\Utils;


use GuzzleHttp\Client;

class CurrencyConverter
{
    /**
     *
     * Get currency conversion rate using a rest api
     * @param string $from
     * @param string $to
     * @return mixed
     */
    public function getConversionRate(string $from,string $to){

        $http = new Client();
        $conversionString = strtoupper($from).'_'.strtoupper($to);


        //Start request and set necessary request config
        $request = $http->get(env('CURRENCY_CONVERTER_API_URL').'/api/v7/convert',[
            'query'=>[
                'apiKey'=>env('CURRENCY_CONVERTER_API_KEY'),
                'q'=>$conversionString,
                'compact'=>'ultra'
            ]
        ]);
        $response = $request->getBody()->getContents();



        return \GuzzleHttp\json_decode($response)->$conversionString;

    }

    /**
     * Handles currency conversion
     *
     * @param float $amount
     * @param string $from
     * @param string $to
     * @return float|int
     */
    public function convert(float $amount,string $from,string $to){
        $rate = $this->getConversionRate($from,$to);

        return $amount*$rate;


    }
}
