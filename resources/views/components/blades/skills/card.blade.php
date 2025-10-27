<div class="S-SKILLS-{{ $categoryName }} S-SKILLS-all PRESET-BG-SOFT_TOUCH">
    <div class="S-ALL-wrapper">
        <div class="S-ALL-carcass">
            <div class="S-ALL-title">
                {!! $categoryIcon !!}
                <p class="T-ALL-title TYPO-WEIGHT-SEMIBOLD TYPO-OBLIQUE-NONE TYPO-D-SIZES-NORMAL TYPO-VARIABLE">{{ $categoryTitle }}</p>
            </div>
            <div class="S-ALL-tags">
                <div class="S-TAGS-wrapper">
                    <div class="S-TAGS-carcass">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
