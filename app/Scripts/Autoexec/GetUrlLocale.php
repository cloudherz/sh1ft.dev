<?php

function GetUrlLocale()
{
    if (request()->is('en/*')) {
        return 'en';
    }
    if (request()->is('ru/*')) {
        return 'ru';
    }
    if (request()->is('bg/*')) {
        return 'bg';
    }
    if (request()->is('jp/*')) {
        return 'jp';
    }

    return 'none';
}
