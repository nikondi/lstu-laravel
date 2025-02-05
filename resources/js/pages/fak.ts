import {outsideClick} from "@/helpers";

export function initFakMenu() {
  const openMenu = (submenu: Element) => submenu.classList.add('opened');
  const closeMenu = (submenu: Element) => submenu.classList.remove('opened');
  document.querySelectorAll('.fak-submenu').forEach(function(submenu) {
    const parent = submenu.parentNode;
    const button = parent.querySelector('button');
    if(!button)
      return true;
    button.addEventListener('click', function() {
      if(submenu.classList.contains('opened'))
        closeMenu(submenu);
      else
        openMenu(submenu);
    });
    outsideClick(submenu, () => closeMenu(submenu), button)
  })
}

export function initFakDirections() {
  document.querySelectorAll('.direction').forEach(function(direction) {
    const button = direction.querySelector('.direction__heading');
    const content = direction.querySelector('.direction__content') as HTMLElement;

    if(!button || !content)
      return true;

    const setContentHeight = () => {
      content.style.overflow = 'hidden';
      content.style.maxHeight = content.scrollHeight+'px'
    };
    const resetStyles = () => {
      content.style.maxHeight = null;
      content.style.overflow = null;
    }
    const handleTransitionEnd = (e: TransitionEvent) => {
      if(!e || e.target !== content || e.propertyName !== 'max-height')
        return;
      resetStyles();
    };
    const open = () => {
      setContentHeight();
      direction.classList.add('opened');
      content.addEventListener('transitionend', handleTransitionEnd);
    };
    const close = () => {
      setContentHeight();
      content.removeEventListener('transitionend', handleTransitionEnd);
      setTimeout(function() {
        direction.classList.remove('opened');
        resetStyles();
      });
    };

    button.addEventListener('click', function() {
      if(direction.classList.contains('opened'))
        close();
      else
        open();
    });
  });
}
