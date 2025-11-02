<div class="S-TILE-wrapper">
    <div class="S-TILE-carcass">
        <div class="S-TILE-100 S-TILE-all PRESET-BG-SOFT_TOUCH">
            <div class="S-ALL-wrapper">
                <div class="S-ALL-carcass">
                    <div class="S-ALL-image_100 S-ALL-image DEV-DISABLE_SELECTION">
                        <a href="/{{ $locale }}/{{ $projectUrl }}" class="DEV-NO_PREFETCH L-IMAGE-link">
                            <img class="I-IMAGE-image" src="{{ asset($projectImage) }}" alt="{{ $projectImageAlt }}">
                            <div class="S-ALL-image_hover">
                                <p class="T-IMAGE-text TYPO-WEIGHT-SEMIBOLD TYPO-OBLIQUE-NONE TYPO-D-SIZES-H5 TYPO-VARIABLE">
                                    {{ $lkey["component_project_image_hover"][$locale] }}
                                    <svg class="I-IMAGE-icon" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.0342 9.39355H6.8877C6.10843 9.39376 5.46191 10.0401 5.46191 10.8193V35.1123C5.46202 35.8915 6.10849 36.5379 6.8877 36.5381H31.1807C31.9587 36.5381 32.6073 35.8912 32.6074 35.1123V21.9658H37.0225H38.0713L38.0693 35.1123C38.0692 38.9068 34.9753 42 31.1807 42H6.8877C3.09529 41.9998 0.000172869 38.907 0 35.1123V10.8193C0 7.02483 3.09311 3.93184 6.8877 3.93164H20.0342V9.39355ZM39.2695 0C40.7788 0 42 1.22433 42 2.73047V16.1309H36.5381V9.32324L18.1631 27.6982L14.3018 23.8369L32.6768 5.46191H25.8682V0H39.2695Z"/>
                                    </svg>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="S-ALL-info">
                        <div class="S-INFO-text">
                            <a href="/{{ $locale }}/{{ $projectUrl }}" class="DEV-NO_PREFETCH L-INFO-link TYPO-WEIGHT-SEMIBOLD TYPO-OBLIQUE-NONE TYPO-D-SIZES-H5 TYPO-VARIABLE">
                                {{ $projectName }}
                                <svg class="I-INFO-icon DEV-DISABLE_SELECTION" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.0342 9.39355H6.8877C6.10843 9.39376 5.46191 10.0401 5.46191 10.8193V35.1123C5.46202 35.8915 6.10849 36.5379 6.8877 36.5381H31.1807C31.9587 36.5381 32.6073 35.8912 32.6074 35.1123V21.9658H37.0225H38.0713L38.0693 35.1123C38.0692 38.9068 34.9753 42 31.1807 42H6.8877C3.09529 41.9998 0.000172869 38.907 0 35.1123V10.8193C0 7.02483 3.09311 3.93184 6.8877 3.93164H20.0342V9.39355ZM39.2695 0C40.7788 0 42 1.22433 42 2.73047V16.1309H36.5381V9.32324L18.1631 27.6982L14.3018 23.8369L32.6768 5.46191H25.8682V0H39.2695Z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="S-INFO-tags DEV-DISABLE_SELECTION">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
