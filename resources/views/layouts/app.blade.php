<!doctype html>
<x-comments.credits />
<html lang="en" translate="no" class="notranslate">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('meta-title', 'TITLE')</title>
    <meta name="description" content="@yield('meta-description', 'DESCRIPTION')">
    <meta name="keywords" content="{{ config('app.name') }}">
    <meta name="author" content="{{ config('app.persona') }}">

    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:url" content="@yield('meta-url', 'URL')" />
    <meta property="og:title" content="@yield('meta-title', 'TITLE')" />
    <meta property="og:description" content="@yield('meta-description', 'DESCRIPTION')" />
    <meta property="og:image" content="@yield('meta-image', 'IMAGE')" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" content="@yield('meta-url', 'URL')" />
    <meta name="twitter:title" content="@yield('meta-title', 'TITLE')">
    <meta name="twitter:description" content="@yield('meta-description', 'DESCRIPTION')">
    <meta name="twitter:image" content="@yield('meta-image', 'IMAGE')" />

    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="" type="image/x-icon">
    <link rel="apple-touch-icon" href="">

    @vite(['resources/css/.bundling/final.bundle.css'])
    @livewireStyles
</head>
<body>
    <div class="S-DESKTOP-wrapper">
        <div class="S-DESKTOP-carcass">
            <div class="S-DESKTOP-header">
                <div class="S-HEADER-wrapper DEV-DISABLE_SELECTION">
                    <div class="S-HEADER-carcass">
                        <div class="S-HEADER-logo">
                            logo
                        </div>
                        <div class="S-HEADER-content">
                            <div class="S-CONTENT-wrapper">
                                <div class="S-CONTENT-carcass" id="DESKTOP-HEADER_CONTENT-carcass">
                                    <div class="S-CONTENT-projects" id="DESKTOP-HEADER_OVERLAY_TRIGGER-projects">
                                        Projects
                                    </div>
                                    <div class="S-CONTENT-about" id="DESKTOP-HEADER_OVERLAY_TRIGGER-about">
                                        About
                                    </div>
                                    <div class="S-CONTENT-contacts" id="DESKTOP-HEADER_OVERLAY_TRIGGER-contacts">
                                        Contacts
                                    </div>
                                    <div class="S-CONTENT-other" id="DESKTOP-HEADER_OVERLAY_TRIGGER-other">
                                        Other
                                    </div>
                                    <div class="S-CONTENT-languages" id="DESKTOP-HEADER_OVERLAY_TRIGGER-languages">
                                        EN
                                    </div>
                                    <div class="S-CONTENT-overlays">
                                        <div class="S-OVERLAYS-wrapper">
                                            <div class="S-OVERLAYS-carcass">
                                                <div class="S-OVERLAY-projects S-OVERLAY-all DEV-DISABLE_VISIBILITY" id="DESKTOP-HEADER_OVERLAY-projects">
                                                    projects
                                                </div>
                                                <div class="S-OVERLAY-other S-OVERLAY-all DEV-DISABLE_VISIBILITY" id="DESKTOP-HEADER_OVERLAY-other">
                                                    other
                                                </div>
                                                <div class="S-OVERLAY-languages S-OVERLAY-all DEV-DISABLE_VISIBILITY" id="DESKTOP-HEADER_OVERLAY-languages">
                                                    langs
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="S-DESKTOP-surfer">
                @yield('mode-desktop')
            </div>
            <div class="S-DESKTOP-overlay DEV-DISABLE_VISIBILITY">

            </div>
        </div>
    </div>
    <div class="S-MOBILE-wrapper">
        <div class="S-MOBILE-carcass">
            @yield('mode-mobile')
        </div>
    </div>
    @livewireScripts
    <x-js.console.splash/>
    <x-js.livewire.delay/>
    <x-js.transitions.opacity/>
    <x-js.header.overlays/>
    @yield('scripts')
</body>
</html>
