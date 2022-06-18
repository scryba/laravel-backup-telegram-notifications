<?php

namespace Hotrush\SpatieBackup\Notifications;

use NotificationChannels\Telegram\TelegramMessage;

trait ToTelegramTrait 
{
    protected $viewStatus = '';
    protected $messageTemplate = '';

    public function toTelegram($notifiable): TelegramMessage
    {
        return (new TelegramMessage)
            ->view('laravel-backup-tg-notifications::'.$this->viewStatus.'', [
                'message' => trans('backup::notifications.'.$this->messageTemplate.'', [
                    'application_name' => $this->applicationName(),
                    'disk_name' => (is_null($this->diskName())) ? $this->diskName() : "",
                ]),
                'exception' => (isset($this->event->exception)) ? $this->event->exception : (is_null($this->failure()->exception())) ? $this->failure()->exception() : "",
                'description' => (is_null($this->problemDescription())) ? $this->problemDescription() : "",
                'properties' => $this->backupDestinationProperties(),
            ])
            ->options([
                'parse_mode' => 'HTML',
                'disable_web_page_preview' => true
            ]);
    }
}
