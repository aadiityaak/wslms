<?php

namespace App\Filament\Student\Resources\LeadershipResource\Pages;

use App\Filament\Student\Resources\LeadershipResource;
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
