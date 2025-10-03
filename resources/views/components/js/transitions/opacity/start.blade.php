<script>
    function pageTransitionOpacityStart() {

        /*
        |--------------------------------------------------------------------------
        | DELAY
        |--------------------------------------------------------------------------
        */

        // Get full delay of the whole transition from App script
        const getDelay = {{ $APP_TransitionTime }};
        // Delay in seconds
        const delayS = getDelay / 2;
        // Delay in milliseconds
        const delayMS = delayS * 1000;

        /*
        |--------------------------------------------------------------------------
        | DISABLING ALL LINKS
        |--------------------------------------------------------------------------
        */

        function disableAllLinks() {
            document.querySelectorAll('a').forEach(link => {
                link.style.pointerEvents = 'none';

                if (link.classList.contains("L-HEADER-browse_links")) {
                    link.classList.add("L-HEADER-browse_links_disabled");
                }

                if (link.classList.contains("L-HEADER-generic_links")) {
                    link.classList.add("L-HEADER-generic_links_disabled");
                }

                if (link.classList.contains("L-HEADER-auth")) {
                    link.classList.add("L-HEADER-auth_disabled");
                }
            });
        }

        /*
        |--------------------------------------------------------------------------
        | TRANSITION START
        |--------------------------------------------------------------------------
        */

        // Get all transition links
        const transitionLinks = document.querySelectorAll('.TRANSITION');

        // Start transition for each link on the page
        transitionLinks.forEach(element => {
            // Start transition on click
            element.addEventListener('click', function() {
                // Disable links
                disableAllLinks();

                // Get structure
                const transitionStructure = document.querySelector('.S-MAIN-any');

                // Start of transition
                transitionStructure.style.transition = 'opacity ' + delayS + 's';
                transitionStructure.style.opacity = '0';
            });
        });
    }

    pageTransitionOpacityStart();
</script>
