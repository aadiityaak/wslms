<?php

namespace App\Filament\Employee\Resources\OnboardingResource\Pages;

use App\Filament\Employee\Resources\OnboardingResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageOnboardings extends ManageRecords
{
    protected static string $resource = OnboardingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
