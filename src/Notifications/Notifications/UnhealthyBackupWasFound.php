<?php

namespace Hotrush\SpatieBackup\Notifications\Notifications;

use Spatie\Backup\Notifications\Notifications\UnhealthyBackupWasFound as BaseNotification;
use NotificationChannels\Telegram\TelegramMessage;

class UnhealthyBackupWasFound extends BaseNotification
{
    public function toTelegram($notifiable): TelegramMessage
    {
        return (new TelegramMessage)
            ->view('laravel-backup-tg-notifications::failed', [
                'message' => trans('backup::notifications.unhealthy_backup_found_subject', [
                    'application_name' => $this->applicationName(),
                ]),
                'exception' => $this->failure()->exception(),
                'description' => $this->problemDescription(),
                'properties' => $this->backupDestinationProperties(),
            ]);
    }
}
