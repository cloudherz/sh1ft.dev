function showHeaderOnHoverWhenHidden() {
    const header = document.getElementById("DESKTOP-header");
    const headerWrapper = document.getElementById("DESKTOP-header-wrapper");

    if (!headerWrapper || !header) {
        return;
    }

    header.addEventListener('mouseenter', function() {
        if (headerWrapper.style.opacity === '0'){
            headerWrapper.style.pointerEvents = 'unset';
            headerWrapper.style.opacity = '1';
        }
    });
}

showHeaderOnHoverWhenHidden();
document.addEventListener('turbo:load', showHeaderOnHoverWhenHidden);
document.addEventListener('turbo:render', showHeaderOnHoverWhenHidden);
