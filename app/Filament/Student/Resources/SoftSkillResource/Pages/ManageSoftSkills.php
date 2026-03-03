<?php

namespace App\Filament\Student\Resources\SoftSkillResource\Pages;

use App\Filament\Student\Resources\SoftSkillResource;
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
