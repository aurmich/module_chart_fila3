<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources;

use Filament\Forms;
<<<<<<< HEAD
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Unique;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Modules\Geo\Filament\Forms\Components\AddressField;
use Modules\Geo\Filament\Resources\AddressResource;
use Modules\Notify\Emails\SpatieEmail;
use Modules\SaluteOra\Actions\ProcessDoctorModerationAction;
use Modules\SaluteOra\Enums\UserStateEnum;
use Modules\SaluteOra\Filament\Resources\DoctorResource\Pages;
use Modules\SaluteOra\Filament\Resources\DoctorResource\RelationManagers;
use Modules\SaluteOra\Models\Doctor;
use Modules\SaluteOra\Models\DoctorRegistrationWorkflow;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\User;
use Modules\UI\Filament\Forms\Components\OpeningHoursField;
use Modules\User\Models\Device;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Spatie\MailTemplates\TemplateMailable;
use Spatie\Permission\Traits\HasRoles;
=======
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Support\HtmlString;
use Modules\SaluteOra\Models\Doctor;
use Modules\SaluteOra\Models\DoctorRegistrationWorkflow;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\SaluteOra\Filament\Resources\DoctorResource\Pages;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Auth;
use Modules\SaluteOra\Actions\ProcessDoctorModerationAction;
use Illuminate\Support\Arr;
use Filament\Resources\Resource;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use Modules\Notify\Emails\SpatieEmail;
use Spatie\MailTemplates\TemplateMailable;
use Illuminate\Support\Facades\Gate;
>>>>>>> 54f4fa16 (.)

/**
 * Class DoctorResource
 *
 * @package  Modules\Patient
 *
 * @property  string  $recordTitleAttribute
 */
class DoctorResource extends XotBaseResource
{
<<<<<<< HEAD
    protected static ?string $tenantOwnershipRelationshipName = 'studios';
    protected static bool $isTenantFilterable = true;
    protected static ?string $model = Doctor::class;



    public static function getFormSchema(): array
    {
         //$schema = parent::getFormSchema();

        // Aggiungi qui eventuali campi specifici per SaluteMo
        //return $schema;
        return [
        
            'first_name' => Forms\Components\TextInput::make('first_name')
                ->required()
                ->maxLength(255)
                ->autocomplete('given-name')
                ,
            'last_name' => Forms\Components\TextInput::make('last_name')
                ->required()
                ->maxLength(255)
                ->autocomplete('family-name')
                ,
            'email' => Forms\Components\TextInput::make('email')
                ->required()
                ,
                ...self::getAttachmentsSchema(false),
        ];
    }


    public static function getFormSchemaWidget(): array
    {
        
        return [
            Forms\Components\Wizard::make(self::getWizardSteps())
            ->skippable(false)
            ->submitAction(static::getWizardSubmitAction())
            ->persistStepInQueryString()
            //->startOnStep(fn(Get $get)=>static::getWizardStartOnStep($get))
            //->live()
            ->columnSpanFull(),
        ];
    }

    public static function getWizardStartOnStep(Get $get):int{
        if($get('id')!==null){
            return 0;
        }
        return 0;
    }

    public static function getWizardSteps():array{
        return [
            self::getStepByName('personal_info_step')
                ->icon('heroicon-o-user'),
            self::getStepByName('studio_step')
                ->icon('heroicon-o-building-office'),
            self::getStepByName('availability_step')
                ->icon('heroicon-o-calendar'),
            self::getStepByName('privacy_step')
                ->icon('heroicon-o-shield-check'),
        ];
    }            


=======
    use HasRoles; // Aggiungo l'uso del trait HasRoles

    protected static ?string $model = Doctor::class;

    protected static ?string $translationPrefix = 'doctor-resource';

    public static function getFormSchema(): array
    {
        return static::getFormSchemaWidget();
    }

    /**
     * Get the submit button HTML for the wizard
     *
     * @return string
     */
    protected static function getSubmitButton(): string
    {
        return '<button type="submit" class="w-full bg-blue-900 text-white text-lg font-medium py-3 px-6 rounded-full hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50 shadow-sm hover:shadow-md transition-all duration-200 flex items-center justify-center">
            <span>ACCETTA E CONTINUA</span>
        </button>';
    }

    public static function getFormSchemaWidget(): array
    {
        return [
            Forms\Components\Wizard::make([
                self::getPersonalInfoStep(),
                self::getModerationStep(),
                self::getContactsStep(),
                self::getProfessionalStep(),
                self::getAvailabilityStep(),
            ])
            ->skippable(false)
            ->submitAction(new HtmlString(self::getSubmitButton()))
            ->columnSpan('full')
            ->persistStepInQueryString()
            ->startOnStep(
                fn () => request()->has('token')
                    ? array_search('contacts', array_keys(DoctorRegistrationWorkflow::getSteps()))
                    : 0
            )
        ];
    }

>>>>>>> 54f4fa16 (.)
    /**
     * Step UI allineato a /docs/images/13.md, 13.html, 13.blade.php
     * - Campo full_name per Nome e Cognome (come da convenzioni naming)
     * - FileUpload certification (Certificazione iscrizione Ordine)
     * - Nessun altro campo
     */
<<<<<<< HEAD
    protected static function getPersonalInfoStepSchema(): array
    {
        return [
            'id' => Forms\Components\Hidden::make('id'),
            'first_name' => Forms\Components\TextInput::make('first_name')
                ->required()
                ->maxLength(255)
                ->autocomplete('given-name'),
                
            'last_name' => Forms\Components\TextInput::make('last_name')
                ->required()
                ->maxLength(255)
                ->autocomplete('family-name'),

            'email' => Forms\Components\TextInput::make('email')
                ->required()
                ->email()
                ->maxLength(255)
                ->autocomplete('email')
                ->readonly(fn($get) => $get('id') !== null)
                ->extraAttributes(function ($get) {
                    return $get('id') !== null
                        ? ['class' => 'bg-gray-100 border-gray-300 cursor-not-allowed opacity-90']
                        : [];
                })
                ->rules(function ($get) {
                    return [
                        Rule::unique(User::class, 'email')->ignore($get('id'))
                    ];
                }),
                ...self::getAttachmentsSchema(false),
            /*
            // Download PDF per modulo privacy
            'download_privacy_form' => Forms\Components\Placeholder::make('download_privacy_form')
                ->label('')
                ->content(new \Illuminate\Support\HtmlString(
                    '<div class="mt-4 p-4 bg-gray-50 rounded-lg border border-gray-200">
                        <div class="flex items-center justify-center">
                            <a href="' . asset('pdf/modulo-privacy-trattamento-dati.pdf') . '" 
                               target="_blank" 
                               class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                ' . __('saluteora::doctor.actions.download_privacy_form.label') . '
                            </a>
                        </div>
                        <p class="text-xs text-gray-500 text-center mt-2">
                            ' . __('saluteora::doctor.actions.download_privacy_form.description') . '
                        </p>
                    </div>'
                ))
                ->columnSpanFull(),
            */
        ]  ;
    }

    

    protected static function getStudioStepSchema (): array
    {
        $schema = StudioResource::getFormSchemaForWizard();
        
        return [
                Forms\Components\Section::make('Dati Studio')
                ->relationship('studio')  
                ->schema($schema)
            ];
    }

   
    protected static function getAvailabilityStepSchema (): array
    {
        return [
                'availability_section' => OpeningHoursField::make('schedule')
                //    ->label(__('saluteora::doctor_availability.sections.weekly_availability'))
                    //->helperText(__('saluteora::doctor_availability.fields.is_available.help'))
                //    ->columnSpanFull(),
                    
            ];
    }


     /**
     * Get privacy step schema for the wizard
     *
     * @return array<string, \Filament\Forms\Components\Component>
     */
    protected static function getPrivacyStepSchema(): array
    {
        return [
            'privacy_policy' => Forms\Components\View::make('pub_theme::gdpr.doctor-privacy-policy')
                ->columnSpanFull(),
            'privacy_acceptance' => Forms\Components\Checkbox::make('privacy_acceptance')
                ->required()
                ->rules(['accepted'])
                ->columnSpanFull(),
            //'newsletter' => Forms\Components\Checkbox::make('newsletter')
           //     ->columnSpanFull(),
        ];
=======
    protected static function getPersonalInfoStep(): Forms\Components\Wizard\Step
    {
        // Non utilizzare $translationPrefix, ma direttamente il namespace di traduzione

        return Forms\Components\Wizard\Step::make('personal_info')
            ->icon('heroicon-o-user')
            ->schema([
                'personal_section' => Forms\Components\Section::make()
                    ->schema([
                        'first_name' => Forms\Components\TextInput::make('first_name')
                            ->required()
                            ->maxLength(255)
                            ->autocomplete('given-name')
                            ->placeholder(__('saluteora::doctor-resource.first_name')),
                        'last_name' => Forms\Components\TextInput::make('last_name')
                            ->required()
                            ->maxLength(255)
                            ->autocomplete('family-name')
                            ->placeholder(__('saluteora::doctor-resource.last_name')),
                        'email' => Forms\Components\TextInput::make('email')
                            ->required()
                            ->email()
                            ->maxLength(255)
                            ->autocomplete('email')
                            ->placeholder(__('saluteora::doctor-resource.email')),
                        'certifications' => Forms\Components\FileUpload::make('certifications')
                            ->required()
                            ->multiple()
                            ->acceptedFileTypes(['application/pdf'])
                            ->maxSize(5120)
                            ->directory('certifications')
                            ->placeholder(__('saluteora::doctor-resource.certifications')),
                    ]),
            ])
            
            ->afterValidation(function (Forms\Set $set, Form $form) {
                // Crea o recupera il workflow
                $workflow = DoctorRegistrationWorkflow::firstOrCreate(
                    ['session_id' => session()->getId()],
                    [
                        'current_step' => 'personal_info',
                        'status' => DoctorRegistrationWorkflow::STATUS_DRAFT,
                        'started_at' => now(),
                        'created_by' => Auth::id(),
                    ]
                );

                // Aggiorna lo stato
                $workflow->status = DoctorRegistrationWorkflow::STATUS_PENDING_MODERATION;
                $workflow->step_data = array_merge($workflow->step_data ?? [], [
                    'personal_info' => Arr::only($form->getState(), ['first_name', 'last_name', 'email', 'certification']),
                ]);
                $workflow->save();

                // Salva l'ID del workflow in sessione
                session(['doctor_registration_workflow_id' => $workflow->id]);

                // Invio email con il link di continuazione dopo la moderazione
                $data = $form->getState();
                $doctor = Doctor::create([
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'email' => $data['email'] ?? '',
                    'phone' => $data['phone'] ?? '',
                    'state' => \Modules\SaluteOra\States\Pending::class,
                ]);
                self::sendContinuationLink($doctor);
            });
    }

    /**
     * Step di moderazione, visibile solo agli amministratori.
     */
    protected static function getModerationStep(): Forms\Components\Wizard\Step
    {
        return Forms\Components\Wizard\Step::make('moderation')
            ->icon('heroicon-o-shield-check')
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\View::make('saluteora::filament.doctor-moderation-summary')
                            ->visible(fn () => Auth::check() && Gate::allows('moderate_doctors')),

                        Forms\Components\Placeholder::make('moderation_status')
                            ->content(fn ($record) => $record->workflow?->status === DoctorRegistrationWorkflow::STATUS_PENDING_MODERATION
                                ? __('saluteora::doctor-resource.moderation.pending')
                                : ($record->workflow?->isModerationApproved()
                                    ? __('saluteora::doctor-resource.moderation.approved')
                                    : __('saluteora::doctor-resource.moderation.rejected'))),

                        Forms\Components\Textarea::make('moderation_notes')
                            ->visible(fn () => Auth::check() && Gate::allows('moderate_doctors'))
                            ->rows(3)
                            ->placeholder(__('saluteora::doctor-resource.moderation_notes')),

                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\Actions::make([
                                    Forms\Components\Actions\Action::make('approve')
                                        ->icon('heroicon-o-check')
                                        ->color('success')
                                        ->action(function ($record, Forms\Get $get) {
                                            app(ProcessDoctorModerationAction::class)->execute(
                                                $record->workflow,
                                                true,
                                                $get('moderation_notes'),
                                                Auth::id()
                                            );
                                        })
                                        ->requiresConfirmation()
                                        ->label(__('saluteora::doctor-resource.moderation.approve')),

                                    Forms\Components\Actions\Action::make('reject')
                                        ->icon('heroicon-o-x-mark')
                                        ->color('danger')
                                        ->action(function ($record, Forms\Get $get) {
                                            app(ProcessDoctorModerationAction::class)->execute(
                                                $record->workflow,
                                                false,
                                                $get('moderation_notes'),
                                                Auth::id()
                                            );
                                        })
                                        ->requiresConfirmation()
                                        ->label(__('saluteora::doctor-resource.moderation.reject')),
                                ])
                                ->visible(fn () => Auth::check() && Gate::allows('moderate_doctors')),
                            ]),
                    ]),
            ])
            ->visible(fn () => (Auth::check() && Gate::allows('moderate_doctors')) ||
                (session()->has('doctor_registration_workflow_id') &&
                DoctorRegistrationWorkflow::find(session('doctor_registration_workflow_id'))?->isPendingModeration()));
    }

    protected static function getContactsStep(): Forms\Components\Wizard\Step
    {
        // Non utilizzare $translationPrefix, ma direttamente il namespace di traduzione

        return Forms\Components\Wizard\Step::make('contacts')
            ->icon('heroicon-o-envelope')
            ->schema([
                'contacts_section' => Forms\Components\Section::make()
                    ->schema([
                        'contacts_grid' => Forms\Components\Grid::make(2)
                            ->schema([
                                'phone' => Forms\Components\TextInput::make('phone')
                                    ->tel()
                                    ->required()
                                    ->placeholder(__('saluteora::doctor-resource.phone')),

                                'address' => Forms\Components\TextInput::make('address')
                                    ->required()
                                    ->placeholder(__('saluteora::doctor-resource.address')),

                                'city' => Forms\Components\TextInput::make('city')
                                    ->required()
                                    ->placeholder(__('saluteora::doctor-resource.city')),
                            ]),
                    ]),
            ])
            ->visible(fn () => request()->has('token') ||
                (session()->has('doctor_registration_workflow_id') &&
                DoctorRegistrationWorkflow::find(session('doctor_registration_workflow_id'))?->isModerationApproved()));
    }

    protected static function getProfessionalStep(): Forms\Components\Wizard\Step
    {
        // Non utilizzare $translationPrefix, ma direttamente il namespace di traduzione

        return Forms\Components\Wizard\Step::make('professional')
            ->icon('heroicon-o-academic-cap')
            ->schema([
                'professional_section' => Forms\Components\Section::make()
                    ->schema([
                        'professional_grid' => Forms\Components\Grid::make(2)
                            ->schema([
                                'registration_number' => Forms\Components\TextInput::make('registration_number')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->placeholder(__('saluteora::doctor-resource.registration_number')),

                                'certifications' => Forms\Components\FileUpload::make('certifications')
                                    ->multiple()
                                    ->directory('doctors/certifications')
                                    ->acceptedFileTypes(['application/pdf'])
                                    ->maxSize(10240)
                                    ->columnSpanFull()
                                    ->placeholder(__('saluteora::doctor-resource.certifications')),
                            ]),
                    ]),
            ])
            ->visible(fn () => request()->has('token') ||
                (session()->has('doctor_registration_workflow_id') &&
                DoctorRegistrationWorkflow::find(session('doctor_registration_workflow_id'))?->isModerationApproved()));
    }

    protected static function getAvailabilityStep(): Forms\Components\Wizard\Step
    {
        // Non utilizzare $translationPrefix, ma direttamente il namespace di traduzione

        return Forms\Components\Wizard\Step::make('availability')
            ->icon('heroicon-o-calendar')
            ->schema([
                'availability_section' => Forms\Components\Section::make()
                    ->schema([
                        'availability_repeater' => Forms\Components\Repeater::make('availability')
                            ->schema([
                                'day' => Forms\Components\Select::make('day')
                                    ->options(\Modules\Xot\Enums\DayOfWeek::cases())
                                    ->getOptionLabelUsing(fn ($value) => __("xot::enums.day_of_week.{$value}"))
                                    ->placeholder(__('saluteora::doctor-resource.day')),

                                'start_time' => Forms\Components\TimePicker::make('start_time')
                                    ->seconds(false)
                                    ->required()
                                    ->placeholder(__('saluteora::doctor-resource.start_time')),

                                'end_time' => Forms\Components\TimePicker::make('end_time')
                                    ->seconds(false)
                                    ->required()
                                    ->placeholder(__('saluteora::doctor-resource.end_time')),
                            ])
                            ->columns(3)
                            ->defaultItems(1)
                            ->reorderable(false),
                    ]),
            ])
            ->visible(fn () => request()->has('token') ||
                (session()->has('doctor_registration_workflow_id') &&
                DoctorRegistrationWorkflow::find(session('doctor_registration_workflow_id'))?->isModerationApproved()));
>>>>>>> 54f4fa16 (.)
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDoctors::route('/'),
            'create' => Pages\CreateDoctor::route('/create'),
            'edit' => Pages\EditDoctor::route('/{record}/edit'),
        ];
    }

<<<<<<< HEAD
   

    /**
     * @return array<class-string>
     */
    public static function getRelations(): array
    {
        return [
            //RelationManagers\StudiosRelationManager::class,
        ];
=======
    // Metodo per generare e inviare il link di continuazione dopo la moderazione
    public static function sendContinuationLink(Doctor $doctor): void
    {
        if ($doctor->state->isApproved()) {
            $token = sha1($doctor->email . now());
            $continuationUrl = URL::temporarySignedRoute(
                'doctor.registration.continue',
                now()->addDays(7),
                ['doctor' => $doctor->id, 'token' => $token]
            );

            // Invio email con il link di continuazione utilizzando SpatieEmail
            $email = new SpatieEmail($doctor, 'registration_moderated');
            Mail::to($doctor->email)->locale('it')->send($email);

            // Salva il token nel database per verifica successiva (opzionale)
            $doctor->update(['continuation_token' => $token]);
        }
    }

    // Metodo per riprendere la registrazione
    public static function resumeRegistration($doctorId, $token)
    {
        $doctor = Doctor::findOrFail($doctorId);
        if (hash_equals($doctor->continuation_token, $token) && $doctor->state->isApproved()) {
            return redirect()->route('filament.resources.doctors.edit', $doctor);
        }
        abort(403, 'Link non valido o scaduto.');
>>>>>>> 54f4fa16 (.)
    }
}
