<?php

namespace App\Filament\Employee\Resources\LeadershipResource\Pages;

use App\Filament\Employee\Resources\LeadershipResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageLeaderships extends ManageRecords
{
    protected static string $resource = LeadershipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
