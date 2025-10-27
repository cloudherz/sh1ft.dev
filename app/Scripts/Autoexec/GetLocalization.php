<?php

use App\Models\Localization;

function getLocalization()
{
    return Localization::all()
        ->keyBy('key_id')
        ->toArray();
}
