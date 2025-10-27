<?php

namespace App\Http\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\IPLocationService;

class AutoLocalizationRedirect
{
    public function handle(Request $request, Closure $next): Response
    {
        $currentURL = $request->path();
        $languageCookie = $request->cookie('language');
        $cleanURL = substr($currentURL, 2);
        $languageURL= substr($currentURL, 0, 2);

        $ipLocationService = app(IPLocationService::class);
        $country = $ipLocationService->getCountryFromIP();
        $languageCountry = $this->getLocaleFromCountry($country);

        $rootRedirect = $this->handleRedirects($currentURL, $languageCookie, $languageCountry);
        if ($rootRedirect) {
            return $rootRedirect;
        }

        if (str_contains($currentURL, 'change_language')) {
            return $next($request);
        }

        if (in_array($languageCookie, ['en', 'ru', 'bg', 'jp'])) {
            if ($languageCookie !== $languageURL) {
                return redirect()->to("{$languageCookie}{$cleanURL}");
            } else {
                return $next($request);
            }
        }

        if ($languageCountry !== $languageURL) {
            return redirect()->to("{$languageCountry}{$cleanURL}");
        } else {
            return $next($request);
        }
    }

    private function handleRedirects(string $currentURL, ?string $languageCookie, string $languageCountry): ?Response
    {
        $targetLanguage = $languageCookie ?: $languageCountry;

        if (in_array($currentURL, ['', '/'])) {
            return redirect()->to("/{$targetLanguage}/home");
        }

        if ($currentURL === '3d') {
            return redirect()->to("/{$targetLanguage}/3d");
        }

        return null;
    }

    private function getLocaleFromCountry(string $country): string
    {
        $countryToLocale = [
            'RU' => 'ru',
            'BG' => 'bg',
            'JP' => 'jp'
        ];

        return $countryToLocale[strtoupper($country)] ?? 'en';
    }
}
