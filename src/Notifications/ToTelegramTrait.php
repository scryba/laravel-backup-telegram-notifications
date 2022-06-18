<?php

namespace Hotrush\SpatieBackup\Notifications;

use NotificationChannels\Telegram\TelegramMessage;

trait ToTelegramTrait 
{
    public function toTelegram($notifiable): TelegramMessage
    {
        return (new TelegramMessage)
            ->view('laravel-backup-tg-notifications::failed', [
                'message' => trans('backup::notifications.backup_failed_subject', [
                    'application_name' => $this->applicationName(),
                ]),
                'exception' => $this->event->exception,
                'properties' => $this->backupDestinationProperties(),
            ])
            ->options([
                'parse_mode' => 'HTML',
                'disable_web_page_preview' => true
            ]);
    }
}
