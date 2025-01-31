<?php

namespace Hotrush\SpatieBackup\Notifications;

use NotificationChannels\Telegram\TelegramMessage;

trait ToTelegramTrait 
{
    //define these in the class using the trait
    /*
    protected $viewStatus = '';
    protected $messageTemplate = '';

    protected $defineMessageRequirements = [
        'disk_name',
        'exception',
        'description',
    ];
    */

    ///////
    ///////
    public function diskNameTelegram()
    {
        
        if (in_array('disk_name', $this->defineMessageRequirements))
        {
            return ($this->diskName() !== null) ? $this->diskName() : "";
        }
        else
        {
            return "";
        }
       
    }

    public function generalException()
    {
        
        if (in_array('exception', $this->defineMessageRequirements))
        {
            if(!is_null($this->event->exception))
            {
                return $this->event->exception;
            }
            else
            {
                return $this->failure()->exception();
            }

        }
        else
        {
            return "";
        }
    }

    public function generalExceptionMessage()
    {
        
        if (in_array('exception', $this->defineMessageRequirements))
        {
            $exceptionInstance = $this->generalException();
            return $exceptionInstance->getMessage();
        }
        else
        {
            return "";
        }
    }

    public function generalExceptionTrace()
    {
        
        if (in_array('exception', $this->defineMessageRequirements))
        {
            $exceptionInstance = $this->generalException();
            return $exceptionInstance->getTraceAsString();
        }
        else
        {
            return "";
        }
    }

    public function problemDescriptionTelegram()
    {
        if (in_array('description', $this->defineMessageRequirements))
        {
            return (!is_null($this->problemDescription())) ? $this->problemDescription() : "";
        }
        else
        {
            return "";
        }
    }
    ///////
    ///////
    
    public function toTelegram($notifiable): TelegramMessage
    {
        return (new TelegramMessage)
            ->view('laravel-backup-tg-notifications::'.$this->viewStatus.'', [
                'message' => trans('backup::notifications.'.$this->messageTemplate.'', [
                    'application_name' => $this->applicationName(),
                    'disk_name' => $this->diskNameTelegram(),
                ]),
                'exception' => $this->generalExceptionMessage(),
                'exceptionTrace' => $this->generalExceptionTrace(),
                'description' => $this->problemDescriptionTelegram(),
                'properties' => $this->backupDestinationProperties(),
            ])
            ->options([
                'parse_mode' => 'HTML',
                'disable_web_page_preview' => true
            ]);
    }

}
