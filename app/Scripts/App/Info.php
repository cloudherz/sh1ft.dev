<?php

function appInfo(): array
{
    return [
        'Name' => env('APP_NAME', 'sh1ft_dev'),
        'Version' => 'Alpha 1.0',
        'Developer' => env('APP_PERSONA', 'sh1ft'),
        'LaunchDate' => 'TBD',
        'LaunchYear' => '2025',
        'TransitionTime' => '0.5', // In seconds
    ];
}
