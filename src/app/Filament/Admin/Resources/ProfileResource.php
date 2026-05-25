<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProfileResource\Pages;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-s-user-circle';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationGroup = 'Manajemen Portofolio';
    protected static ?string $navigationLabel = 'Profil Saya';
    protected static ?string $modelLabel = 'Profil';
    protected static ?string $pluralModelLabel = 'Profil Saya';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Section::make('Identitas Mahasiswa')
                    ->schema([
                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('nim')
                            ->label('NIM')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('kampus')
                            ->label('Kampus')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('prodi')
                            ->label('Program Studi')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('semester')
                            ->label('Semester')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('judul_profesi')
                            ->label('Judul Profesi')
                            ->placeholder('Mahasiswa & Web Developer')
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Deskripsi Portofolio')
                    ->schema([
                        Forms\Components\Textarea::make('bio_singkat')
                            ->label('Bio Singkat')
                            ->rows(4)
                            ->columnSpanFull(),

                        Forms\Components\Textarea::make('deskripsi_tentang')
                            ->label('Deskripsi Tentang Saya')
                            ->rows(6)
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Kontak & Sosial Media')
                    ->schema([
                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('whatsapp')
                            ->label('Nomor WhatsApp')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('github')
                            ->label('GitHub')
                            ->url()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('instagram')
                            ->label('Instagram')
                            ->url()
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Foto')
                    ->schema([
                        Forms\Components\FileUpload::make('foto')
                            ->label('Foto Profil')
                            ->image()
                            ->directory('profiles')
                            ->imageEditor()
                            ->visibility('public')
                            ->helperText('Upload foto profil yang akan tampil di website portofolio.'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('judul_profesi')
                    ->label('Profesi')
                    ->searchable(),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->copyable(),

                Tables\Columns\TextColumn::make('whatsapp')
                    ->label('WhatsApp')
                    ->searchable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Terakhir Diubah')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Edit'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}