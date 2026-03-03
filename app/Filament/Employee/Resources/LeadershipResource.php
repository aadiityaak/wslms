<?php

namespace App\Filament\Employee\Resources;

use App\Filament\Employee\Resources\LeadershipResource\Pages;
use App\Filament\Employee\Resources\LeadershipResource\RelationManagers;
use App\Models\Leadership;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LeadershipResource extends Resource
{
    protected static ?string $model = Leadership::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->readOnly(),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull()
                    ->readOnly(),
                Forms\Components\TextInput::make('type')
                    ->readOnly(),
                Forms\Components\DatePicker::make('date')
                    ->readOnly(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageLeaderships::route('/'),
        ];
    }
}
