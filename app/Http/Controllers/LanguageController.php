<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;


class LanguageController extends Controller
{
    public function changeLanguage($language, $path): RedirectResponse
    {
        $allowedLanguages = ['en', 'ru', 'bg', 'jp'];

        if (!in_array($language, $allowedLanguages)) {
            $language = 'en';
        }

        $cleanPath = ltrim($path, '/');

        if (str_contains($cleanPath, 'change_language')) {
            $cleanPath = 'home';
        }

        $redirectPath = "/{$language}/{$cleanPath}";

        return redirect($redirectPath)->cookie(
            'language',
            $language,
            5256000,
            '/',
            null,
            false,
            false
        );

    }
}
