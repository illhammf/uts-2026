<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProjectProgressResource\Pages;
use App\Models\ProjectProgress;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectProgressResource extends Resource
{
    protected static ?string $model = ProjectProgress::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationGroup = 'Manajemen Project';
    protected static ?string $navigationLabel = 'Progress Project';
    protected static ?string $modelLabel = 'Progress';
    protected static ?string $pluralModelLabel = 'Progress Project';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Section::make('Informasi Progress')
                    ->schema([

                        Forms\Components\Select::make('project_id')
                            ->label('Project')
                            ->relationship('project', 'judul')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Forms\Components\TextInput::make('judul_progress')
                            ->label('Judul Progress')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\Textarea::make('deskripsi_progress')
                            ->label('Deskripsi Progress')
                            ->rows(5)
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('persentase')
                            ->label('Persentase Progress')
                            ->required()
                            ->numeric()
                            ->suffix('%')
                            ->minValue(0)
                            ->maxValue(100)
                            ->default(0),

                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->required()
                            ->options([
                                'belum' => 'Belum',
                                'progress' => 'Progress',
                                'selesai' => 'Selesai',
                            ])
                            ->default('progress'),

                        Forms\Components\DatePicker::make('tanggal')
                            ->label('Tanggal Progress')
                            ->default(now()),
                    ])
                    ->columns(2),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('project.judul')
                    ->label('Project')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('judul_progress')
                    ->label('Judul Progress')
                    ->searchable()
                    ->limit(35),

                Tables\Columns\TextColumn::make('persentase')
                    ->label('Progress')
                    ->suffix('%')
                    ->sortable(),

                Tables\Columns\BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'gray' => 'belum',
                        'warning' => 'progress',
                        'success' => 'selesai',
                    ]),

                Tables\Columns\TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->date('d M Y')
                    ->sortable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Terakhir Diubah')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

            ])
            ->filters([

                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'belum' => 'Belum',
                        'progress' => 'Progress',
                        'selesai' => 'Selesai',
                    ]),

            ])
            ->actions([

                Tables\Actions\ViewAction::make()
                    ->label('Lihat'),

                Tables\Actions\EditAction::make()
                    ->label('Edit'),

                Tables\Actions\DeleteAction::make()
                    ->label('Hapus'),

            ])
            ->bulkActions([

                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Hapus Terpilih'),
                ]),

            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [

            'index' => Pages\ListProjectProgress::route('/'),
            'create' => Pages\CreateProjectProgress::route('/create'),
            'edit' => Pages\EditProjectProgress::route('/{record}/edit'),

        ];
    }
}
