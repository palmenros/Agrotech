<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {
        return view('statistics', [
            'waterData' => $this->getWaterChart()
        ]);
    }

    public function getWaterChart()
    {
        //"pointBackgroundColor": "rgba(151,187,205,1)", "pointBorderColor": "#fff", "pointHoverBackgroundColor": "#fff", "pointHoverBorderColor": "rgba(151,187,205,1)"
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
