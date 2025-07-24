<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    protected static ?string $navigationLabel = 'Acara';

    protected static ?string $modelLabel = 'Acara';

    protected static ?string $pluralModelLabel = 'Daftar Acara';

    protected static ?string $navigationGroup = 'Manajemen Konten';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Section 1: Informasi Dasar Event
                Forms\Components\Section::make('Informasi Dasar Event')
                    ->description('Masukkan informasi dasar tentang event Anda')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Nama Event')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                    ->placeholder('Masukkan nama event')
                                    ->columnSpan(1),
                                Forms\Components\TextInput::make('slug')
                                    ->label('URL Slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true)
                                    ->placeholder('url-event-anda')
                                    ->helperText('URL yang akan digunakan untuk akses event')
                                    ->columnSpan(1),
                            ]),
                        Forms\Components\Textarea::make('description')
                            ->label('Deskripsi Event')
                            ->required()
                            ->rows(4)
                            ->placeholder('Jelaskan detail tentang event Anda...')
                            ->columnSpanFull(),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('location')
                                    ->label('Lokasi')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('Alamat lengkap venue')
                                    ->prefixIcon('heroicon-m-map-pin')
                                    ->columnSpan(1),
                                Forms\Components\Select::make('status')
                                    ->label('Status Event')
                                    ->required()
                                    ->options([
                                        'Draft' => 'Draft',
                                        'Published' => 'Dipublikasikan',
                                        'Archived' => 'Diarsipkan',
                                        'Cancelled' => 'Dibatalkan',
                                    ])
                                    ->default('draft')
                                    ->native(false)
                                    ->columnSpan(1),
                            ]),
                        Forms\Components\Select::make('categories')
                            ->label('Kategori')
                            ->relationship(
                                name: 'categories',
                                titleAttribute: 'name',
                                modifyQueryUsing: fn(Builder $query) => $query->orderBy('name')
                            )
                            ->multiple()
                            ->preload()
                            ->searchable()
                            ->required()
                            ->columnSpanFull(),
                    ])
                    ->collapsible(),
                // Section 2: Jadwal Event
                Forms\Components\Section::make('Jadwal Event')
                    ->description('Tentukan waktu pelaksanaan dan periode registrasi')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\DateTimePicker::make('start_date')
                                    ->label('Tanggal & Waktu Mulai')
                                    ->required()
                                    ->native(false)
                                    ->displayFormat('d/m/Y H:i')
                                    ->minDate(now())
                                    // ->live()
                                    // ->afterStateUpdated(function (Set $set, ?string $state) {
                                    //     if ($state) {
                                    //         $set('registration_close_date', Carbon::parse($state)->subHours(2));
                                    //     }
                                    // })
                                    ->columnSpan(1),
                                Forms\Components\DateTimePicker::make('end_date')
                                    ->label('Tanggal & Waktu Selesai')
                                    ->required()
                                    ->native(false)
                                    ->displayFormat('d/m/Y H:i')
                                    ->minDate(fn(Get $get) => $get('start_date') ?: now())
                                    ->columnSpan(1),
                            ]),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\DateTimePicker::make('registration_open_date')
                                    ->label('Buka Registrasi')
                                    ->required()
                                    ->native(false)
                                    ->displayFormat('d/m/Y H:i')
                                    ->default(now())
                                    // ->maxDate(fn(Get $get) => $get('start_date'))
                                    ->columnSpan(1),
                                Forms\Components\DateTimePicker::make('registration_close_date')
                                    ->label('Tutup Registrasi')
                                    ->required()
                                    ->native(false)
                                    ->displayFormat('d/m/Y H:i')
                                    // ->maxDate(fn(Get $get) => $get('start_date'))
                                    ->columnSpan(1),
                            ]),
                    ])
                    ->collapsible(),
                // Section 3: Harga & Kapasitas
                Forms\Components\Section::make('Harga & Kapasitas')
                    ->description('Atur harga tiket dan jumlah peserta')
                    ->schema([
                        Forms\Components\Grid::make(3)
                            ->schema([
                                Forms\Components\TextInput::make('price')
                                    ->label('Harga Tiket')
                                    ->required()
                                    ->numeric()
                                    ->prefix('Rp')
                                    ->mask(RawJs::make("\$money(\$input, ',', '.', 0)"))
                                    ->placeholder('0')
                                    ->columnSpan(1),
                                Forms\Components\TextInput::make('max_participants')
                                    ->label('Kapasitas Maksimal')
                                    ->numeric()
                                    ->placeholder('Kosongkan jika unlimited')
                                    ->minValue(1)
                                    ->live()
                                    ->helperText('Jumlah maksimal peserta yang dapat mendaftar')
                                    ->columnSpan(1),
                                Forms\Components\TextInput::make('current_participants')
                                    ->label('Peserta Saat Ini')
                                    ->required()
                                    ->numeric()
                                    ->default(0)
                                    ->minValue(0)
                                    ->maxValue(fn(Get $get) => $get('max_participants') ?: 9999)
                                    ->readOnly()
                                    ->helperText('Otomatis terupdate saat ada registrasi')
                                    ->columnSpan(1),
                            ]),
                        // Progress bar untuk kapasitas
                        Forms\Components\Placeholder::make('capacity_progress')
                            ->label('Tingkat Okupansi')
                            ->content(function (Get $get) {
                                $current = $get('current_participants') ?: 0;
                                $max = $get('max_participants') ?: 0;

                                if ($max == 0)
                                    return 'Unlimited';

                                $percentage = round(($current / $max) * 100, 1);

                                return new HtmlString("
                                <div class='w-full bg-gray-200 rounded-full h-2.5 mb-2'>
                                    <div class='bg-blue-600 h-2.5 rounded-full' style='width: {$percentage}%'></div>
                                </div>
                                <span class='text-sm text-gray-600'>{$current} dari {$max} peserta ({$percentage}%)</span>
                            ");
                            })
                            ->visible(fn(Get $get) => $get('max_participants') > 0),
                    ])
                    ->collapsible(),
                // Section 4: Media & Tampilan
                Forms\Components\Section::make('Media & Tampilan')
                    ->description('Upload poster dan media pendukung event')
                    ->schema([
                        Forms\Components\FileUpload::make('poster_img')
                            ->label('Poster Event')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->maxSize(5120)  // 5MB
                            ->directory('event-posters')
                            ->visibility('public')
                            ->helperText('Format: JPG, PNG. Maksimal 5MB. Rasio disarankan 16:9')
                            ->columnSpanFull(),
                    ])
                    ->collapsible(),
                // Hidden field untuk user_id - akan diisi otomatis
                Forms\Components\Hidden::make('user_id')
                    ->default(auth()->id()),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Pembuat')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Acara')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->label('Mulai')
                    ->dateTime('d F Y H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->label('Selesai')
                    ->dateTime('d F Y H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('registration_open_date')
                    ->label('Buka Registrasi')
                    ->dateTime('d F Y H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('registration_close_date')
                    ->label('Tutup Registrasi')
                    ->dateTime('d F Y H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('location')
                    ->label('Lokasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money('IDR')
                    ->label('Harga')
                    ->sortable(),
                Tables\Columns\TextColumn::make('max_participants')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('current_participants')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\SelectColumn::make('status')
                    ->label('Status')
                    ->options([
                        'Draft' => 'Draft',
                        'Published' => 'Dipublikasikan',
                        'Archived' => 'Diarsipkan',
                        'Cancelled' => 'Dibatalkan',
                    ]),
                Tables\Columns\ImageColumn::make('poster_img')
                    ->label('Poster'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
