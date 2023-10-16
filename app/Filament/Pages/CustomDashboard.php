<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class CustomDashboard extends BaseDashboard
{
    public function getTitle(): string
    {
        return 'Analytics';
    }

    protected static ?string $navigationLabel = 'Analytics';
}
