import {outsideClick} from "@/helpers";
import {accordion} from "@/accordion";
import Swiper from "swiper";

export default function fakPage() {
  initFakPartners();
  initMenu();
  initDirections();
}

function initMenu() {
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

function initDirections() {
  document.querySelectorAll('.direction').forEach(function(direction) {
    const button = direction.querySelector('.direction__heading') as HTMLElement;
    const content = direction.querySelector('.direction__content') as HTMLElement;

    if(!button || !content)
      return true;

    const _accordion = accordion(direction, button, content);
    button.addEventListener('click', _accordion.toggle);
  });
}

function initFakPartners() {
  const elem = document.querySelector('.fak-partners-slider') as HTMLElement;
  if(!elem)
    return;

  new Swiper(elem, {
    slidesPerView: 'auto',
    spaceBetween: 20
  });
}

