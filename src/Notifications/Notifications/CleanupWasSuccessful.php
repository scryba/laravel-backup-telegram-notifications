<?php

namespace Hotrush\SpatieBackup\Notifications\Notifications;

use Spatie\Backup\Notifications\Notifications\CleanupWasSuccessful as BaseNotification;
use NotificationChannels\Telegram\TelegramMessage\ToTelegramTrait;

class CleanupWasSuccessful extends BaseNotification
{
   
    use ToTelegramTrait;

}
