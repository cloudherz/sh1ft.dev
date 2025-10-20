function headerOverlaysInteractions() {
    const headerContentOverlaysParent = document.getElementById("DESKTOP-HEADER_OVERLAYS-parent");
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

    let activeOverlay: HTMLElement | null = null;

    //  TEXT BUTTONS CLICK ANIMATION
    function animateTextButtonOnClick(buttonId: string) {
        const button = document.getElementById(buttonId);
        if (button) {
            button.classList.remove('I-CONTENT-dropdown_arrow_animation');
            void button.offsetWidth;
            void button.getBoundingClientRect();
            button.classList.add('I-CONTENT-dropdown_arrow_animation');
        }
    }

    //  LANGUAGE BUTTON CLICK ANIMATION
    function animateLanguagesButtonOnClick(getPart1: string, getPart2: string) {
        const part1 = document.getElementById(getPart1);
        const part2 = document.getElementById(getPart2);
        if (part1 && part2) {
            part1.classList.remove('I-CONTENT-languages_icon_part1_animation');
            part2.classList.remove('I-CONTENT-languages_icon_part2_animation');
            void part1.offsetWidth;
            void part2.offsetWidth;
            void part1.getBoundingClientRect();
            void part2.getBoundingClientRect();
            part1.classList.add('I-CONTENT-languages_icon_part1_animation');
            part2.classList.add('I-CONTENT-languages_icon_part2_animation');
        }
    }

    //  TEXT BUTTONS HOVER ANIMATION
    function animateTextButtonOnHover(buttonId: string) {
        const button = document.getElementById(buttonId);
        if (button) {
            button.style.transform = "rotate(11deg)";
            setTimeout(() => {
                button.style.transform = "rotate(-11deg)";
            }, 115);
            setTimeout(() => {
                button.style.transform = "rotate(0deg)";
            }, 230);
        }
    }

    //  LANGUAGE BUTTON HOVER ANIMATION
    function animateLanguagesButtonOnHover(getPart1: string, getPart2: string) {
        const part1 = document.getElementById(getPart1);
        const part2 = document.getElementById(getPart2);
        if (part1 && part2) {
            part1.style.transform = "rotate(-11deg)";
            setTimeout(() => {
                part1.style.transform = "rotate(11deg)";
            }, 115);
            setTimeout(() => {
                part1.style.transform = "rotate(0deg)";
            }, 230);

            part2.style.transform = "rotate(11deg)";
            setTimeout(() => {
                part2.style.transform = "rotate(-11deg)";
            }, 100);
            setTimeout(() => {
                part2.style.transform = "rotate(0deg)";
            }, 200);
        }
    }

    function resetOutsideClickListener(event: MouseEvent) {
        let target: HTMLElement = event.target as HTMLElement;

        if (target.tagName === 'P' || target.tagName === 'IMG' || target.tagName === 'path' || target.tagName === 'svg') {
            const triggerDiv: HTMLElement | null = target.closest('div');
            if (triggerDiv) {
                target = triggerDiv;
            }
        }

        if (activeOverlay) {
            const clickedInsideHeader = target.id.startsWith("DESKTOP-HEADER_OVERLAY_TRIGGER-");
            const clickedInsideActiveOverlay = activeOverlay.contains(target);

            let textClickElsewhereAnimationIsServed: boolean = false;

            //  CLOSE OVERLAY IF HIT OUTSIDE OF ACTIVE OVERLAY
            if (!clickedInsideHeader && !clickedInsideActiveOverlay) {
                document.removeEventListener('click', resetOutsideClickListener);

                headerOverlays.forEach(headerOverlay => {
                    if (!headerOverlay || !activeOverlay) return;

                    if (!textClickElsewhereAnimationIsServed) {
                        //  ANIMATE DROPDOWN BUTTON ON HOVER
                        if (headerOverlay.id.includes("projects") && activeOverlay.id.includes("projects")) {
                            //  USE ON HOVER INSTEAD OF ON CLICK ANIMATIONS BECAUSE THEY LOOK BETTER
                            animateTextButtonOnHover("DESKTOP-HEADER_DROPDOWN_ARROW-projects");
                            textClickElsewhereAnimationIsServed = true;
                        } else if (headerOverlay.id.includes("other") && activeOverlay.id.includes("other")) {
                            //  USE ON HOVER INSTEAD OF ON CLICK ANIMATIONS BECAUSE THEY LOOK BETTER
                            animateTextButtonOnHover("DESKTOP-HEADER_DROPDOWN_ARROW-other");
                            textClickElsewhereAnimationIsServed = true;
                        } else if (headerOverlay.id.includes("languages") && activeOverlay.id.includes("languages")) {
                            //  USE ON HOVER INSTEAD OF ON CLICK ANIMATIONS BECAUSE THEY LOOK BETTER
                            animateLanguagesButtonOnHover("DESKTOP-HEADER_DROPDOWN_LANGUAGES_ICON-part1", "DESKTOP-HEADER_DROPDOWN_LANGUAGES_ICON-part2");
                        }
                    }

                    if (!headerContentOverlaysParent) return;
                    headerContentOverlaysParent.style.pointerEvents = 'none';
                    headerOverlay.style.opacity = '0';
                    headerOverlay.style.pointerEvents = 'none';
                    headerOverlay.style.zIndex = '100';
                });
                activeOverlay = null;
                textClickElsewhereAnimationIsServed = false;
            }
        }
    }



    headerOverlays.forEach(headerOverlay => {
        if (headerOverlay) {
            if (!headerContentOverlaysParent) return;
            headerContentOverlaysParent.style.pointerEvents = 'none';
            headerOverlay.style.opacity = '0';
            headerOverlay.style.pointerEvents = 'none';
            headerOverlay.classList.remove('DEV-DISABLE_VISIBILITY');
        }
    });



    if (!headerContentOverlaysParent) return;
    headerContentOverlaysParent.style.pointerEvents = 'none';




    headerOverlaysTriggers.forEach(headerOverlayTrigger => {

        if (headerOverlayTrigger.includes("languages")) {
            return;
        }

        let headerOverlayTriggerElement: HTMLElement | null = document.getElementById("DESKTOP-HEADER_OVERLAY_TRIGGER-" + headerOverlayTrigger);

        if (!headerOverlayTriggerElement) return;

        headerOverlayTriggerElement.addEventListener('mouseenter', function(e: MouseEvent) {

            let target = e.target as HTMLElement;

            if (target.tagName === 'P' || target.tagName === 'IMG' || target.tagName === 'path' || target.tagName === 'svg') {
                const triggerDiv = target.closest('div');
                if (triggerDiv) {
                    target = triggerDiv;
                }
            }

            const targetId = target.id;


            if (targetId && targetId.startsWith("DESKTOP-HEADER_OVERLAY_TRIGGER-")) {
                const parts = targetId.split("-");
                let trigger = parts[2];

                if (!trigger) return;

                if (headerOverlaysTriggers.includes(trigger)) {
                    //  ANIMATE DROPDOWN BUTTON ON HOVER
                    if (trigger === "projects") {
                        animateTextButtonOnHover("DESKTOP-HEADER_DROPDOWN_ARROW-projects");
                    } else if (trigger === "other") {
                        animateTextButtonOnHover("DESKTOP-HEADER_DROPDOWN_ARROW-other");
                    }
                }
            }
        });
    });

    headerOverlaysTriggers.forEach(headerOverlayTrigger => {

        if (headerOverlayTrigger.includes("projects") || headerOverlayTrigger.includes("other")) {
            return;
        }

        let headerOverlayTriggerElement: HTMLElement | null = document.getElementById("DESKTOP-HEADER_OVERLAY_TRIGGER-" + headerOverlayTrigger);

        if (!headerOverlayTriggerElement) return;

        headerOverlayTriggerElement.addEventListener('mouseenter', function(e: MouseEvent) {

            let target = e.target as HTMLElement;

            if (!target) return;

            if (target.tagName === 'P' || target.tagName === 'IMG' || target.tagName === 'path' || target.tagName === 'svg') {
                const triggerDiv = target.closest('div');
                if (triggerDiv) {
                    target = triggerDiv;
                }
            }

            const targetId = target.id;

            if (targetId && targetId.startsWith("DESKTOP-HEADER_OVERLAY_TRIGGER-")) {
                const parts = targetId.split("-");
                let trigger = parts[2];

                if (!trigger) return;

                if (headerOverlaysTriggers.includes(trigger)) {
                    //  ANIMATE DROPDOWN BUTTON ON HOVER
                    animateLanguagesButtonOnHover("DESKTOP-HEADER_DROPDOWN_LANGUAGES_ICON-part1", "DESKTOP-HEADER_DROPDOWN_LANGUAGES_ICON-part2");
                }
            }
        });
    });


    if (!headerContentCarcass) return;
    headerContentCarcass.addEventListener('click', function(e: PointerEvent) {
        let target = e.target as HTMLElement;

        if (!target) return;

        if (target.tagName === 'P' || target.tagName === 'IMG' || target.tagName === 'path' || target.tagName === 'svg') {
            const triggerDiv = target.closest('div');
            if (triggerDiv) {
                target = triggerDiv;
            }
        }

        console.log(target);

        const targetId = target.id;

        if (targetId && targetId.startsWith("DESKTOP-HEADER_OVERLAY_TRIGGER-")) {
            const parts = targetId.split("-");
            let trigger = parts[2];
            const triggeredOverlay = document.getElementById("DESKTOP-HEADER_OVERLAY-" + trigger);

            if (!trigger) return;

            if (headerOverlaysTriggers.includes(trigger) && triggeredOverlay) {
                //  ANIMATE DROPDOWN BUTTON ON CLICK
                if (trigger === "projects") {
                    animateTextButtonOnClick("DESKTOP-HEADER_DROPDOWN_ARROW-projects");
                } else if (trigger === "other") {
                    animateTextButtonOnClick("DESKTOP-HEADER_DROPDOWN_ARROW-other");
                } else if (trigger === "languages") {
                    animateLanguagesButtonOnClick("DESKTOP-HEADER_DROPDOWN_LANGUAGES_ICON-part1", "DESKTOP-HEADER_DROPDOWN_LANGUAGES_ICON-part2");
                }

                //  CLOSE SAME OVERLAY THAT WAS ACTIVE
                if (activeOverlay === triggeredOverlay && triggeredOverlay.style.opacity === '1') {
                    if (!headerContentOverlaysParent) return;
                    headerContentOverlaysParent.style.pointerEvents = 'none';
                    triggeredOverlay.style.opacity = '0';
                    triggeredOverlay.style.pointerEvents = 'none';
                    triggeredOverlay.style.zIndex = '100';
                    activeOverlay = null;

                    document.removeEventListener('click', resetOutsideClickListener);

                    return;
                }

                //  CLOSE IRRELEVANT OVERLAYS
                headerOverlays.forEach(headerOverlay => {
                    if (!headerOverlay) return;

                    if (headerOverlay !== triggeredOverlay) {
                        if (!headerContentOverlaysParent) return;
                        headerContentOverlaysParent.style.pointerEvents = 'none';
                        headerOverlay.style.opacity = '0';
                        headerOverlay.style.pointerEvents = 'none';
                        headerOverlay.style.zIndex = '100';
                    }
                });

                //  OPEN TRIGGERED OVERLAY
                if (!headerContentOverlaysParent) return;
                headerContentOverlaysParent.style.pointerEvents = 'unset';
                triggeredOverlay.style.opacity = '1';
                triggeredOverlay.style.pointerEvents = 'unset';
                triggeredOverlay.style.zIndex = '101';
                activeOverlay = triggeredOverlay;

                setTimeout(() => {
                    document.addEventListener('click', resetOutsideClickListener);
                }, 0);
            }
        }
    });
}

headerOverlaysInteractions();

