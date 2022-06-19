<strong>{{ $message }}</strong>

<strong>{{ trans('backup::notifications.exception_message_title') }}:</strong>
{{ $exception }}

<strong>{{ trans('backup::notifications.exception_message_trace') }}:</strong>
{{ $exceptionTrace }}

@if(isset($description))
    <i>{{ $description }}</i>
@endif

@include('laravel-backup-tg-notifications::properties', ['properties' => $properties])