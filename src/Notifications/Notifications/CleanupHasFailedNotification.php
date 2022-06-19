<?php

namespace Hotrush\SpatieBackup\Notifications\Notifications;

use Spatie\Backup\Notifications\Notifications\CleanupHasFailedNotification as BaseNotification;
use Hotrush\SpatieBackup\Notifications\ToTelegramTrait;

class CleanupHasFailedNotification extends BaseNotification
{
   
    use ToTelegramTrait;

    // set these required values
    protected $viewStatus = 'failed';
    protected $messageTemplate = 'cleanup_failed_subject';

    protected $defineMessageRequirements = [
        'exception',
    ];

}