function toggleHeaderOnScroll() {
    const headerWrapper = document.getElementById("DESKTOP-header-wrapper");

    if (headerWrapper) {
        // headerWrapper.style.opacity = window.scrollY > 0 ? '0' : '1';
        headerWrapper.style.opacity = '1';
    } else {
        return;
    }

    let lastScrollY = window.scrollY;
    let ticking = false;

    const SCROLL_THRESHOLD = 1;

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

    const updateScrollDirection = () => {
        const scrollY = window.scrollY;

        if (Math.abs(scrollY - lastScrollY) >= SCROLL_THRESHOLD) {
            let direction = null;

            if (scrollY > lastScrollY) {
                direction = "down";
            } else if (scrollY < lastScrollY) {
                direction = "up";
            } else {
                return;
            }

            if (direction) {
                if (direction === 'down') {
                    headerWrapper.style.opacity = '0';
                    headerWrapper.style.pointerEvents = 'none';
                } else if (direction === 'up') {
                    headerWrapper.style.opacity = '1';
                    headerWrapper.style.pointerEvents = 'unset';
                }
            }

            lastScrollY = Math.max(0, scrollY);
        }

        ticking = false;
    };

    const handleScroll = () => {
        if (!ticking) {
            requestAnimationFrame(updateScrollDirection);
            ticking = true;
        }
    };

    //  THROTTLING FOR FAST SCROLL
    const throttledHandleScroll = throttle(handleScroll, 16);

    window.addEventListener('scroll', throttledHandleScroll, { passive: true });
}

toggleHeaderOnScroll();
document.addEventListener('turbo:load', toggleHeaderOnScroll);
document.addEventListener('turbo:render', toggleHeaderOnScroll);
