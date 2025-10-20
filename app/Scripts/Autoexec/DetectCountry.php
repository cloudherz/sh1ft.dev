<?php

use App\Services\IPLocationService;

function detectCountry(): array
{
    try {
        $ipLocationService = app(IPLocationService::class);
        $country = $ipLocationService->getCountryFromIP();

        return [
            'Country' => $country ?? 'Unknown',
        ];
    } catch (Exception) {
        return [
            'Country' => 'Unknown',
        ];
    }
}
