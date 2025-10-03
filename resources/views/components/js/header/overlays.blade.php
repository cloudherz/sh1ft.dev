<script>
    function headerOverlayToggle() {
        const headerContentCarcass = document.getElementById("DESKTOP-HEADER_CONTENT-carcass");
        const headerOverlaysTriggers = [
            "projects",
            "other",
            "languages"
        ];
        const headerOverlays = [
            document.getElementById("DESKTOP-HEADER_OVERLAY-projects"),
            document.getElementById("DESKTOP-HEADER_OVERLAY-other"),
            document.getElementById("DESKTOP-HEADER_OVERLAY-languages")
        ];
        let activeOverlay = null;

        function setupOutsideClickListener(event) {
            const clickedInsideHeader = headerContentCarcass.contains(event.target);
            const clickedInsideCurrentOverlay = activeOverlay && activeOverlay.contains(event.target);

            if (!clickedInsideHeader && !clickedInsideCurrentOverlay) {
                document.removeEventListener('click', setupOutsideClickListener)

                headerOverlays.forEach(headerOverlay => {
                    headerOverlay.style.opacity = '0';
                });
            }
        }

        headerOverlays.forEach(headerOverlay => {
            if (headerOverlay) {
                headerOverlay.style.opacity = '0';
                headerOverlay.classList.remove('DEV-DISABLE_VISIBILITY');
            }
        });

        headerContentCarcass.addEventListener('click', function(e) {
            const target = e.target;
            const targetId = target.id;

            if (targetId && targetId.startsWith("DESKTOP-HEADER_OVERLAY_TRIGGER-")) {
                const parts = targetId.split("-");
                const trigger = parts[2];
                const triggeredOverlay = document.getElementById("DESKTOP-HEADER_OVERLAY-" + trigger);

                if (headerOverlaysTriggers.includes(trigger) && triggeredOverlay) {
                    //  CLOSE SAME OVERLAY THAT WAS ACTIVE
                    if (activeOverlay === triggeredOverlay && triggeredOverlay.style.opacity === '1') {
                        triggeredOverlay.style.opacity = '0';
                        activeOverlay = null;
                        return;
                    }

                    //  CLOSED IRRELEVANT OVERLAYS
                    headerOverlays.forEach(headerOverlay => {
                        if (headerOverlay !== triggeredOverlay) {
                            headerOverlay.style.opacity = '0';
                        }
                    });

                    //  OPEN TRIGGERED OVERLAY
                    triggeredOverlay.style.opacity = '1';
                    activeOverlay = triggeredOverlay;

                    setTimeout(() => {
                        document.addEventListener('click', setupOutsideClickListener);
                    }, 0);
                }
            }
        });
    }

    headerOverlayToggle();
</script>
