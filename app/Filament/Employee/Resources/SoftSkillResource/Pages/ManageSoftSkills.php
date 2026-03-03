<?php

namespace App\Filament\Employee\Resources\SoftSkillResource\Pages;

use App\Filament\Employee\Resources\SoftSkillResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSoftSkills extends ManageRecords
{
    protected static string $resource = SoftSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
