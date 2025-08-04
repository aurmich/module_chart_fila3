<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Parental\HasParent;
use Modules\Geo\Models\Address;
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\MediaLibrary\HasMedia;
use Modules\SaluteOra\Enums\UserTypeEnum;
use Modules\SaluteOra\Models\Appointment;
<<<<<<< HEAD
use Modules\SaluteOra\Enums\UserStateEnum;
use Modules\SaluteOra\Models\DoctorStudio;
use Spatie\MediaLibrary\InteractsWithMedia;
use Modules\SaluteOra\States\User\UserState;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

/**
 * Doctor model for the SaluteOra module.
 * 
 * Extends the User model to provide doctor-specific functionality.
 *
 * @property string $id
 * @property string|null $name
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string $email
 * @property string|null $phone
 * @property string|null $country_code
 * @property string|null $children_count
 * @property string|null $family_members
 * @property string|null $years_in_italy
 * @property string|null $nationality
 * @property Address|null $address
 * @property string|null $city
 * @property string|null $registration_number
 * @property string|null $fiscal_code
 * @property string|null $dental_problems
 * @property string|null $last_dental_visit
 * @property string|null $status
 * @property array<array-key, mixed>|null $certifications
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $password
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $lang
 * @property UserTypeEnum|null $type
 * @property string|null $data_privacy_form
 * @property string|null $doctor_certificate
 * @property array<array-key, mixed>|null $certification
 * @property string|null $pregnancy_certificate
 * @property string|null $isee_certificate
 * @property string|null $identity_document
 * @property string|null $health_card
 * @property string|null $date_of_birth
 * @property string|null $gender
 * @property bool|null $is_active
 * @property bool|null $is_otp
 * @property \Illuminate\Support\Carbon|null $password_expires_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_by
 * @property UserState|null $state
 * @property array<array-key, mixed>|null $moderation_data
 * @property string|null $uuid
 * @property string|null $full_name
 * @property string|null $certificates
 * @property string|null $last_dental_visit_period
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Gdpr\Models\Consent> $activeConsents
 * @property-read int|null $active_consents_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Activity\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Appointment> $appointments
 * @property-read int|null $appointments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Authentication> $authentications
 * @property-read int|null $authentications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Passport\Client> $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Gdpr\Models\Consent> $consents
 * @property-read int|null $consents_count
 * @property-read \Modules\User\Models\Team|null $currentTeam
 * @property-read \Modules\User\Models\Membership|DoctorStudio|\Modules\User\Models\DeviceUser|null $pivot
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Device> $devices
 * @property-read int|null $devices_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\User> $all_team_users
 * @property-read \Modules\User\Models\AuthenticationLog|null $latestAuthentication
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Modules\User\Models\Notification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Team> $ownedTeams
 * @property-read int|null $owned_teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Modules\SaluteOra\Models\Profile|null $profile
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\SocialiteUser> $socialiteUsers
 * @property-read int|null $socialite_users_count
 * @property-read \Modules\SaluteOra\Models\Studio|null $studio
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\SaluteOra\Models\Studio> $studios
 * @property-read int|null $studios_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Membership> $teamUsers
 * @property-read int|null $team_users_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Team> $teams
 * @property-read int|null $teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\SaluteOra\Models\Studio> $tenants
 * @property-read int|null $tenants_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Passport\Token> $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Gdpr\Models\Treatment> $treatments
 * @property-read int|null $treatments_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor admins()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor doctors()
 * @method static \Modules\SaluteOra\Database\Factories\DoctorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor orWhereNotState(string $column, $states)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor orWhereState(string $column, $states)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor patients()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereCertificates($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereCertification($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereCertifications($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereChildrenCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereDataPrivacyForm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereDentalProblems($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereDoctorCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereFamilyMembers($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereFiscalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereHealthCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereIdentityDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereIsOtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereIseeCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereLastDentalVisit($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereLastDentalVisitPeriod($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereModerationData($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereNationality($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereNotState(string $column, $states)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor wherePasswordExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor wherePregnancyCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereRegistrationNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereYearsInItaly($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor withoutRole($roles, $guard = null)
 * @mixin \Eloquent
 */
class Doctor extends User implements HasMedia
{
    use HasParent;
    use InteractsWithMedia;

   
    /** @var list<string>     */
    protected $fillable = [
        //'tenant_id',
=======
=======
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
>>>>>>> 2bcfd382 (fix Address)
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\SaluteOra\Models\DoctorStudio;
=======
use Parental\HasParent;
>>>>>>> de1d4084 (✨ (DoctorResource.php, PatientResource.php, StudioResource.php): introduce new Studio resource and update Doctor resource to include studio relationship)
=======
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
=======
use Spatie\MediaLibrary\HasMedia;
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
use Modules\SaluteOra\Enums\UserTypeEnum;
=======
>>>>>>> 2df8b507 (bozza widget doctor appointments)
use Modules\SaluteOra\Enums\UserStateEnum;
use Modules\SaluteOra\Models\DoctorStudio;
use Spatie\MediaLibrary\InteractsWithMedia;
use Modules\SaluteOra\States\User\UserState;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

/**
 * Doctor model for the SaluteOra module.
 * 
 * Extends the User model to provide doctor-specific functionality.
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property UserTypeEnum $type
 * @property UserState $state
 * @property string|null $continuation_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Studio> $studios
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Appointment> $appointments
 * @property-read DoctorRegistrationWorkflow|null $registrationWorkflow
 * @see \Modules\SaluteOra\Models\User
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $city
 * @property string|null $registration_number
 * @property string|null $status
 * @property array<array-key, mixed>|null $certifications
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $password
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property array<array-key, mixed>|null $moderation_data
 * @property string|null $lang
 * @property string|null $date_of_birth
 * @property string|null $gender
 * @property bool $is_active
 * @property bool $is_otp
 * @property \Illuminate\Support\Carbon|null $password_expires_at
 * @property string|null $uuid
 * @property string|null $full_name
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_by
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Gdpr\Models\Consent> $activeConsents
 * @property-read int|null $active_consents_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Activity\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Authentication> $authentications
 * @property-read int|null $authentications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Passport\Client> $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Gdpr\Models\Consent> $consents
 * @property-read int|null $consents_count
 * @property-read \Modules\User\Models\Team|null $currentTeam
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\User> $all_team_users
 * @property-read \Modules\User\Models\AuthenticationLog|null $latestAuthentication
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Modules\User\Models\Notification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Team> $ownedTeams
 * @property-read int|null $owned_teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Modules\SaluteOra\Models\Profile|null $profile
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\SocialiteUser> $socialiteUsers
 * @property-read int|null $socialite_users_count
 * @property-read \Modules\SaluteOra\Models\DoctorTeam|DoctorStudio|null $pivot
 * @property-read int|null $studios_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Team> $teams
 * @property-read int|null $teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\SaluteOra\Models\Studio> $tenants
 * @property-read int|null $tenants_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Passport\Token> $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Gdpr\Models\Treatment> $treatments
 * @property-read int|null $treatments_count
 * @property-read \Modules\SaluteOra\Models\DoctorRegistrationWorkflow|null $workflow
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor admins()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor doctors()
 * @method static \Modules\User\Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor orWhereNotState(string $column, $states)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor orWhereState(string $column, $states)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor patients()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereCertifications($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereIsOtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereModerationData($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereNotState(string $column, $states)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor wherePasswordExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereRegistrationNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor withoutRole($roles, $guard = null)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Device> $devices
 * @property-read int|null $devices_count
 * @property string|null $dental_problems
 * @property string|null $last_dental_visit
 * @property string|null $pregnancy_certificate
 * @property string|null $isee_certificate
 * @property string|null $identity_document
 * @property string|null $health_card
 * @property string|null $certificates
 * @property-read \Modules\SaluteOra\Models\Studio|null $studio
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Membership> $teamUsers
 * @property-read int|null $team_users_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereCertificates($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereDentalProblems($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereHealthCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereIdentityDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereIseeCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor whereLastDentalVisit($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Doctor wherePregnancyCertificate($value)
 * @mixin \Eloquent
 */
class Doctor extends User implements HasMedia
{
    use HasParent;
    use InteractsWithMedia;

   
    /** @var list<string>     */
    protected $fillable = [
<<<<<<< HEAD
        'tenant_id',
>>>>>>> 54f4fa16 (.)
=======
        //'tenant_id',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'city',
        'registration_number',
<<<<<<< HEAD
<<<<<<< HEAD
        //'specialization',
        'certifications', // Mantenuto per retrocompatibilità
        'certification', // 
<<<<<<< HEAD
        'doctor_certificate',
        //'availability',
        'status',
        'country_code',
        'data_privacy_form',
    ];

    /** @var list<string>     */
    protected $appends = [
        //'health_card',
        //'identity_document',
        
        //'pregnancy_certificate',
        // 'certifications', // Gestito da getter personalizzato
        //'studio',
        //'studio::description',
        //'studio:address',
    ];

    /** @return list<string>     */
    public static function getAttachments():array{
        return  [
            //'certification', // Gestito come allegato singolo
            'doctor_certificate',
            'data_privacy_form',
        ];
    }

    /** @var list<string>     */
    protected $with = [
        'studio',
        'studio.address',
    ];

   

    public function getDataDefaults(): array
    {
        return [
            //'certification'=> null,
            'studio'=>[
                'description' => null,
                'address'=>[
                    'administrative_area_level_1' => null,
                    'administrative_area_level_2' => null,
                    'administrative_area_level_3' => null,
                    'locality' => null,
                    'postal_code' => null,
                ],
            ],
        ];
    }

=======
        'specialization',
=======
        //'specialization',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
        'certifications',
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
        //'availability',
        'status',
        'country_code',
    ];

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
=======
    /** @var list<string>     */
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
    protected $appends = [
        //'health_card',
        //'identity_document',
        
        //'pregnancy_certificate',
        // 'certifications', // Gestito da getter personalizzato
        //'studio',
        //'studio::description',
        //'studio:address',
    ];

    /** @var list<string>     */
    public static function getAttachments():array{
        return  [
            'certification', // Gestito come allegato singolo
        ];
    }

    /** @var list<string>     */
    protected $with = [
        'studio',
        'studio.address',
    ];

   

    public function getDataDefaults(): array
    {
        return [
            //'certification'=> null,
            'studio'=>[
                'description' => null,
                'address'=>[
                    'administrative_area_level_1' => null,
                    'administrative_area_level_2' => null,
                    'administrative_area_level_3' => null,
                    'locality' => null,
                    'postal_code' => null,
                ],
            ],
        ];
    }

>>>>>>> 8e4d163b (phpstan)
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function casts(): array
    {
        return array_merge(parent::casts(), [
<<<<<<< HEAD
<<<<<<< HEAD
            //'certification' => 'array',  // OBBLIGATORIO: campo in $attachments DEVE essere array per FileUpload
            'certifications' => 'array', // Per retrocompatibilità
=======
            'certifications' => 'array',
          //  'availability' => 'array',
>>>>>>> f2c2831f (✨ (doctor.php, RegisterAction.php, DoctorResource.php, ListDoctors.php, Doctor.php, User.php, migrations, DownloadZipByPathsDiskAction.php): add support for certifications and file uploads for doctors, enhancing the registration and management process)
=======
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
=======
>>>>>>> 522e16e6 (✨ (Dashboard.php): refactor Dashboard class to extend XotBaseDashboard for better structure)
    protected function casts(): array
    {
        return array_merge(parent::casts(), [
            //'certification' => 'array',  // OBBLIGATORIO: campo in $attachments DEVE essere array per FileUpload
            'certifications' => 'array', // Per retrocompatibilità
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
        ]);
    }

    
    /**
     * Relazione molti-a-molti con gli studi in cui il dottore lavora.
     *
     * IMPORTANTE: Questa è una relazione cross-database, dove:
     * - Doctor risiede nel database 'user'
     * - Studio risiede nel database 'salute_ora'
     * - doctor_studio (pivot) risiede nel database 'saluteora_data'
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function studios(): BelongsToMany
    {
        return $this->belongsToManyX(Studio::class);
    }



    public function studio(): MorphOne
    {
        return $this->morphOne(Studio::class, 'model');
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)

    public function address(): MorphOne{
        return $this->morphOne(Address::class, 'model');
    }
<<<<<<< HEAD
=======
>>>>>>> de1d4084 (✨ (DoctorResource.php, PatientResource.php, StudioResource.php): introduce new Studio resource and update Doctor resource to include studio relationship)
=======
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
    // Implementazione della relazione BelongsToMany con Studio completata

/*
    public function getCertificationsAttribute()
    {
        // Prima controlla se c'è un valore nel database (campo array)
        if ($this->attributes['certifications'] ?? null) {
            return json_decode($this->attributes['certifications'], true);
        }
        
        // Altrimenti usa Media Library
        return $this->getFirstMediaPath('certifications');
    }
    
    public function setCertificationsAttribute($value)
    {
        // Se è un array di file paths (da FileUpload), salva come JSON
        if (is_array($value)) {
            $this->attributes['certifications'] = json_encode($value);
        } else {
            $this->attributes['certifications'] = $value;
        }
    }
        */

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }
<<<<<<< HEAD


=======
    public function casts(): array
=======
    protected function casts(): array
>>>>>>> 2099645a (.)
    {
        return array_merge(parent::casts(), [
            'certifications' => 'array',
            'availability' => 'array',
=======
            //'certifications' => 'array',
          //  'availability' => 'array',
>>>>>>> f3e4ec66 (.)
        ]);
    }

    /**
     * Get the workflow for this doctor's registration.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function workflow(): HasOne
    {
        return $this->hasOne(DoctorRegistrationWorkflow::class, 'doctor_id');
    }
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======

    /**
     * Relazione molti-a-molti con gli studi in cui il dottore lavora.
     *
     * IMPORTANTE: Questa è una relazione cross-database, dove:
     * - Doctor risiede nel database 'user'
     * - Studio risiede nel database 'salute_ora'
     * - doctor_studio (pivot) risiede nel database 'saluteora_data'
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function studios(): BelongsToMany
    {
        return $this->belongsToManyX(Studio::class);
    }
<<<<<<< HEAD
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
    // Implementazione della relazione BelongsToMany con Studio completata
<<<<<<< HEAD
>>>>>>> 2bcfd382 (fix Address)
=======

/*
    public function getCertificationsAttribute()
    {
        // Prima controlla se c'è un valore nel database (campo array)
        if ($this->attributes['certifications'] ?? null) {
            return json_decode($this->attributes['certifications'], true);
        }
        
        // Altrimenti usa Media Library
        return $this->getFirstMediaPath('certifications');
    }
    
    public function setCertificationsAttribute($value)
    {
        // Se è un array di file paths (da FileUpload), salva come JSON
        if (is_array($value)) {
            $this->attributes['certifications'] = json_encode($value);
        } else {
            $this->attributes['certifications'] = $value;
        }
    }
        */
>>>>>>> f3e4ec66 (.)
=======
>>>>>>> 2df8b507 (bozza widget doctor appointments)
}
