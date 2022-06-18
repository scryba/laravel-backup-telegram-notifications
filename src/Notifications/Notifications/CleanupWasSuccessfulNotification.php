<?php

namespace Hotrush\SpatieBackup\Notifications\Notifications;

use Spatie\Backup\Notifications\Notifications\CleanupWasSuccessfulNotification as BaseNotification;
use Hotrush\SpatieBackup\Notifications\ToTelegramTrait;

class CleanupWasSuccessfulNotification extends BaseNotification
{
   
    use ToTelegramTrait;

    // set these required values
    protected $viewStatus = 'successful';
    protected $messageTemplate = 'cleanup_successful_body';

}