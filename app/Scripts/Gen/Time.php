<?php

function genTime(): array
{
    $moment = now()->timestamp;

    $year_ago = now()->subYear()->timestamp;
    $year_ago_in_minutes = now()->diffInMinutes(now()->subYear());

    $year_ahead = now()->addYear()->timestamp;
    $year_ahead_in_minutes = now()->diffInMinutes(now()->addYear());

    return [
        'Moment' => $moment,
        'YearAgo' => $year_ago,
        'YearAgo_Minutes' => $year_ago_in_minutes,
        'YearAhead' => $year_ahead,
        'YearAhead_Minutes' => $year_ahead_in_minutes,
    ];
}
