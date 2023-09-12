<?php

namespace App\Charts;

use App\Models\student;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class studentChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $student_data = student::all();
        $data = [
            $student_data->where('grade', 'A')->count(),
            $student_data->where('grade', 'B')->count(),
            $student_data->where('grade', 'C')->count(),
            $student_data->where('grade', 'D')->count(),
        ];

        return $this->chart->barChart()
            ->setTitle('Grafik Grade Mahasiswa')
            ->setSubtitle('Grade Mahasiswa')
            ->addData('Grade', $data)
            ->setXAxis(['A', 'B', 'C', 'D']);
    }
}
