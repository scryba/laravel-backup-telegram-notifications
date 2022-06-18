<?php

namespace Hotrush\SpatieBackup\Notifications\Notifications;

use Spatie\Backup\Notifications\Notifications\UnhealthyBackupWasFoundNotification as BaseNotification;
use Hotrush\SpatieBackup\Notifications\ToTelegramTrait;

class UnhealthyBackupWasFoundNotification extends BaseNotification
{
   
    use ToTelegramTrait;

    // set these required values
    protected $viewStatus = 'failed';
    protected $messageTemplate = 'unhealthy_backup_found_subject';

}