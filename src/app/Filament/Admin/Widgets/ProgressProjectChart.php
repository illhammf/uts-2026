<?php

namespace App\Filament\Admin\Widgets;

use App\Models\ProjectProgress;
use Filament\Widgets\ChartWidget;

class ProgressProjectChart extends ChartWidget
{
    protected static ?string $heading = 'Grafik Progress Project Akhir';

    protected static ?int $sort = 2;

    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        $progresses = ProjectProgress::orderBy('persentase')->get();

        return [
            'datasets' => [
                [
                    'label' => 'Progress (%)',
                    'data' => $progresses->pluck('persentase')->toArray(),
                    'backgroundColor' => [
                        '#f97316',
                        '#fb923c',
                        '#ea580c',
                        '#c2410c',
                        '#9a3412',
                    ],
                    'borderColor' => '#ea580c',
                    'borderWidth' => 2,
                    'borderRadius' => 8,
                ],
            ],
            'labels' => $progresses->pluck('judul_progress')->toArray(),
        ];
    }

    protected function getOptions(): array
    {
        return [
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'min' => 0,
                    'max' => 100,
                    'ticks' => [
                        'stepSize' => 10,
                    ],
                ],
            ],
            'plugins' => [
                'legend' => [
                    'display' => true,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}