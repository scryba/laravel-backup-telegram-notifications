<?php

namespace Hotrush\SpatieBackup\Notifications\Notifications;

use Spatie\Backup\Notifications\Notifications\BackupHasFailed as BaseNotification;
use NotificationChannels\Telegram\TelegramMessage\ToTelegramTrait;

class BackupHasFailed extends BaseNotification
{
   
    use ToTelegramTrait;

}
