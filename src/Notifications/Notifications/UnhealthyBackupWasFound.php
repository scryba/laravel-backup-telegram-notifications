<?php

namespace Hotrush\SpatieBackup\Notifications\Notifications;

use Spatie\Backup\Notifications\Notifications\UnhealthyBackupWasFound as BaseNotification;
use Hotrush\SpatieBackup\Notifications\ToTelegramTrait;

class UnhealthyBackupWasFound extends BaseNotification
{
   
    use ToTelegramTrait;

    // set these required values
    protected $viewStatus = 'failed';
    protected $messageTemplate = 'unhealthy_backup_found_subject';

    protected $defineMessageRequirements = [
        'exception',
        'description',
    ];

}
