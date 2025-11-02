@extends('layouts.app')

@section('meta-title', 'sh1ft')
@section('meta-description', '')
@section('meta-image', '')
@section('meta-url', '')

@section('mode-desktop')
    <div class="S-HOME-wrapper">
        <div class="S-HOME-carcass">
            <div class="S-HOME-front DEV-DISABLE_SELECTION">
                <div class="S-FRONT-wrapper">
                    <div class="S-FRONT-carcass">
                        <div class="S-FRONT-background">
                            <video class="I-FRONT-background_image" autoplay muted playsinline loop>
                                <source src="{{ asset('images/sh1ft/main_logo.webm') }}" type="video/webm">
                            </video>
                        </div>
                        <div class="S-FRONT-content">
                            <div class="S-CONTENT-wrapper">
                                <div class="S-CONTENT-carcass">
                                    <div class="S-CONTENT-name">
                                        <p class="T-NAME-text TYPO-WEIGHT-EXTRABOLD TYPO-OBLIQUE-NONE TYPO-D-SIZES-H1 TYPO-VARIABLE">
                                            {{ $lkey["home_front_h1"][$locale] }}
                                        </p>
                                        <p class="T-NAME-text TYPO-WEIGHT-MEDIUM TYPO-OBLIQUE-NONE TYPO-D-SIZES-H3 TYPO-VARIABLE">
                                            {{ $lkey["home_front_aka"][$locale] }}
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
                                        <a class="L-SHORTCUT-icon" href="https://t.me/sh1ft_yt" target="_blank" rel="noopener noreferrer">
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
                        <div class="S-SHOWCASE-skills DEV-DISABLE_SELECTION">
                            <div class="S-SKILLS-wrapper">
                                <div class="S-SKILLS-carcass">
                                    <x-blades.skills.card
                                        category-name="web"
                                        category-title="Веб-разработка"
                                        category-icon='
                                            <svg class="I-ALL-icon" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5007 0C9.47154 0 0.5 8.97124 0.5 20C0.5 22.6703 1.02931 25.2179 1.98303 27.5488C2.00829 27.634 2.04146 27.7167 2.08209 27.7958C5.12659 34.9618 12.2359 40 20.5007 40C28.8006 40 35.9329 34.9184 38.9556 27.7038C38.966 27.6794 38.9758 27.6547 38.9849 27.6298C39.9595 25.2771 40.5 22.7011 40.5 20C40.5 8.97124 31.5299 0 20.5007 0ZM20.5007 2.85858C21.266 2.85858 22.0339 3.17932 22.8682 3.94394C23.7026 4.70857 24.5433 5.91161 25.2609 7.46648C25.7914 8.6158 26.2536 9.95423 26.6268 11.4313H14.3677C14.7409 9.95423 15.203 8.6158 15.7335 7.46648C16.4512 5.91161 17.2932 4.70857 18.1276 3.94394C18.962 3.17932 19.7354 2.85858 20.5007 2.85858ZM26.5765 3.96627C30.2954 5.37193 33.3908 8.03035 35.3533 11.4313H29.5635C29.1281 9.53633 28.5582 7.79125 27.8559 6.26956C27.4696 5.43275 27.0411 4.66697 26.5765 3.96627ZM14.4165 3.96767C13.9523 4.66793 13.5245 5.43337 13.1386 6.26956C12.4362 7.79128 11.8664 9.5363 11.4309 11.4313H5.64387C7.6065 8.03219 10.6994 5.37381 14.4165 3.96767ZM4.32826 14.2843H10.8924C10.6339 16.0955 10.4976 18.0131 10.4976 20C10.4976 21.9869 10.6339 23.9044 10.8924 25.7157H4.32826C3.69815 23.9285 3.35306 22.0057 3.35306 20C3.35306 17.9942 3.69808 16.0716 4.32826 14.2843ZM13.7957 14.2843H27.1988C27.4783 16.0744 27.6396 17.9944 27.6396 20C27.6396 22.0056 27.4783 23.9256 27.1988 25.7157H13.7957C13.5161 23.9256 13.3548 22.0056 13.3548 20C13.3548 17.9944 13.5161 16.0744 13.7957 14.2843ZM30.102 14.2843H36.6676C37.2973 16.0715 37.6428 17.9942 37.6428 20C37.6428 22.0057 37.2973 23.9286 36.6676 25.7157H30.102C30.3605 23.9044 30.4983 21.9869 30.4983 20C30.4983 18.0131 30.3605 16.0955 30.102 14.2843ZM5.64666 28.5742H11.4323C11.8676 30.4672 12.4368 32.2101 13.1386 33.7304C13.5245 34.5666 13.9523 35.332 14.4165 36.0323C10.7013 34.6269 7.60945 31.9707 5.64666 28.5742ZM14.3691 28.5742H26.6254C26.2524 30.049 25.7907 31.3856 25.2609 32.5334C24.5433 34.0883 23.7026 35.2956 22.8682 36.0602C22.0339 36.8248 21.266 37.1414 20.5007 37.1414C19.7354 37.1414 18.962 36.8248 18.1276 36.0602C17.2932 35.2956 16.4512 34.0883 15.7335 32.5334C15.2037 31.3856 14.742 30.049 14.3691 28.5742ZM29.5635 28.5742H35.3492C33.3864 31.9723 30.2933 34.6289 26.5765 36.0337C27.0411 35.333 27.4696 34.5672 27.8559 33.7304C28.5576 32.21 29.1282 30.4673 29.5635 28.5742Z" fill="#B6B6B6"/>
                                            </svg>
                                        '
                                    >
                                        <x-blades.tags.programming.laravel/>
                                        <x-blades.tags.programming.php/>
                                        <x-blades.tags.programming.typescript/>
                                        <x-blades.tags.programming.postgresql/>
                                        <x-blades.tags.programming.mysql/>
                                        <x-blades.tags.programming.scss/>
                                    </x-blades.skills.card>
                                    <x-blades.skills.card
                                        category-name="design"
                                        category-title="Графический дизайн"
                                        category-icon='
                                            <svg class="I-ALL-icon" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M40.8844 11.5391V40.0009H12.4229V11.5391H40.8844ZM15.7545 36.6692H37.5527V14.8707H15.7545V36.6692Z" fill="#B6B6B6"/>
                                                <path d="M27.6309 15.0001C27.6309 8.46776 22.1996 3.17223 15.4998 3.17223C8.80003 3.17223 3.36877 8.46776 3.36877 15.0001C3.36877 21.5325 8.80003 26.828 15.4998 26.828V30.0003C7.00315 30.0003 0.115234 23.2845 0.115234 15.0001C0.115234 6.71579 7.00315 0 15.4998 0C23.9965 0 30.8844 6.71579 30.8844 15.0001C30.8844 23.2845 23.9965 30.0003 15.4998 30.0003V26.828C22.1996 26.828 27.6309 21.5325 27.6309 15.0001Z" fill="#B6B6B6"/>
                                            </svg>
                                        '
                                    >
                                        <x-blades.tags.graphic_design.photoshop/>
                                        <x-blades.tags.graphic_design.illustrator/>
                                        <x-blades.tags.graphic_design.figma/>
                                        <x-blades.tags.montage_animation.after_effects/>
                                        <x-blades.tags.montage_animation.premiere_pro/>
                                    </x-blades.skills.card>
                                    <x-blades.skills.card
                                        category-name="3d"
                                        category-title="3D-Дизайн"
                                        category-icon='
                                            <svg class="I-ALL-icon" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M38.1611 8.9873V30.9893L19.2305 39.6689L0.299805 30.9893V8.98828L19.2305 0.328125L38.1611 8.9873ZM3.54688 28.8008L3.72266 28.8809L17.6094 35.2363V19.1025L17.4336 19.0225L3.54688 12.667V28.8008ZM20.8545 19.1025V35.2363L34.916 28.8008V12.667L20.8545 19.1025ZM19.1055 4.04688L6.5293 9.81152L5.93457 10.085L19.1055 16.1221L19.2305 16.1797L19.3555 16.1221L32.1074 10.2773L32.5312 10.0703L32.1074 9.87109L31.9316 9.79102L19.3555 4.0459L19.2305 3.98926L19.1055 4.04688Z" fill="#B6B6B6"/>
                                            </svg>
                                        '
                                    >
                                        <x-blades.tags.3d.blender/>
                                        <x-blades.tags.3d.substance_designer/>
                                        <x-blades.tags.3d.substance_painter/>
                                        <x-blades.tags.3d.source_1_and_2/>
                                    </x-blades.skills.card>
                                    <x-blades.skills.card
                                        category-name="languages"
                                        category-title="Языки"
                                        category-icon='
                                            <svg class="I-ALL-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M30.6982 14.9844L39.5732 39.7021H35.6514L34.166 35.3623H23.4512L21.9658 39.7021H18.0439L26.9551 14.9844H30.6982ZM28.5586 20.6426L28.4883 20.8438L24.6191 31.9844H32.9961L32.8584 31.5859L29.1279 20.8438L29.0576 20.6426H28.5586Z" fill="#B5B6B6"/>
                                                <path d="M16.9502 0.300781V3.92871H30.4443V7.07715H25.8232L25.7471 7.26465C23.8859 11.8601 21.2068 16.0335 17.876 19.5527L17.6582 19.7822L17.9004 19.9873C18.0293 20.0964 18.164 20.212 18.2998 20.3232L21.2002 22.709L20.0654 25.8574L16.2939 22.7549C16.0493 22.5536 15.807 22.3476 15.5664 22.1396L15.3701 21.9697L15.1738 22.1406L14.4473 22.7549L5.89062 29.791L3.88477 27.3594L12.4414 20.3242L12.4404 20.3232C12.5758 20.2124 12.7097 20.1007 12.8418 19.9883L13.083 19.7832L12.8652 19.5537C10.3718 16.9185 8.24456 13.9166 6.55078 10.6455H10.1436C11.5541 13.0936 13.2367 15.3566 15.1543 17.3838L15.3721 17.6143L15.5908 17.3838C18.3053 14.5149 20.5494 11.1722 22.2168 7.50195L22.4092 7.07715H0.299805V3.92773H13.7939V0.300781H16.9502Z" fill="#B5B6B6"/>
                                            </svg>
                                        '
                                    >
                                        <x-blades.tags.languages.russian/>
                                        <x-blades.tags.languages.english/>
                                        <x-blades.tags.languages.japanese/>
                                        <x-blades.tags.languages.bulgarian/>
                                    </x-blades.skills.card>
                                </div>
                            </div>
                        </div>
                        <div class="S-SHOWCASE-projects">
                            <div class="S-PROJECTS-wrapper">
                                <div class="S-PROJECTS-carcass">
                                    <div class="S-PROJECTS-tilerow">
                                        <div class="S-TILEROW-wrapper">
                                            <div class="S-TILEROW-carcass S-TILEROW-100">
                                                <div class="S-TILEROW-tile S-TILEROW-slot_1">
                                                    <x-blades.projects.tile100
                                                        project-url="leee"
                                                        project-name='«Citadel» — Карта для Counter-Strike 2'
                                                        project-image="/images/art/citadel/preview.jpg"
                                                        project-image-alt="citadel"
                                                    >
                                                        <x-blades.tags.3d.blender/>
                                                        <x-blades.tags.3d.substance_designer/>
                                                        <x-blades.tags.3d.substance_painter/>
                                                        <x-blades.tags.3d.source_2/>
                                                    </x-blades.projects.tile100>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="S-PROJECTS-tilerow">
                                        <div class="S-TILEROW-wrapper">
                                            <div class="S-TILEROW-carcass S-TILEROW-50_50">
                                                <div class="S-TILEROW-tile S-TILEROW-slot_1">
                                                    <x-blades.projects.tile50
                                                        project-url="leee"
                                                        project-name="Cocofe"
                                                        project-image="/images/art/frontman/2.jpg"
                                                        project-image-alt="cocofe"
                                                    >
                                                        <x-blades.tags.3d.blender/>
                                                        <x-blades.tags.3d.substance_designer/>
                                                        <x-blades.tags.3d.substance_painter/>
                                                    </x-blades.projects.tile50>
                                                </div>
                                                <div class="S-TILEROW-tile S-TILEROW-slot_2">
                                                    <x-blades.projects.tile50
                                                        project-url="leee"
                                                        project-name="Cocofe"
                                                        project-image="/images/art/frontman/2.jpg"
                                                        project-image-alt="cocofe"
                                                    >
                                                        <x-blades.tags.3d.blender/>
                                                        <x-blades.tags.3d.substance_designer/>
                                                        <x-blades.tags.3d.substance_painter/>
                                                    </x-blades.projects.tile50>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="S-PROJECTS-tilerow">
                                        <div class="S-TILEROW-wrapper">
                                            <div class="S-TILEROW-carcass S-TILEROW-50_25_25">
                                                <div class="S-TILEROW-tile S-TILEROW-slot_1">
                                                    <x-blades.projects.tile50
                                                        project-url="leee"
                                                        project-name="Cocofe"
                                                        project-image="/images/art/frontman/2.jpg"
                                                        project-image-alt="cocofe"
                                                    >
                                                        <x-blades.tags.3d.blender/>
                                                        <x-blades.tags.3d.substance_designer/>
                                                        <x-blades.tags.3d.substance_painter/>
                                                    </x-blades.projects.tile50>
                                                </div>
                                                <div class="S-TILEROW-tile S-TILEROW-slot_2">
                                                    <x-blades.projects.tile25
                                                        project-url="leee"
                                                        project-name="Bilender"
                                                        project-image="/images/art/frontman/1.jpg"
                                                        project-image-alt="bilyaaa"
                                                    >
                                                        <x-blades.tags.3d.blender/>
                                                    </x-blades.projects.tile25>
                                                </div>
                                                <div class="S-TILEROW-tile S-TILEROW-slot_3">
                                                    <x-blades.projects.tile25
                                                        project-url="leee"
                                                        project-name="Bilender"
                                                        project-image="/images/art/frontman/1.jpg"
                                                        project-image-alt="bilyaaa"
                                                    >
                                                        <x-blades.tags.3d.blender/>
                                                    </x-blades.projects.tile25>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="S-PROJECTS-tilerow">
                                        <div class="S-TILEROW-wrapper">
                                            <div class="S-TILEROW-carcass S-TILEROW-25_50_25">
                                                <div class="S-TILEROW-tile S-TILEROW-slot_1">
                                                    <x-blades.projects.tile25
                                                        project-url="leee"
                                                        project-name="Bilender"
                                                        project-image="/images/art/frontman/1.jpg"
                                                        project-image-alt="bilyaaa"
                                                    >
                                                        <x-blades.tags.3d.blender/>
                                                    </x-blades.projects.tile25>
                                                </div>
                                                <div class="S-TILEROW-tile S-TILEROW-slot_2">
                                                    <x-blades.projects.tile50
                                                        project-url="leee"
                                                        project-name="Cocofe"
                                                        project-image="/images/art/frontman/2.jpg"
                                                        project-image-alt="cocofe"
                                                    >
                                                        <x-blades.tags.3d.blender/>
                                                        <x-blades.tags.3d.substance_designer/>
                                                        <x-blades.tags.3d.substance_painter/>
                                                    </x-blades.projects.tile50>
                                                </div>
                                                <div class="S-TILEROW-tile S-TILEROW-slot_3">
                                                    <x-blades.projects.tile25
                                                        project-url="leee"
                                                        project-name="Bilender"
                                                        project-image="/images/art/frontman/1.jpg"
                                                        project-image-alt="bilyaaa"
                                                    >
                                                        <x-blades.tags.3d.blender/>
                                                    </x-blades.projects.tile25>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="S-PROJECTS-tilerow">
                                        <div class="S-TILEROW-wrapper">
                                            <div class="S-TILEROW-carcass S-TILEROW-25_25_50">
                                                <div class="S-TILEROW-tile S-TILEROW-slot_1">
                                                    <x-blades.projects.tile25
                                                        project-url="leee"
                                                        project-name="Bilender"
                                                        project-image="/images/art/frontman/1.jpg"
                                                        project-image-alt="bilyaaa"
                                                    >
                                                        <x-blades.tags.3d.blender/>
                                                    </x-blades.projects.tile25>
                                                </div>
                                                <div class="S-TILEROW-tile S-TILEROW-slot_2">
                                                    <x-blades.projects.tile25
                                                        project-url="leee"
                                                        project-name="Bilender"
                                                        project-image="/images/art/frontman/1.jpg"
                                                        project-image-alt="bilyaaa"
                                                    >
                                                        <x-blades.tags.3d.blender/>
                                                    </x-blades.projects.tile25>
                                                </div>
                                                <div class="S-TILEROW-tile S-TILEROW-slot_3">
                                                    <x-blades.projects.tile50
                                                        project-url="leee"
                                                        project-name="Cocofe"
                                                        project-image="/images/art/frontman/2.jpg"
                                                        project-image-alt="cocofe"
                                                    >
                                                        <x-blades.tags.3d.blender/>
                                                        <x-blades.tags.3d.substance_designer/>
                                                        <x-blades.tags.3d.substance_painter/>
                                                    </x-blades.projects.tile50>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="S-SHOWCASE-conclusion">

                        </div>
                    </div>
                </div>
            </div>
            <div class="S-HOME-footer">
                <div class="S-FOOTER-wrapper">
                    <div class="S-FOOTER-carcass">
                        <p>{{ $AE_Country }}</p>
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
