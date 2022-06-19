<?php

namespace Hotrush\SpatieBackup\Notifications\Notifications;

use Spatie\Backup\Notifications\Notifications\HealthyBackupWasFoundNotification as BaseNotification;
use Hotrush\SpatieBackup\Notifications\ToTelegramTrait;

class HealthyBackupWasFoundNotification extends BaseNotification
{
   
    use ToTelegramTrait;

    // set these required values
    protected $viewStatus = 'successful';
    protected $messageTemplate = 'healthy_backup_found_subject';

    protected $defineMessageRequirements = [
        'disk_name',
    ];

}