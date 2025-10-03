<script>
    function livewireDelay() {

        /*
        |--------------------------------------------------------------------------
        | DELAY LOGIC
        |--------------------------------------------------------------------------
        */

        // Get full delay of the whole transition from App script
        const getDelay = {{ $APP_TransitionTime }};
        // Delay in seconds
        const delayS = getDelay / 2;
        // Delay in milliseconds
        const delayMS = delayS * 1000;

        // Do delay for each link on the page
        document.querySelectorAll('.TRANSITION').forEach(element => {
            // Click listener
            element.addEventListener('click', function(event) {
                // Prevent default page transition
                event.preventDefault();

                // Ensure the correct href="" is passed by finding the closest <a> tag
                const link = event.target.closest('.TRANSITION');
                if (link) {
                    // Delay
                    setTimeout(() => {
                        window.Livewire.navigate(link.getAttribute('href'));
                    }, delayMS);
                }
            });
        });
    }

    livewireDelay();
</script>
