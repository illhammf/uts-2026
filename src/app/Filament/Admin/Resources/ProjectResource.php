<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder-open';
    protected static ?string $navigationGroup = 'Manajemen Project';
    protected static ?string $navigationLabel = 'Project Akhir';
    protected static ?string $modelLabel = 'Project';
    protected static ?string $pluralModelLabel = 'Project Akhir';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Section::make('Informasi Project')
                    ->description('Data utama project yang akan tampil di halaman showcase.')
                    ->schema([
                        Forms\Components\TextInput::make('judul')
                            ->label('Judul Project')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                                if ($operation === 'create') {
                                    $set('slug', Str::slug($state));
                                }
                            })
                            ->maxLength(255),

                        Forms\Components\TextInput::make('slug')
                            ->label('Slug URL')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),

                        Forms\Components\Textarea::make('deskripsi_singkat')
                            ->label('Deskripsi Singkat')
                            ->required()
                            ->rows(4)
                            ->columnSpanFull(),

                        Forms\Components\Select::make('status_project')
                            ->label('Status Project')
                            ->required()
                            ->options([
                                'planning' => 'Planning',
                                'progress' => 'Progress',
                                'testing' => 'Testing',
                                'selesai' => 'Selesai',
                            ])
                            ->default('progress'),

                        Forms\Components\TextInput::make('progress')
                            ->label('Progress (%)')
                            ->required()
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(100)
                            ->suffix('%')
                            ->default(0),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Analisis & Kebutuhan Sistem')
                    ->description('Isi sesuai laporan awal project akhir.')
                    ->schema([
                        Forms\Components\Textarea::make('analisis_masalah')
                            ->label('Analisis Masalah')
                            ->rows(5)
                            ->columnSpanFull(),

                        Forms\Components\Textarea::make('kebutuhan_sistem')
                            ->label('Kebutuhan Sistem')
                            ->rows(5)
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Arsitektur & Tech Stack')
                    ->description('Teknologi yang digunakan dalam project.')
                    ->schema([
                        Forms\Components\Textarea::make('arsitektur')
                            ->label('Arsitektur Sistem')
                            ->rows(4)
                            ->columnSpanFull(),

                        Forms\Components\Textarea::make('tech_stack')
                            ->label('Tech Stack')
                            ->helperText('Contoh: Laravel, PHP, Blade, Docker, MariaDB, GitHub')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('File & Diagram')
                    ->description('Path file yang ditampilkan pada halaman detail project.')
                    ->schema([
                        Forms\Components\TextInput::make('gambar_erd')
                            ->label('Path Gambar ERD')
                            ->placeholder('front/diagram/erd.png')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('gambar_flowchart')
                            ->label('Path Gambar Flowchart')
                            ->placeholder('front/diagram/flowchart.png')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('file_laporan')
                            ->label('Path File Laporan PDF')
                            ->placeholder('front/laporan/laporan-uts.pdf')
                            ->maxLength(255),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul Project')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\BadgeColumn::make('status_project')
                    ->label('Status')
                    ->colors([
                        'gray' => 'planning',
                        'warning' => 'progress',
                        'info' => 'testing',
                        'success' => 'selesai',
                    ])
                    ->formatStateUsing(fn($state) => match ($state) {
                        'planning' => 'Planning',
                        'progress' => 'Progress',
                        'testing' => 'Testing',
                        'selesai' => 'Selesai',
                        default => $state,
                    }),

                Tables\Columns\TextColumn::make('progress')
                    ->label('Progress')
                    ->suffix('%')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('tech_stack')
                    ->label('Tech Stack')
                    ->limit(35)
                    ->toggleable(),

                Tables\Columns\IconColumn::make('gambar_erd')
                    ->label('ERD')
                    ->boolean()
                    ->state(fn($record) => filled($record->gambar_erd)),

                Tables\Columns\IconColumn::make('gambar_flowchart')
                    ->label('Flowchart')
                    ->boolean()
                    ->state(fn($record) => filled($record->gambar_flowchart)),

                Tables\Columns\IconColumn::make('file_laporan')
                    ->label('PDF')
                    ->boolean()
                    ->state(fn($record) => filled($record->file_laporan)),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Terakhir Diubah')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status_project')
                    ->label('Filter Status')
                    ->options([
                        'planning' => 'Planning',
                        'progress' => 'Progress',
                        'testing' => 'Testing',
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
            // Nanti bisa ditambah RelationManager untuk ProjectProgress
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'view' => Pages\ViewProject::route('/{record}'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
