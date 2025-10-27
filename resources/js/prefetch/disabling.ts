function targetedDisablePrefetch() {
    document.querySelectorAll('.DEV-NO_PREFETCH').forEach(element => {
        element.setAttribute('data-turbo-prefetch', 'false');
    });
}

targetedDisablePrefetch();
document.addEventListener('turbo:load', targetedDisablePrefetch);
document.addEventListener('turbo:render', targetedDisablePrefetch);
