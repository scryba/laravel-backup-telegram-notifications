<?php

namespace Hotrush\SpatieBackup\Notifications\Notifications;

use Spatie\Backup\Notifications\Notifications\BackupHasFailed as BaseNotification;
use Hotrush\SpatieBackup\Notifications\ToTelegramTrait;

class BackupHasFailed extends BaseNotification
{
   
    use ToTelegramTrait;

    // set these required values
    protected $viewStatus = 'failed';
    protected $messageTemplate = 'backup_failed_subject';

    protected $defineMessageRequirements = [
        'exception',
    ];
    
}
