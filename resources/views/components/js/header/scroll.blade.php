<script>
    function toggleHeaderOnScroll() {
        const header = document.getElementById("DESKTOP-header");

        if (header) {
            // header.style.opacity = window.scrollY > 0 ? '0' : '1';
            header.style.opacity = '1';
        } else {
            return;
        }

        let lastScrollY = window.scrollY;
        let ticking = false;

        const SCROLL_THRESHOLD = 1;

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
                        header.style.opacity = '0';
                    } else if (direction === 'up') {
                        header.style.opacity = '1';
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
</script>
