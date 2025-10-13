function headerOverlaysInteractions() {
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
    const blankOverlay = document.getElementById("DESKTOP-HEADER_OVERLAY-blank");

    let activeOverlay: HTMLElement | null = null;

    //  TEXT BUTTONS CLICK ANIMATION
    function animateTextButtonOnClick(buttonId: string) {
        const button = document.getElementById(buttonId);
        if (button) {
            button.classList.remove('I-CONTENT-dropdown_arrow_animation');
            void button.offsetWidth;
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

        if (target.tagName === 'P' || target.tagName === 'IMG') {
            const triggerDiv: HTMLElement | null = target.closest('div');
            if (triggerDiv) {
                target = triggerDiv;
            }
        }

        if (activeOverlay) {
            const clickedInsideHeader = target.id.startsWith("DESKTOP-HEADER_OVERLAY_TRIGGER-") || target.id.startsWith("DESKTOP-HEADER_OVERLAY_BLANK_TRIGGER-");
            const clickedInsideActiveOverlay = activeOverlay.contains(target);
            const isBlankTrigger = target.id.startsWith("DESKTOP-HEADER_OVERLAY_BLANK_TRIGGER-");

            let textClickElsewhereAnimationIsServed: boolean = false;

            //  CLOSE OVERLAY IF HIT OUTSIDE OF ACTIVE OVERLAY AND BLANK TRIGGERS
            if (!clickedInsideHeader && !clickedInsideActiveOverlay || isBlankTrigger) {
                document.removeEventListener('click', resetOutsideClickListener);

                headerOverlays.forEach(headerOverlay => {
                    if (!headerOverlay || !activeOverlay || !blankOverlay) return;

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

                    headerOverlay.style.opacity = '0';
                    headerOverlay.style.zIndex = '10';
                    blankOverlay.style.opacity = '0';
                });
                activeOverlay = null;
                textClickElsewhereAnimationIsServed = false;
            }
        }
    }



    headerOverlays.forEach(headerOverlay => {
        if (headerOverlay) {
            headerOverlay.style.opacity = '0';
            headerOverlay.classList.remove('DEV-DISABLE_VISIBILITY');
        }
    });

    if (!blankOverlay) return;

    blankOverlay.style.opacity = '0';
    blankOverlay.classList.remove('DEV-DISABLE_VISIBILITY');



    headerOverlaysTriggers.forEach(headerOverlayTrigger => {

        if (headerOverlayTrigger.includes("languages")) {
            return;
        }

        let headerOverlayTriggerElement: HTMLElement | null = document.getElementById("DESKTOP-HEADER_OVERLAY_TRIGGER-" + headerOverlayTrigger);

        if (!headerOverlayTriggerElement) return;

        headerOverlayTriggerElement.addEventListener('mouseenter', function(e: MouseEvent) {

            let target = e.target as HTMLElement;

            if (target.tagName === 'P' || target.tagName === 'IMG') {
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

            if (target.tagName === 'P' || target.tagName === 'IMG') {
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

        if (target.tagName === 'P' || target.tagName === 'IMG') {
            const triggerDiv = target.closest('div');
            if (triggerDiv) {
                target = triggerDiv;
            }
        }

        const targetId = target.id;

        if (targetId && targetId.startsWith("DESKTOP-HEADER_OVERLAY_TRIGGER-")) {
            const parts = targetId.split("-");
            let trigger = parts[2];
            if (trigger === "blank") {
                trigger = "languages";
            }
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
                    triggeredOverlay.style.opacity = '0';
                    triggeredOverlay.style.zIndex = '10';
                    blankOverlay.style.opacity = '0';
                    activeOverlay = null;

                    document.removeEventListener('click', resetOutsideClickListener);

                    return;
                }

                //  CLOSE IRRELEVANT OVERLAYS
                headerOverlays.forEach(headerOverlay => {
                    if (!headerOverlay) return;

                    if (headerOverlay !== triggeredOverlay) {
                        headerOverlay.style.opacity = '0';
                        headerOverlay.style.zIndex = '10';
                        blankOverlay.style.opacity = '0';
                    }
                });

                //  OPEN TRIGGERED OVERLAY
                triggeredOverlay.style.opacity = '1';
                triggeredOverlay.style.zIndex = '11';
                blankOverlay.style.opacity = '1';
                activeOverlay = triggeredOverlay;

                setTimeout(() => {
                    document.addEventListener('click', resetOutsideClickListener);
                }, 0);
            }
        }
    });
}

headerOverlaysInteractions();

