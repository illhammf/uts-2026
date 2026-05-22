<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Project;
use App\Models\ProjectProgress;
use App\Models\ContactMessage;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatistikDashboard extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Project Akhir', Project::count())
                ->description('Total project yang dibuat')
                ->descriptionIcon('heroicon-s-folder-open')
                ->color('primary'), // Warna biru untuk project

            Stat::make('Progress Project', ProjectProgress::count())
                ->description('Total progress project')
                ->descriptionIcon('heroicon-s-chart-bar')
                ->color('warning'), // Warna kuning untuk progress

            Stat::make('Pesan Masuk', ContactMessage::count())
                ->description('Total pesan dari form kontak')
                ->descriptionIcon('heroicon-s-envelope')
                ->color('success'), // Warna hijau untuk pesan masuk
        ];
    }
}