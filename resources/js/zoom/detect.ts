function detectZoom() {
    let lastInnerWidth = window.innerWidth;
    let lastOuterWidth = window.outerWidth;
    let lastZoomLevel = lastInnerWidth;

    const ZOOM_THRESHOLD = 1;

    //  THROTTLE
    function throttle(func: Function, limit: number) {
        let inThrottle: boolean;
        return (...args: any[]) => {
            if (!inThrottle) {
                func(...args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        }
    }

    //  DEBOUNCE
    //  (...args: any[]) => any --> ENSURE THAT YOU ARE PASSING ARROW FUNCTION
    function debounce<T extends (...args: any[]) => any>(
        func: T,
        wait: number
    ): (...args: Parameters<T>) => void {
        let timeoutId: ReturnType<typeof setTimeout> | null = null;

        return (...args: Parameters<T>) => {
            if (timeoutId) {
                clearTimeout(timeoutId);
            }

            timeoutId = setTimeout(() => {
                func(...args);
            }, wait);
        };
    }

    function checkZoom() {
        const newInnerWidth = window.innerWidth;
        const newOuterWidth = window.outerWidth;
        const newZoomLevel = newInnerWidth;

        // IF INNER SIZE CHANGED BUT NOT OUTER, THEN IT'S A ZOOM, NOT A BROWSER WINDOW RESIZE
        let innerChanged: boolean;
        let outerChanged: boolean;

        innerChanged = lastInnerWidth !== newInnerWidth;
        outerChanged = lastOuterWidth !== newOuterWidth;

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
