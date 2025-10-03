<script>
    function headerOverlayToggle() {
        const headerContent = document.getElementById("DESKTOP-HEADER-carcass");
        const overlays = [
            document.getElementById("DESKTOP-HEADER_OVERLAY-projects"),
            document.getElementById("DESKTOP-HEADER_OVERLAY-other"),
            document.getElementById("DESKTOP-HEADER_OVERLAY-languages")
        ];
        const overlayButtons = ["projects", "other", "languages"];

        let currentOverlay = null;
        let currentOutsideClickListener = null;

        function disableOverlays() {
            overlays.forEach(overlay => {
                overlay.classList.add('DEV-DISABLE_VISIBILITY');
            });
            currentOverlay = null;

            if (currentOutsideClickListener) {
                document.removeEventListener('click', currentOutsideClickListener);
                currentOutsideClickListener = null;
            }
        }

        function setupOutsideClickListener() {
            currentOutsideClickListener = (event) => {
                // Проверяем, что клик был вне headerContent и вне текущего оверлея
                const clickedInsideHeader = headerContent.contains(event.target);
                const clickedInsideCurrentOverlay = currentOverlay && currentOverlay.contains(event.target);

                if (!clickedInsideHeader && !clickedInsideCurrentOverlay) {
                    disableOverlays();
                }
            };

            document.addEventListener('click', currentOutsideClickListener);
        }

        headerContent.addEventListener('click', function(e) {
            const target = e.target;
            const targetId = target.id;

            // Проверяем, был ли клик на любом элементе хедера с ID начинающимся на "DESKTOP-HEADER-"
            if (targetId && targetId.startsWith("DESKTOP-HEADER-")) {
                const parts = targetId.split("-");
                if (parts.length > 2) {
                    const buttonType = parts[2];
                    const clickedOverlay = document.getElementById("DESKTOP-HEADER_OVERLAY-" + buttonType);

                    // Если это кнопка с оверлеем
                    if (overlayButtons.includes(buttonType) && clickedOverlay) {
                        // Если этот оверлей уже открыт - закрываем его
                        if (currentOverlay === clickedOverlay && !clickedOverlay.classList.contains('DEV-DISABLE_VISIBILITY')) {
                            disableOverlays();
                            return;
                        }

                        // Закрываем все оверлеи
                        disableOverlays();

                        // Открываем выбранный оверлей
                        clickedOverlay.classList.remove('DEV-DISABLE_VISIBILITY');
                        currentOverlay = clickedOverlay;

                        // Устанавливаем обработчик клика вне области
                        setTimeout(() => {
                            setupOutsideClickListener();
                        }, 0);
                    }
                    // Если это кнопка без оверлея (about, contacts) - закрываем все оверлеи
                    else {
                        disableOverlays();
                    }
                }
            }
        });

        // Инициализация - закрываем все оверлеи
        disableOverlays();
    }

    headerOverlayToggle();
</script>
