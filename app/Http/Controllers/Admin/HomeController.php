<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'           => 'Cases by Country and Date',
            'chart_type'            => 'line',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Infection',
            'conditions'            => [
                ['name' => 'United Arab Emirates (9.40 mln people)', 'condition' => 'country_id = 227', 'color' => 'green'],
                ['name' => 'Cameroon (24.2 mln1. people)', 'condition' => 'country_id = 37', 'color' => 'blue'],
                ['name' => 'United States (327.20 mln people)', 'condition' => 'country_id = 229', 'color' => 'red'],
                ['name' => 'China (1327.20 mln people)', 'condition' => 'country_id = 44', 'color' => 'yellow'],
                ['name' => 'France (66.99 mln people)', 'condition' => 'country_id = 73', 'color' => 'Magenta'],
                ['name' => 'United Kingdom (66.99 mln people)', 'condition' => 'country_id = 228', 'color' => 'Black'],
                ['name' => 'Spain (46.94 mln people)', 'condition' => 'country_id = 202', 'color' => '#336521'],
            ],
            'group_by_field'        => 'report_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'sum',
            'aggregate_field'       => 'infections',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'Y-m-d',
            'column_class'          => 'col-md-12',
            'entries_number'        => '5',
        ];

        $chart1 = new LaravelChart($settings1);

        return view('home', compact('chart1'));
    }
}
