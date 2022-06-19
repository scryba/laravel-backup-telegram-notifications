<?php

namespace Hotrush\SpatieBackup\Notifications\Notifications;

use Spatie\Backup\Notifications\Notifications\CleanupWasSuccessful as BaseNotification;
use Hotrush\SpatieBackup\Notifications\ToTelegramTrait;

class CleanupWasSuccessful extends BaseNotification
{
   
    use ToTelegramTrait;

    // set these required values
    protected $viewStatus = 'successful';
    protected $messageTemplate = 'cleanup_successful_body';

    protected $defineMessageRequirements = [
        'disk_name',
    ];

}
