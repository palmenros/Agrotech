<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {
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
         return $this->getMonthChart(
            '%',
            [28, 48, 40, 19, 86, 90, 28, 48, 40, 19, 86, 90],
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
         return $this->getMonthChart(
            '%',
            [28, 48, 40, 19, 86, 90, 28, 48, 40, 19, 86, 90],
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
         return $this->getMonthChart(
            'Gramos',
            [28, 48, 40, 19, 86, 90, 28, 48, 40, 19, 86, 90],
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
         return $this->getMonthChart(
            'ºC',
            [28, 48, 40, 19, 86, 90, 28, 48, 40, 19, 86, 90],
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
         return $this->getMonthChart(
            'Litros',
            [28, 48, 40, 19, 86, 90, 28, 48, 40, 19, 86, 90],
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

    protected function getMonthLabels()
    {
        return [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Noviembre", "Diciembre" ];
    }

    protected function getMonthChart($label, $data, $colors)
    {
        $array = [
            'labels' => $this->getMonthLabels(),
            'datasets' => [
                [
                    'label' => $label,
                    'data' => $data,
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
