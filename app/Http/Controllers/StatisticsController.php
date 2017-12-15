<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsController extends Controller
{

    protected $time;

    public function index($time = 'year')
    {
        $this->time = $time;
        return view('statistics', [
            'waterData' => $this->getWaterChart(),
            'temperatureData' => $this->getTemperatureChart(),
            'foodData' => $this->getFoodChart(),
            'brightnessData' => $this->getBrightnessChart(),
            'wasteData' => $this->getWasteChart()
        ]);
    }

    public function getWasteChart()
    {
         return $this->getChart(
            '%',
            'waste',
            $this->getColors(
                'rgba(0, 0, 0, 0)', //backgroundColor
                '#7b1fa2',                  //borderColor
                '#7b1fa2',                  //pointBackgroundColor
                '#fff',                     //pointBorderColor
                '#fff',                     //pointHoverBackgroundColor
                '#7b1fa2'                    //pointHoverBorderColor
            )
        );
    }

    public function getBrightnessChart()
    {
         return $this->getChart(
            '%',
            'brightness',
            $this->getColors(
                'rgba(255, 255, 90, 0.4)', //backgroundColor
                '#ffea00',                  //borderColor
                '#ffea00',                  //pointBackgroundColor
                '#fff',                     //pointBorderColor
                '#fff',                     //pointHoverBackgroundColor
                '#ffea00'                    //pointHoverBorderColor
            )
        );
    }

    public function getFoodChart()
    {
         return $this->getChart(
            'Gramos',
            'food',
            $this->getColors(
                'rgba(255, 177, 193, 0.4)', //backgroundColor
                '#ff6b8a',                  //borderColor
                '#ff6b8a',                  //pointBackgroundColor
                '#fff',                     //pointBorderColor
                '#fff',                     //pointHoverBackgroundColor
                '#ff6b8a'                    //pointHoverBorderColor
            )
        );
    }

    public function getTemperatureChart()
    {
         return $this->getChart(
            'ºC',
           'temperature',
            $this->getColors(
                'rgba(255, 245, 204, 0.4)', //backgroundColor
                '#ffcc00',                  //borderColor
                '#ffcc00',                  //pointBackgroundColor
                '#fff',                     //pointBorderColor
                '#fff',                     //pointHoverBackgroundColor
                '#ffcc00'                    //pointHoverBorderColor
            )
        );
    }

    public function getWaterChart()
    {
         return $this->getChart(
            'Litros',
            'water',
            $this->getColors(
                'rgba(151,187,205,0.2)',
                'rgba(151,187,205,1)',
                'rgba(151,187,205,1)',
                '#fff',
                '#fff',
                'rgba(151,187,205,1)'
            )
        );
    }

    protected function getYearLabels()
    {
        return [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Noviembre", "Diciembre" ];
    }

    public function getMonthLabels()
    {
        return range(1, intval(date('t')));
    }

    /*TODO: Store statistics in mysql database*/
    public function getYearData($field)
    {
        switch($field) {
            case 'waste':
                return [19,35,30,2,1,5,15,7,21,30,25,20];
            case 'brightness':
                return [19,80,45,48,40,86,86,28,40,48,90,28];
            case 'food':
                return [70,40,30,46,40,34,66,38,50,45,28,48];
            case 'temperature':
                return [1, 5, 15, 19, 20, 25, 30, 35, 30, 21, 7, 2];
            case 'water':
                return [28, 48, 40, 45, 86, 90, 28, 48, 40, 19, 86, 90];
        }
    }

    public function getMonthData($field)
    {
        switch($field) {
            case 'waste':
                return [79, 71, 73, 75, 70, 74, 73, 77, 74, 76, 70, 76, 74, 73, 78, 71, 77, 77, 73, 74, 74, 80, 73, 78, 72, 71, 80, 70, 79, 73, 75];
            case 'brightness':
                return [77,77,70,75,78,73,75,76,70,73,79,77,73,80,71,75,78,73,74,71,74,75,72,74,76,74,74,76,72,79,73];
            case 'food':
                return [75,77,74,80,73,75,74,73,70,76,75,78,76,77,79,78,73,74,79,72,70,74,76,71,71,73,75,72,73,74,77];
            case 'temperature':
                return [75,74,73,77,75,73,76,72,75,70,78,77,74,76,71,76,78,75,79,72,80,70,71,73,77,73,74,74,74,79,73];
            case 'water':
                return [74,73,75,78,76,72,71,79,79,72,77,76,73,74,74,73,77,75,74,80,78,71,70,77,73,75,74,75,70,76,73];
        }
    }

    protected function getChart($label, $data, $colors)
    {
        $array = [
            'labels' => $this->time == 'month' ?  $this->getMonthLabels() : $this->getYearLabels(),
            'datasets' => [
                [
                    'label' => $label,
                    'data' => $this->time == 'month' ? $this->getMonthData($data) : $this->getYearData($data),
                    'pointRadius' => 4
                ]
            ]
        ];

        foreach($colors as $key => $value) {
            $array['datasets'][0][$key] = $value;
        }
        return json_encode($array);
    }

    protected function getColors(
        $backgroundColor = null, $borderColor = null,
        $pointBackgroundColor = null, $pointBorderColor = null,
        $pointHoverBackgroundColor = null, $pointHoverBorderColor = null
    ) {

        $result = [];

        if($backgroundColor) {
            $result['backgroundColor'] = $backgroundColor;
        }

        if($borderColor) {
            $result['borderColor'] = $borderColor;
        }

        if($pointBackgroundColor) {
            $result['pointBackgroundColor'] = $pointBackgroundColor;
        }

        if($pointBorderColor) {
            $result['pointBorderColor'] = $pointBorderColor;
        }

        if($pointHoverBackgroundColor) {
            $result['pointHoverBackgroundColor'] = $pointHoverBackgroundColor;
        }

        if($pointHoverBorderColor) {
            $result['pointHoverBorderColor'] = $pointHoverBorderColor;
        }

        return $result;
    }

}
