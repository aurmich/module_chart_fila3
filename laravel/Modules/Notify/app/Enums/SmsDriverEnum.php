<?php

declare(strict_types=1);

namespace Modules\Notify\Enums;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;

<<<<<<< HEAD
=======
=======
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
/**
 * Enum per i driver SMS supportati
 * 
 * Questo enum centralizza la gestione dei driver SMS disponibili
 * e fornisce metodi helper per ottenere le opzioni e le etichette.
 */
<<<<<<< HEAD
enum SmsDriverEnum: string implements HasLabel, HasIcon, HasColor
{
    use TransTrait;
=======
<<<<<<< HEAD
enum SmsDriverEnum: string implements HasLabel, HasIcon, HasColor
{
    use TransTrait;
=======
enum SmsDriverEnum: string
{
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
    case SMSFACTOR = 'smsfactor';
    case TWILIO = 'twilio';
    case NEXMO = 'nexmo';
    case PLIVO = 'plivo';
    case GAMMU = 'gammu';
    case NETFUN = 'netfun';
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    case AGILETELECOM = 'agiletelecom'; 
    
    public function getLabel(): string
    {
        return $this->transClass(self::class,$this->value.'.label');
    }

    public function getColor(): string
    {
        return $this->transClass(self::class,$this->value.'.color');

    }

    public function getIcon(): string
    {
        return $this->transClass(self::class,$this->value.'.icon');
    }

    public function getDescription(): string
    {
        return $this->transClass(self::class,$this->value.'.description');
<<<<<<< HEAD
=======
=======
    
    /**
     * Restituisce le opzioni per il componente Select di Filament
     * 
     * @return array<string, string>
     */
    public static function options(): array
    {
        return [
            self::SMSFACTOR->value => 'SMSFactor',
            self::TWILIO->value => 'Twilio',
            self::NEXMO->value => 'Nexmo',
            self::PLIVO->value => 'Plivo',
            self::GAMMU->value => 'Gammu',
            self::NETFUN->value => 'Netfun',
        ];
    }
    
    /**
     * Restituisce le etichette localizzate per il componente Select di Filament
     * 
     * @return array<string, string>
     */
    public static function labels(): array
    {
        return [
            self::SMSFACTOR->value => __('notify::sms.drivers.smsfactor'),
            self::TWILIO->value => __('notify::sms.drivers.twilio'),
            self::NEXMO->value => __('notify::sms.drivers.nexmo'),
            self::PLIVO->value => __('notify::sms.drivers.plivo'),
            self::GAMMU->value => __('notify::sms.drivers.gammu'),
            self::NETFUN->value => __('notify::sms.drivers.netfun'),
        ];
    }
    
    /**
     * Verifica se un driver è supportato
     * 
     * @param string $driver
     * @return bool
     */
    public static function isSupported(string $driver): bool
    {
        return in_array($driver, array_column(self::cases(), 'value'));
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
    }
    
    /**
     * Restituisce il driver predefinito dal file di configurazione
     * 
     * @return self
     */
    public static function getDefault(): self
    {
        $default = config('sms.default', self::SMSFACTOR->value);
        
<<<<<<< HEAD
        return self::from(is_string($default) ? $default : self::SMSFACTOR->value);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return self::from(is_string($default) ? $default : self::SMSFACTOR->value);
=======
        return self::from($default);
>>>>>>> 54f4fa16 (.)
=======
        return self::from((string) $default);
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
    }
}
