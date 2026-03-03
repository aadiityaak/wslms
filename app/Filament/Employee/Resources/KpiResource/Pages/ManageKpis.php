<?php

namespace App\Filament\Employee\Resources\KpiResource\Pages;

use App\Filament\Employee\Resources\KpiResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKpis extends ManageRecords
{
    protected static string $resource = KpiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
