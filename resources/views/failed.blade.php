<strong>{{ $message }}</strong>

<strong>{{ trans('backup::notifications.exception_message_title') }}:</strong>
{{ $exception }}

@if(isset($exceptionTrace))
    <i>{{ $exceptionTrace }}</i>
@endif

@if(isset($description))
    <i>{{ $description }}</i>
@endif

@include('laravel-backup-tg-notifications::properties', ['properties' => $properties])