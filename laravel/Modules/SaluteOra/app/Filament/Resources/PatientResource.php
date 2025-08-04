<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
use Filament\Forms\Get;
use Filament\Forms\Set;
use Livewire\Component;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
<<<<<<< HEAD
use Filament\Widgets\Widget;
use Modules\Xot\Datas\XotData;
use Illuminate\Validation\Rule;
use Filament\Resources\Resource;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\HtmlString;
use Modules\SaluteOra\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Wizard;
use Modules\SaluteOra\Models\Patient;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Auth\Events\Registered;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Contracts\UserContract;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Wizard\Step;
use Modules\SaluteOra\Enums\NationalityEnum;
use Modules\SaluteOra\Enums\YearsInItalyEnum;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Xot\Actions\View\GetViewPathAction;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\SaluteOra\Enums\LastDentalVisitPeriodEnum;
use Modules\Patient\Filament\Components\HealthCardUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Modules\Lang\Filament\Forms\Components\NationalFlagSelect;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Tapp\FilamentCountryCodeField\Forms\Components\CountryCodeSelect;
use Modules\Media\Filament\Resources\PatientResource\Pages\PreviewAttachment;
=======
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Modules\SaluteOra\Models\Patient;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Resources\XotBaseResource\Pages;
=======
use Livewire\Component;
>>>>>>> 72f588e8 (fileupload to spatiefileupload + final button wizard)
=======
>>>>>>> 86a4d226 (✨ (patient.php): add new localization keys for reorderRecords, resetFilters, and openFilters to enhance user interface)
use Filament\Widgets\Widget;
use Modules\Xot\Datas\XotData;
use Filament\Resources\Resource;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Wizard;
use Modules\SaluteOra\Models\Patient;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Auth\Events\Registered;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Contracts\UserContract;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Wizard\Step;
use Modules\SaluteOra\Enums\NationalityEnum;
use Modules\SaluteOra\Enums\YearsInItalyEnum;
use Filament\Forms\Concerns\InteractsWithForms;
<<<<<<< HEAD
<<<<<<< HEAD
use Livewire\Component;
>>>>>>> 54f4fa16 (.)
=======
use Modules\Xot\Actions\View\GetViewPathAction;
=======
>>>>>>> 5f5e25a8 (✨ (YearsInItalyEnum.php): introduce YearsInItalyEnum to define years in Italy options for the application)

use Modules\Xot\Actions\View\GetViewPathAction;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\SaluteOra\Enums\LastDentalVisitPeriodEnum;
use Modules\Patient\Filament\Components\HealthCardUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
<<<<<<< HEAD
>>>>>>> 72f588e8 (fileupload to spatiefileupload + final button wizard)
=======
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Tapp\FilamentCountryCodeField\Forms\Components\CountryCodeSelect;
use Modules\Media\Filament\Resources\PatientResource\Pages\PreviewAttachment;
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)

class PatientResource extends XotBaseResource
{
    protected static ?string $model = Patient::class;
<<<<<<< HEAD
<<<<<<< HEAD
    //protected static ?string $tenantOwnershipRelationshipName = 'tenants';
    //protected static ?string $tenantRelationshipName = 'studios';
    protected static bool $isScopedToTenant = true;
<<<<<<< HEAD

    public array $data = [];

    public static function getFormSchemaWidget(): array
    {
        $submit_view='pub_theme::filament.wizard.submit-button';
        //dddx(strlen(session()->getId()));//40

        return [
            Forms\Components\Wizard::make([
                //self::getPersonalDataStep(),      // Step 1: Dati personali
                self::getStepByName('personal_data_step'),
                //self::getDocumentsStep(),         // Step 2: Documenti
                self::getStepByName('documents_step'),
                //self::getPreVisitStep(),          // Step 3: Informazioni preventive
                self::getStepByName('previsit_step'),
                //self::getPrivacyStep(),           // Step 4: Privacy e consensi
                self::getStepByName('privacy_step'),
            ])
            //->model(Patient::class)
            ->extraAttributes(['class' => 'mobile-friendly-wizard'])
            ->skippable(false)
            ->columnSpan('full')
            ->persistStepInQueryString()
            ->submitAction(static::getWizardSubmitAction())
        ];
    }

    

    protected static function getPersonalDataStepSchema(): array
    {
        $family_members_options=[
            '1' => 'Sola',
            '2' => '2',
            '3' => '3',
            '4+' => '4+',
        ];
        $children_count_options=[
            '0' => '0',
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ];
        return [
            'id' => Forms\Components\Hidden::make('id'),
            'first_name' => Forms\Components\TextInput::make('first_name')
                ->required()
                ->maxLength(255),
            'last_name' => Forms\Components\TextInput::make('last_name')
                ->required()
                ->maxLength(255),
            'address' => Forms\Components\TextInput::make('address')
                ->maxLength(255),
            'city' => Forms\Components\TextInput::make('city')
                ->maxLength(255),
            'nationality' => Forms\Components\Select::make('nationality')
                ->options(NationalityEnum::class)
                ->reactive()
                //->live()
                ,
            /*
            'country_code' => CountryCodeSelect::make('country_code')
                ->label(static::trans('fields.country_code.label'))
                ->visible(function (Get $get): bool {
                    if($get('nationality')=='EE'){
                        return true;
                    }
                    return false;
                }),
            */
            'country_code' => NationalFlagSelect::make('country_code')
                ->label(static::trans('fields.country_code.label'))
                ->visible(function (Get $get): bool {
                    if($get('nationality')=='EE'){
                        return true;
                    }
                    return false;
                }),
            'years_in_italy' => Forms\Components\Select::make('years_in_italy')
                ->options(YearsInItalyEnum::class)
                ->visible(fn (Get $get): bool => $get('nationality')=='EE'),
            'family_members' => Forms\Components\Select::make('family_members')
                ->options($family_members_options),
            'children_count' => Forms\Components\Select::make('children_count')
                ->options($children_count_options),    
                
            
            'phone' => Forms\Components\TextInput::make('phone')
                ->tel()
                ->required()
                ->maxLength(255),

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
                        $rules = [];
                        // Applica unique solo se il record è nuovo (id è null)
                        if ($get('id') === null) {
                            //$rules[] = Rule::unique(User::class, 'email');
                            $rules[] = Rule::unique(User::class,'email')->ignore($get('id'));
                        }
                        
                        return $rules;
                    }),
            
        ];
    }

    
    protected static function getDocumentsStepSchema(): array
    {
        return self::getAttachmentsSchema(false);
    }

   
=======
=======
    //protected static ?string $tenantOwnershipRelationshipName = 'tenants';
    //protected static ?string $tenantRelationshipName = 'studios';
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
=======
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)

    public array $data = [];

    public static function getFormSchemaWidget(): array
    {
        $submit_view='pub_theme::filament.wizard.submit-button';
        //dddx(strlen(session()->getId()));//40

        return [
            Forms\Components\Wizard::make([
                //self::getPersonalDataStep(),      // Step 1: Dati personali
                self::getStepByName('personal_data_step'),
                //self::getDocumentsStep(),         // Step 2: Documenti
                self::getStepByName('documents_step'),
                //self::getPreVisitStep(),          // Step 3: Informazioni preventive
                self::getStepByName('previsit_step'),
                //self::getPrivacyStep(),           // Step 4: Privacy e consensi
                self::getStepByName('privacy_step'),
            ])
            //->model(Patient::class)
            ->extraAttributes(['class' => 'mobile-friendly-wizard'])
            ->skippable(false)
            ->columnSpan('full')
            ->persistStepInQueryString()
            ->submitAction(static::getWizardSubmitAction())
        ];
    }

    

    protected static function getPersonalDataStepSchema(): array
    {
        $family_members_options=[
            '1' => 'Sola',
            '2' => '2',
            '3' => '3',
            '4+' => '4+',
        ];
        $children_count_options=[
            '0' => '0',
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ];
        return [
            Forms\Components\TextInput::make('first_name')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('last_name')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('address')
                ->maxLength(255),
            Forms\Components\TextInput::make('city')
                ->maxLength(255),
            Forms\Components\Select::make('nationality')
                ->options(NationalityEnum::class)
                ->reactive()
                //->live()
                ,
            CountryCodeSelect::make('country_code')
                ->label(static::trans('fields.country_code.label'))
                ->visible(function (Get $get): bool {
                    if($get('nationality')=='EE'){
                        return true;
                    }
                    return false;
                }),
            Forms\Components\Select::make('years_in_italy')
                ->options(YearsInItalyEnum::class)
                ->visible(fn (Get $get): bool => $get('nationality')=='EE'),
            Forms\Components\Select::make('family_members')
                ->options($family_members_options),
            Forms\Components\Select::make('children_count')
            ->options($children_count_options),    
                
            
            Forms\Components\TextInput::make('phone')
                ->tel()
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255)
                ->unique(Patient::class),
            
        ];
    }

    
    protected static function getDocumentsStepSchema(): array
    {
        return self::getAttachmentsSchema(false);
    }

<<<<<<< HEAD
    /**
     * Get the pre-visit information step for the wizard
     */
    protected static function getPreVisitStep(): Forms\Components\Wizard\Step
    {
        return Forms\Components\Wizard\Step::make('pre_visit_step')
            ->schema(self::getPreVisitStepSchema());
    }
>>>>>>> 54f4fa16 (.)
=======
   
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)

    protected static function getPreVisitStepSchema(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8d591468 (fields translations)
            //Forms\Components\DatePicker::make('last_dental_visit')
            //    ->maxDate(now()),
            Forms\Components\Select::make('last_dental_visit_period')
                ->options(LastDentalVisitPeriodEnum::class),
<<<<<<< HEAD
=======
            Forms\Components\DatePicker::make('last_dental_visit')
                ->maxDate(now()),
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 8d591468 (fields translations)
            Forms\Components\Textarea::make('dental_problems')
                ->maxLength(65535),
        ];
    }
<<<<<<< HEAD
<<<<<<< HEAD

    
<<<<<<< HEAD
=======
    
=======

>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
    /**
     * Get the privacy step for the wizard
     */
    protected static function getPrivacyStep(): Forms\Components\Wizard\Step
    {
        return Forms\Components\Wizard\Step::make('privacy_step')
            ->schema(self::getPrivacyStepSchema());
    }
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)

    /**
     * Get privacy step schema for the wizard
     *
     * @return array<string, \Filament\Forms\Components\Component>
     */
    protected static function getPrivacyStepSchema(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'privacy_policy' => Forms\Components\View::make('pub_theme::gdpr.patient-privacy-policy')
                ->columnSpanFull(),
            'privacy_acceptance' => Forms\Components\Checkbox::make('privacy_acceptance')
                ->required()
                ->rules(['accepted'])
                ->columnSpanFull(),
            //'newsletter' => Forms\Components\Checkbox::make('newsletter')
           //     ->columnSpanFull(),
        ];
    }

=======
            Forms\Components\View::make('saluteora::privacy-policy')
=======
            'privacy_policy' => Forms\Components\View::make('saluteora::privacy-policy')
>>>>>>> 13ea6524 (phpstan)
=======
            'privacy_policy' => Forms\Components\View::make('pub_theme::gdpr.privacy-policy')
>>>>>>> 8d591468 (fields translations)
                ->columnSpanFull(),
            'privacy_acceptance' => Forms\Components\Checkbox::make('privacy_acceptance')
                ->required()
                ->columnSpanFull(),
            //'newsletter' => Forms\Components\Checkbox::make('newsletter')
           //     ->columnSpanFull(),
        ];
    }
<<<<<<< HEAD
    
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
    /**
     * Get the thank you page HTML after registration
     *
     * @return \Illuminate\Support\HtmlString
     */
    public static function getThankYouPage(): HtmlString
    {
        return new HtmlString('<div class="p-8 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Ti ringraziamo per esserti iscritta al portale</h2>
            <p class="text-gray-600 mb-6">Esamineremo i dati e i documenti che ci hai inviato e, se il tuo profilo risponde ai requisiti, riceverai una mail di conferma e potrai accedere al servizio.</p>
            <div class="mt-8">
                <a href="/" class="inline-block bg-blue-900 text-white text-lg font-medium py-3 px-6 rounded-full hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50 shadow-sm hover:shadow-md transition-all duration-200">
                    TORNA ALLA HOME
                </a>
            </div>
        </div>');
    }

<<<<<<< HEAD
    

=======
>>>>>>> 54f4fa16 (.)
    /**
     * Get the form schema for standard forms
     *
     * @return array<string, \Filament\Forms\Components\Component>
     */
    public static function getFormSchema(): array
    {
<<<<<<< HEAD
        return self::getPersonalDataStepSchema();
        /*
        $schema= [
=======
        return [
>>>>>>> 54f4fa16 (.)
            'first_name' => Forms\Components\TextInput::make('first_name')
                ->required()
                ->maxLength(255),
            'last_name' => Forms\Components\TextInput::make('last_name')
                ->required()
                ->maxLength(255),
<<<<<<< HEAD
            
=======
            'fiscal_code' => Forms\Components\TextInput::make('fiscal_code')
                ->required()
                ->maxLength(16),
>>>>>>> 54f4fa16 (.)
            'email' => Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255),
            'phone' => Forms\Components\TextInput::make('phone')
                ->tel()
                ->required()
                ->maxLength(20),
<<<<<<< HEAD
            'nationality' => NationalFlagSelect::make('nationality'),
            ...self::getAttachmentsSchema(),
        ];

       
        
        return $schema;
        */
=======
        ];
>>>>>>> 54f4fa16 (.)
    }

    public static function getThankYouView(): string
    {
        return 'saluteora::thank-you';
    }

    // I metodi getRelations() e getPages() sono stati rimossi perché:
    // 1. getRelations() restituisce un array vuoto
    // 2. getPages() contiene solo route standard
    // Secondo le regole del progetto questi metodi sono ridondanti quando estendi XotBaseResource
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)

    /**
     * @return array<string, \Filament\Resources\Pages\PageRegistration>
     */
    public static function getPages(): array
    {
        return [
            ...parent::getPages(),
         //   'preview-attachment' => PreviewAttachment::route('/{record}/preview/{type}'),
        ];
    }
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
}
