<script>
    function pageTransitionOpacityEnd() {

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
        | DISABLING SELF LINKS
        |--------------------------------------------------------------------------
        */

        function disableSelfLinks() {
            // Get clean URL without cache, parameters, etc.
            const currentUrl = window.location.href.split(/[?#]/)[0].replace(/\/$/, '');

            // Get all links on the page
            const allLinks = document.querySelectorAll('a');

            // Filter links whose href matches the current URL
            const matchingLinks = [...allLinks].filter(link => {
                // Get clean href="" without cache, parameters,
                const linkHref = link.href.split(/[?#]/)[0].replace(/\/$/, '');
                return linkHref === currentUrl;
            });

            // Disable clicks for found links
            matchingLinks.forEach(link => {
                if (link.classList.contains("L-HEADER-browse_links")) {
                    link.classList.add("L-HEADER-browse_links_disabled");
                }

                if (link.classList.contains("L-HEADER-generic_links")) {
                    link.classList.add("L-HEADER-generic_links_disabled");
                }

                if (link.classList.contains("L-HEADER-auth")) {
                    link.classList.add("L-HEADER-auth_disabled");
                }

                link.style.pointerEvents = 'none';
                link.style.cursor = 'default';
            });
        }

        /*
        |--------------------------------------------------------------------------
        | ENABLING ALL LINKS
        |--------------------------------------------------------------------------
        */

        function enableAllLinks() {
            document.querySelectorAll('a').forEach(link => {
                link.style.pointerEvents = '';

                if (link.classList.contains("L-HEADER-browse_links")) {
                    link.classList.remove("L-HEADER-browse_links_disabled");
                }

                if (link.classList.contains("L-HEADER-generic_links")) {
                    link.classList.remove("L-HEADER-generic_links_disabled");
                }

                if (link.classList.contains("L-HEADER-auth")) {
                    link.classList.remove("L-HEADER-auth_disabled");
                }
            });
        }

        /*
        |--------------------------------------------------------------------------
        | TRANSITION END LOGIC
        |--------------------------------------------------------------------------
        */

        function transitionEndLogic() {

            /*
            |--------------------------------------------------------------------------
            | TRANSITION END
            |--------------------------------------------------------------------------
            */

            // Disable links
            disableAllLinks();

            // Get structure
            const transitionStructure = document.querySelector('.S-MAIN-any');

            // The beginning of the end of transition
            transitionStructure.style.opacity = '0';

            // Delay
            setTimeout(() => {
                // Enable links
                enableAllLinks();
                // Disable self links
                disableSelfLinks();

                // End of transition
                transitionStructure.style.transition = 'opacity ' + delayS + 's';
                transitionStructure.style.opacity = '1';
            }, delayMS);
        }

        /*
        |--------------------------------------------------------------------------
        | SEPARATING PAGE OPENING AND END OF TRANSITION EVENTS
        |--------------------------------------------------------------------------
        */

        // Disable self links
        disableSelfLinks();

        // Variable to define navigation status
        //
        // false -> Page opening
        // true -> End of transition
        //
        let isNavigating = false;

        // If transition is already in progress (end of transition)
        document.addEventListener('livewire:navigating', () => {
            isNavigating = true;
        });

        // Page opening and end of transition - both livewire:navigated
        document.addEventListener('livewire:navigated', () => {
            // Stop if page opening is happening
            if (!isNavigating) return;

            // Do end of transition
            transitionEndLogic();

            // Reset navigation status
            isNavigating = false;
        });
    }

    pageTransitionOpacityEnd();
</script>
