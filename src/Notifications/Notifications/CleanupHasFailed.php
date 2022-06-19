<?php

namespace Hotrush\SpatieBackup\Notifications\Notifications;

use Spatie\Backup\Notifications\Notifications\CleanupHasFailed as BaseNotification;
use Hotrush\SpatieBackup\Notifications\ToTelegramTrait;

class CleanupHasFailed extends BaseNotification
{
   
    use ToTelegramTrait;

    // set these required values
    protected $viewStatus = 'failed';
    protected $messageTemplate = 'cleanup_failed_subject';

    protected $defineMessageRequirements = [
        'exception',
    ];

}