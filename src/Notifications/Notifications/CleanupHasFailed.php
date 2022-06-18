<?php

namespace Hotrush\SpatieBackup\Notifications\Notifications;

use Spatie\Backup\Notifications\Notifications\CleanupHasFailed as BaseNotification;
use NotificationChannels\Telegram\TelegramMessage\ToTelegramTrait;

class CleanupHasFailed extends BaseNotification
{
   
    use ToTelegramTrait;

}