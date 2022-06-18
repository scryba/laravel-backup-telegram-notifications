<?php

namespace Hotrush\SpatieBackup\Notifications\Notifications;

use Spatie\Backup\Notifications\Notifications\BackupWasSuccessful as BaseNotification;
use NotificationChannels\Telegram\TelegramMessage\ToTelegramTrait;

class BackupWasSuccessful extends BaseNotification
{
   
    use ToTelegramTrait;

}
