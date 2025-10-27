@php
    // Получаем текущий путь без префикса языка
    $currentPath = request()->path();
    $currentPathClean = preg_replace('/^(en|ru|bg|jp)\//', '', $currentPath);

    // Если путь пустой, используем 'home'
    if (empty($currentPathClean)) {
        $currentPathClean = 'home';
    }
@endphp

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
                                    <svg class="I-LOGO-image" viewBox="0 0 40 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M35.3206 11.0329C35.8221 10.9473 35.7422 10.2053 35.2337 10.227C9.29577 11.3295 0.333981 18.7841 0.000476848 27.9872C-0.00399542 28.1068 0.0234771 28.2985 0.0624498 28.4116C0.967765 31.0588 6.82708 32.144 10.3538 29.3894C10.6081 29.1907 10.7659 28.8941 10.8042 28.5739C12.328 15.7208 26.3466 12.5662 35.3206 11.0329Z"/>
                                        <path d="M13.9565 12.1125C21.6801 10.0251 28.1464 9.40775 33.9124 9.05049C40.7709 8.62548 42.2691 5.13275 36.1568 0.0927319C35.9779 -0.0549023 35.7166 -0.0223078 35.5761 0.162395C30.7262 6.54582 20.9109 8.00235 13.6754 11.3526C13.2217 11.5628 13.4735 12.2428 13.9565 12.1125Z"/>
                                        <path d="M36.1604 12.3067C33.6578 25.2876 21.2575 29.2834 15.7304 25.3803C15.632 25.3107 15.4583 25.2902 15.3477 25.3381C14.2405 25.8162 13.7888 28.3362 14.0923 29.833C14.1108 29.925 14.1913 30.0413 14.2699 30.0925C18.6508 32.9084 35.4595 29.2949 36.9635 12.4211C37.0095 11.9066 36.2581 11.7999 36.1604 12.3073V12.3067Z"/>
                                        <path d="M23.4117 15.9976C21.2918 16.8144 18.4468 18.694 17.2859 20.4452C16.1372 22.1772 16.8432 23.7213 18.42 24.299C23.6417 26.2138 32.6648 22.1261 34.4869 12.9798C34.5431 12.696 34.2952 12.4448 34.0116 12.4998C32.1524 12.859 29.7514 13.4572 28.2692 13.9985C27.9817 14.104 27.905 14.4804 28.1363 14.6817C33.0769 18.9887 23.1095 22.7172 23.9585 16.431C24.0001 16.1255 23.6998 15.8858 23.4129 15.9964L23.4117 15.9976Z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="S-HEADER-content">
                            <div class="S-CONTENT-wrapper">
                                <div class="S-CONTENT-carcass" id="DESKTOP-HEADER_CONTENT-carcass">
                                    <div class="S-CONTENT-projects S-CONTENT-text" id="DESKTOP-HEADER_OVERLAY_TRIGGER-projects">
                                        <p class="T-CONTENT-text TYPO-WEIGHT-SEMIBOLD TYPO-OBLIQUE-NONE TYPO-D-SIZES-NORMAL TYPO-VARIABLE">портфолио</p>
                                        <svg class="I-CONTENT-dropdown_arrow" id="DESKTOP-HEADER_DROPDOWN_ARROW-projects" viewBox="0 0 20 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 11L0 5.24026V0L10 5.75262L20 0V5.24026L10 11Z"/>
                                        </svg>
                                    </div>
                                    <div class="S-CONTENT-about S-CONTENT-text" id="DESKTOP-HEADER_OVERLAY_BLANK_TRIGGER-about">
                                        <p class="T-CONTENT-text TYPO-WEIGHT-SEMIBOLD TYPO-OBLIQUE-NONE TYPO-D-SIZES-NORMAL TYPO-VARIABLE">обо мне</p>
                                    </div>
                                    <div class="S-CONTENT-contacts S-CONTENT-text" id="DESKTOP-HEADER_OVERLAY_BLANK_TRIGGER-contacts">
                                        <p class="T-CONTENT-text TYPO-WEIGHT-SEMIBOLD TYPO-OBLIQUE-NONE TYPO-D-SIZES-NORMAL TYPO-VARIABLE">контакты</p>
                                    </div>
                                    <div class="S-CONTENT-other S-CONTENT-text" id="DESKTOP-HEADER_OVERLAY_TRIGGER-other">
                                        <p class="T-CONTENT-text TYPO-WEIGHT-SEMIBOLD TYPO-OBLIQUE-NONE TYPO-D-SIZES-NORMAL TYPO-VARIABLE">прочее</p>
                                        <svg class="I-CONTENT-dropdown_arrow" id="DESKTOP-HEADER_DROPDOWN_ARROW-other" viewBox="0 0 20 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 11L0 5.24026V0L10 5.75262L20 0V5.24026L10 11Z"/>
                                        </svg>
                                    </div>
                                    <div class="S-CONTENT-languages" id="DESKTOP-HEADER_OVERLAY_TRIGGER-languages">
                                        <svg class="I-CONTENT-languages_part1 I-CONTENT-languages_all" id="DESKTOP-HEADER_DROPDOWN_LANGUAGES_ICON-part1" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M25.0956 5.90188V2.90188H14.3V0H11.2956V2.90125H0.5V5.90125H18.055C16.7319 8.81375 14.9512 11.4656 12.7981 13.7413C11.2456 12.1 9.88625 10.2644 8.75312 8.27563H5.3475C6.74062 11.0487 8.51875 13.5887 10.6181 15.8075C10.5131 15.8969 10.4075 15.9856 10.3006 16.0731L3.27 21.855L5.18 24.1706L12.2106 18.3888C12.4081 18.2262 12.6031 18.0606 12.7962 17.8931C12.99 18.0606 13.1856 18.2262 13.3831 18.3888L16.6637 21.0869L17.7444 18.0894L15.2925 16.0731C15.1856 15.9856 15.0812 15.8956 14.9756 15.8062C17.6612 12.9688 19.8206 9.605 21.3206 5.90125H25.0937L25.0956 5.90188Z"/>
                                        </svg>
                                        <svg class="I-CONTENT-languages_part2 I-CONTENT-languages_all" id="DESKTOP-HEADER_DROPDOWN_LANGUAGES_ICON-part2" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.6612 17.5286H5.4325L4.24438 21.0005H0.59375L7.89562 0.746094H11.2275L18.5 21.0005H14.8494L13.6612 17.5286ZM12.56 14.3461L9.57562 5.75234H9.5175L6.53312 14.3461H12.56Z"/>
                                        </svg>
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



                                                    <div class="S-LANGUAGES-wrapper">
                                                        <div class="S-LANGUAGES-carcass">
                                                            <a class="DEV-NO_PREFETCH" href="/change_language/en/{{ $currentPathClean }}">
                                                                <span>English</span>
                                                            </a>
                                                            <a class="DEV-NO_PREFETCH" href="/change_language/ru/{{ $currentPathClean }}">
                                                                <span>Русский</span>
                                                            </a>
                                                            <a class="DEV-NO_PREFETCH" href="/change_language/bg/{{ $currentPathClean }}">
                                                                <span>Български</span>
                                                            </a>
                                                            <a class="DEV-NO_PREFETCH" href="/change_language/jp/{{ $currentPathClean }}">
                                                                <span>日本</span>
                                                            </a>
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
    @vite(['resources/js/app.js'])
    @yield('scripts')
</body>
</html>
