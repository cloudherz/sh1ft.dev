<script>
    function detectZoom() {
        let lastInnerWidth = window.innerWidth;
        let lastOuterWidth = window.outerWidth;
        let lastZoomLevel = lastInnerWidth;

        const ZOOM_THRESHOLD = 1;

        //  THROTTLE
        function throttle(func, limit) {
            let inThrottle;
            return function() {
                const args = arguments;
                const context = this;
                if (!inThrottle) {
                    func.apply(context, args);
                    inThrottle = true;
                    setTimeout(() => inThrottle = false, limit);
                }
            }
        }

        //  DEBOUNCE
        function debounce(func, delay) {
            let timeoutId;
            return function() {
                const args = arguments;
                const context = this;
                clearTimeout(timeoutId);
                timeoutId = setTimeout(() => func.apply(context, args), delay);
            };
        }

        function checkZoom() {
            const newInnerWidth = window.innerWidth;
            const newOuterWidth = window.outerWidth;
            const newZoomLevel = newInnerWidth;

            // IF INNER SIZE CHANGED BUT NOT OUTER, THEN IT'S A ZOOM, NOT A BROWSER WINDOW RESIZE
            let innerChanged = null;
            let outerChanged = null;

            if (lastInnerWidth === newInnerWidth) {
                innerChanged = false;
            } else {
                innerChanged = true;
            }

            if (lastOuterWidth === newOuterWidth) {
                outerChanged = false;
            } else {
                outerChanged = true;
            }

            const direction = newInnerWidth > lastInnerWidth ? 'down' : 'up';

            if (!direction) {
                return;
            }

            if ((Math.abs(newInnerWidth - lastInnerWidth) >= ZOOM_THRESHOLD) && (Math.abs(newOuterWidth - lastOuterWidth) === 0)) {
                if (innerChanged && !outerChanged) {
                    console.log(direction);
                }
            }

            lastInnerWidth = newInnerWidth;
            lastOuterWidth = newOuterWidth;
            lastZoomLevel = newZoomLevel;
        }

        //  THROTTLING FOR FAST RESIZES
        const throttledCheckZoom = throttle(checkZoom, 100);

        //  DEBOUNCE TO DETECT ONLY LAST VALID RESIZE
        const debouncedCheckZoom = debounce(checkZoom, 250);

        window.addEventListener('resize', throttledCheckZoom);
        window.addEventListener('resize', debouncedCheckZoom);
    }

    detectZoom();
</script>
