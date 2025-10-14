<!doctype html>
<x-comments.todo />
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
            <header class="S-DESKTOP-header" id="DESKTOP-header">
                <div class="S-HEADER-wrapper DEV-DISABLE_SELECTION" id="DESKTOP-header-wrapper">
                    <div class="S-HEADER-carcass">
                        <div class="S-HEADER-logo">
                            <div class="S-LOGO-wrapper">
                                <div class="S-LOGO-carcass">
                                    <img class="I-LOGO-image" title="sh1ft logo" alt="sh1ft_logo" src="images/sh1ft/main_logo_gray.svg" draggable="false">
                                </div>
                            </div>
                        </div>
                        <div class="S-HEADER-content">
                            <div class="S-CONTENT-wrapper">
                                <div class="S-CONTENT-carcass" id="DESKTOP-HEADER_CONTENT-carcass">
                                    <div class="S-CONTENT-projects S-CONTENT-text" id="DESKTOP-HEADER_OVERLAY_TRIGGER-projects">
                                        <p class="T-CONTENT-text TYPO-WEIGHT-SEMIBOLD TYPO-OBLIQUE-NONE TYPO-D-SIZES-NORMAL TYPO-VARIABLE">портфолио</p>
                                        <img class="I-CONTENT-dropdown_arrow" id="DESKTOP-HEADER_DROPDOWN_ARROW-projects" alt="dropdown_arrow" src="images/icons/chevron_arrow_gray.svg" draggable="false">
                                    </div>
                                    <div class="S-CONTENT-about S-CONTENT-text" id="DESKTOP-HEADER_OVERLAY_BLANK_TRIGGER-about">
                                        <p class="T-CONTENT-text TYPO-WEIGHT-SEMIBOLD TYPO-OBLIQUE-NONE TYPO-D-SIZES-NORMAL TYPO-VARIABLE">обо мне</p>
                                    </div>
                                    <div class="S-CONTENT-contacts S-CONTENT-text" id="DESKTOP-HEADER_OVERLAY_BLANK_TRIGGER-contacts">
                                        <p class="T-CONTENT-text TYPO-WEIGHT-SEMIBOLD TYPO-OBLIQUE-NONE TYPO-D-SIZES-NORMAL TYPO-VARIABLE">контакты</p>
                                    </div>
                                    <div class="S-CONTENT-other S-CONTENT-text" id="DESKTOP-HEADER_OVERLAY_TRIGGER-other">
                                        <p class="T-CONTENT-text TYPO-WEIGHT-SEMIBOLD TYPO-OBLIQUE-NONE TYPO-D-SIZES-NORMAL TYPO-VARIABLE">прочее</p>
                                        <img class="I-CONTENT-dropdown_arrow" id="DESKTOP-HEADER_DROPDOWN_ARROW-other" alt="dropdown_arrow" src="images/icons/chevron_arrow_gray.svg" draggable="false">
                                    </div>
                                    <div class="S-CONTENT-languages" id="DESKTOP-HEADER_OVERLAY_TRIGGER-languages">
                                        {{-- <img class="I-CONTENT-languages_combined I-CONTENT-languages_all DEV-DISABLE_VISIBILITY" alt="language_select" src="images/icons/language_gray.svg" draggable="false"> --}}
                                        <img class="I-CONTENT-languages_part1 I-CONTENT-languages_all" id="DESKTOP-HEADER_DROPDOWN_LANGUAGES_ICON-part1" alt="language_select" src="images/icons/language_gray_part1.svg" draggable="false">
                                        <img class="I-CONTENT-languages_part2 I-CONTENT-languages_all" id="DESKTOP-HEADER_DROPDOWN_LANGUAGES_ICON-part2" alt="language_select" src="images/icons/language_gray_part2.svg" draggable="false">
                                    </div>
                                    <div class="S-CONTENT-overlays" id="DESKTOP-HEADER_OVERLAYS-parent">
                                        <div class="S-OVERLAYS-wrapper">
                                            <div class="S-OVERLAYS-carcass">
                                                <div class="S-OVERLAY-projects S-OVERLAY-all S-OVERLAY-big DEV-DISABLE_VISIBILITY" id="DESKTOP-HEADER_OVERLAY-projects">
                                                    projects
                                                </div>
                                                <div class="S-OVERLAY-other S-OVERLAY-all S-OVERLAY-big DEV-DISABLE_VISIBILITY" id="DESKTOP-HEADER_OVERLAY-other">
                                                    other
                                                </div>
                                                <div class="S-OVERLAY-languages S-OVERLAY-all DEV-DISABLE_VISIBILITY" id="DESKTOP-HEADER_OVERLAY-languages">
                                                    ln
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <main class="S-DESKTOP-surfer">
                <div class="S-SURFER-wrapper">
                    <div class="S-SURFER-carcass">
                        <div class="S-SURFER-{{ str_replace('.', '_', request()->route()->getName()) }}">
                            @yield('mode-desktop')
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="S-LANDSCAPE-wrapper">
        <div class="S-LANDSCAPE-carcass">
            @yield('mode-landscape')
        </div>
    </div>
    <div class="S-MOBILE-wrapper">
        <div class="S-MOBILE-carcass">
            @yield('mode-mobile')
        </div>
    </div>
    @livewireScripts
    <x-js.livewire.delay/>
    <x-js.transitions.opacity/>
    @vite(['resources/js/app.js'])
    @yield('scripts')
</body>
</html>
