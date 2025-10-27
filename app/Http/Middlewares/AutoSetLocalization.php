<?php

namespace App\Http\Middlewares;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\IPLocationService;

class AutoSetLocalization
{
    public function handle(Request $request, Closure $next): Response
    {
        try {
            $language = $request->cookie('language');

            if (!$language) {
                $ipLocationService = app(IPLocationService::class);
                $country = $ipLocationService->getCountryFromIP();

                $language = $this->getLanguageFromCountry($country) ?? 'en';

                $response = $next($request);
                return $response->cookie(
                    'language',
                    $language,
                    5256000,
                    '/',
                    null,
                    false,
                    false
                );
            }

            return $next($request);
        } catch (Exception) {
            return $next($request);
        }
    }

    private function getLanguageFromCountry(string $country): ?string
    {
        $countryToLanguage = [
            'RU' => 'ru',
            'BG' => 'bg',
            'JP' => 'jp'
        ];

        return $countryToLanguage[strtoupper($country)] ?? null;
    }
}
