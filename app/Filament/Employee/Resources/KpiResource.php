<?php

namespace App\Filament\Employee\Resources;

use App\Filament\Employee\Resources\KpiResource\Pages;
use App\Filament\Employee\Resources\KpiResource\RelationManagers;
use App\Models\Kpi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KpiResource extends Resource
{
    protected static ?string $model = Kpi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', auth()->id());
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('user_id')
                    ->default(auth()->id()),
                Forms\Components\TextInput::make('metric')
                    ->readOnly(),
                Forms\Components\TextInput::make('value')
                    ->readOnly()
                    ->numeric(),
                Forms\Components\TextInput::make('target')
                    ->readOnly()
                    ->numeric(),
                Forms\Components\TextInput::make('period')
                    ->readOnly(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('metric')
                    ->searchable(),
                Tables\Columns\TextColumn::make('value')
                    ->numeric(),
                Tables\Columns\TextColumn::make('target')
                    ->numeric(),
                Tables\Columns\TextColumn::make('period')
                    ->searchable(),
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
            'index' => Pages\ManageKpis::route('/'),
        ];
    }
}
