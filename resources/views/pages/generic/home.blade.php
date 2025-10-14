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
                                    <div class="S-CONTENT-main">
                                        <p class="T-CONTENT-text TYPO-WEIGHT-EXTRABOLD TYPO-OBLIQUE-NONE TYPO-D-SIZES-H1 TYPO-VARIABLE">Макарий Янчев</p>
                                        <p class="T-CONTENT-text TYPO-WEIGHT-MEDIUM TYPO-OBLIQUE-NONE TYPO-D-SIZES-H3 TYPO-VARIABLE">aka <span class="TYPO-WEIGHT-BOLD TYPO-OBLIQUE-NONE TYPO-VARIABLE">sh1ft</span></p>
                                    </div>
                                    <div class="S-CONTENT-bottom">
                                        <p class="T-CONTENT-text TYPO-WEIGHT-MEDIUM TYPO-OBLIQUE-NONE TYPO-D-SIZES-NORMAL TYPO-VARIABLE">Что-то интересное</p>
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
