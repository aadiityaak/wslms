<?php

namespace App\Filament\Resources\TalentPoolResource\Pages;

use App\Filament\Resources\TalentPoolResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTalentPool extends EditRecord
{
    protected static string $resource = TalentPoolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
