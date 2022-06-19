<?php

namespace Hotrush\SpatieBackup\Notifications\Notifications;

use Spatie\Backup\Notifications\Notifications\BackupWasSuccessful as BaseNotification;
use Hotrush\SpatieBackup\Notifications\ToTelegramTrait;

class BackupWasSuccessful extends BaseNotification
{
   
    use ToTelegramTrait;

    // set these required values
    protected $viewStatus = 'successful';
    protected $messageTemplate = 'backup_successful_body';

    protected $defineMessageRequirements = [
        'disk_name',
    ];

}
