@extends('layouts.app')

@section('meta-title', 'sh1ft')
@section('meta-description', '')
@section('meta-image', '')
@section('meta-url', '')

@section('mode-desktop')
    <div class="S-HOME-wrapper">
        <div class="S-HOME-carcass">
            <div class="S-HOME-front">
                <div class="S-FRONT-wrapper">
                    <div class="S-FRONT-carcass">
                        <div class="S-FRONT-background">
{{--                            <img class="I-FRONT-background_image" alt="sh1ft_logo" src="images/sh1ft/home_background.svg" draggable="false">--}}
                            <video class="I-FRONT-background_image" autoplay muted playsinline loop>
                                <source src="images/sh1ft/main_logo.webm" type="video/webm">
                            </video>
                        </div>
                        <div class="S-FRONT-content">
                            <div class="S-CONTENT-wrapper">
                                <div class="S-CONTENT-carcass">
                                    <div class="S-CONTENT-name">
                                        <p class="T-NAME-text TYPO-WEIGHT-EXTRABOLD TYPO-OBLIQUE-NONE TYPO-D-SIZES-H1 TYPO-VARIABLE">
                                            Макарий Янчев
                                        </p>
                                        <p class="T-NAME-text TYPO-WEIGHT-MEDIUM TYPO-OBLIQUE-NONE TYPO-D-SIZES-H3 TYPO-VARIABLE">
                                            aka
                                            <span class="TYPO-WEIGHT-BOLD TYPO-OBLIQUE-NONE TYPO-VARIABLE">
                                                sh1ft
                                            </span>
                                        </p>
                                    </div>
                                    <div class="S-CONTENT-buttons">
                                        <x-blades.buttons.medium
                                            href="/web"
                                            title="веб-разработка"
                                        />
                                        <x-blades.buttons.medium
                                            href="/gr"
                                            title="графический дизайн"
                                        />
                                        <x-blades.buttons.medium
                                            href="/3d"
                                            title="<span class='TYPO-DETAILS-ONUM'>3</span>d-дизайн"
                                        />
                                        <x-blades.buttons.medium
                                            href="/me"
                                            title="обо мне"
                                        />
                                    </div>
                                    <div class="S-CONTENT-shortcuts">
                                        <a class="L-SHORTCUT-link TYPO-WEIGHT-MEDIUM TYPO-OBLIQUE-NONE TYPO-D-SIZES-NORMAL TYPO-VARIABLE" href="/fwaeh">Резюме</a>
                                        <a class="L-SHORTCUT-icon" href="/SIYAAA">
                                            <svg class="I-SHORTCUT-all I-SHORTCUT-icon_telegram" viewBox="0 0 33 28" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.26805 12.1237C11.1266 8.31284 17.0332 5.80157 19.9888 4.58754C28.4284 1.12239 30.1816 0.520062 31.3246 0.500141C31.5763 0.496625 32.1377 0.557561 32.5022 0.84935C32.8096 1.09544 32.8939 1.42824 32.9342 1.66144C32.9746 1.89581 33.0256 2.42666 32.9853 2.84266C32.5283 7.5863 30.5495 19.0973 29.543 24.4105C29.1168 26.6593 28.2776 27.4128 27.4657 27.4866C25.7018 27.6471 24.3617 26.3347 22.6524 25.2284C19.9781 23.4988 18.4671 22.4207 15.8711 20.7321C12.8703 18.7798 14.8158 17.7075 16.5251 15.9545C16.9726 15.4951 24.7475 8.51323 24.8982 7.88043C24.9172 7.80074 24.935 7.50544 24.757 7.34958C24.5789 7.19373 24.3166 7.24763 24.1279 7.28982C23.8596 7.34958 19.5876 10.1374 11.3106 15.6533C10.0975 16.4759 8.99835 16.8755 8.01432 16.8556C6.9294 16.8322 4.84266 16.2498 3.29125 15.7517C1.38848 15.1412 -0.123755 14.8178 0.00800226 13.7807C0.0756613 13.2405 0.829407 12.6885 2.26805 12.1237Z"/>
                                            </svg>
                                        </a>
                                        <a class="L-SHORTCUT-icon" href="/BALENCIAGA">
                                            <svg class="I-SHORTCUT-all I-SHORTCUT-icon_email" viewBox="0 0 33 22" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.475 0C2.15079 0 1.84303 0.06985 1.55977 0.185096L15.559 12.732C16.1641 13.2742 16.8087 13.2746 17.4152 12.732L31.4402 0.185096C31.157 0.06985 30.8492 0 30.525 0H2.475ZM0.0257812 2.18146C0.0101764 2.29713 0 2.41827 0 2.53846V19.4615C0 20.8678 1.10387 22 2.475 22H30.525C31.8961 22 33 20.8678 33 19.4615V2.53846C33 2.41827 32.9898 2.29713 32.9742 2.18146L19.0395 14.649C17.5856 15.9496 15.3885 15.9517 13.9348 14.649L0.0257812 2.18146Z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="S-HOME-showcase">
                <div class="S-SHOWCASE-wrapper">
                    <div class="S-SHOWCASE-carcass">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('mode-landscape')
    <p>Landscape</p>
    <p>App Name: {{ $APP_Name }}</p>
@endsection

@section('mode-mobile')
    <p>Mobile</p>
    <p>App Name: {{ $APP_Name }}</p>
@endsection
