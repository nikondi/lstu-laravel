function initFrontBar() {
    const outsideClick = (el, callback, exclude = null) => {
        document.addEventListener('click', function(event) {
            if(el && !el.contains(event.target) && event.target !== exclude)
                callback();
        }, true);
    }
    document.querySelectorAll('.frontbar-dropdown').forEach(function(dropdown) {
        const button = dropdown.querySelector('button');
        const list = dropdown.querySelector('.frontbar-dropdown-list');
        if(!button || !list)
            return true;

        const openMenu = () => dropdown.classList.add('active');
        const closeMenu = () => dropdown.classList.remove('active');

        button.addEventListener('click', function() {
            if(dropdown.classList.contains('active'))
                closeMenu();
            else
                openMenu();
        });
        outsideClick(dropdown, () => closeMenu(), button)
    })
}

document.addEventListener('DOMContentLoaded', function() {
    initFrontBar();
});
