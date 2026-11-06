import './bootstrap';

import "swiper/css";

import {initNewsArchive} from "@/pages/news";
import {initAccordions} from "@/accordion";
import fakPage from "@/pages/fak";
import mainPage from "@/pages/main";
import initNewsSliders from "@/components/news-slider";
import {initPopups, lockBody, unlockBody} from "@/components/popup";
import servicePage from "@/pages/service";
import "swiper/css/bundle";
import {gallery} from "@/components";
import {Fancybox} from "@fancyapps/ui/dist/fancybox/";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import abitFuturePage from "@/pages/abit-future";
import {KeyboardAvoidingView} from "@/libs/KeyboardAvoidingView";

document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.tabs').forEach(function (wrapper) {
    const triggers = wrapper.querySelectorAll('.tabs-header > div');
    const content = wrapper.querySelectorAll('.tabs-contents > div');

    triggers.forEach(function (trigger, i) {
      trigger.addEventListener('click', function () {
        content.forEach(function (inner) {
          inner.classList.remove('active')
        })
        triggers.forEach(function (tr) {
          tr.classList.remove('active')
        })
        content[i].classList.add('active');
        trigger.classList.add('active');
      })
    })
  });

  initMenu();
  initSearch();

  // Страница факультета
  fakPage();
  // Страница факультета

  // Страница новостей
  initNewsArchive();

  // Аккордеоны
  initAccordions();

  // Главная страница
  mainPage();

  // Новости в слайдере
  initNewsSliders();

  initPopups();

  // Страница подразделения
  servicePage();

  // components
  gallery();

  initFancybox();

  abitFuturePage();
});

function initSearch() {
  const search_wrapper = document.querySelector<HTMLElement>('.search');

  if (!search_wrapper)
    return;

  const search_form = search_wrapper.querySelector<HTMLElement>('.search-form');

  function onKeyUp(e: KeyboardEvent) {
    if (e.key === 'Escape')
      closeSearch();
  }

  let kbHandler: KeyboardAvoidingView = null;

  function openSearch() {
    lockBody();
    kbHandler = new KeyboardAvoidingView(search_wrapper);
    document.addEventListener('keyup', onKeyUp);

    search_wrapper.classList.add('active');
    setTimeout(function () {
      search_wrapper.querySelector<HTMLInputElement>('.search-form input').focus();
    }, 200);
  }

  function closeSearch() {
    unlockBody();
    kbHandler.destroy();
    document.removeEventListener('keyup', onKeyUp);
    search_wrapper.classList.remove('active');
  }

  document.querySelectorAll('.search-open').forEach(function (trigger) {
    trigger.addEventListener('click', openSearch);
  });

  search_wrapper.addEventListener('click', closeSearch);
  search_form.addEventListener('click', (e) => e.stopPropagation());

}

function initMenu() {
  const side_menu = document.querySelector('.side_menu');
  side_menu.classList.add('init');

  function openSideMenu() {
    side_menu.classList.add('active')
    lockBody();
  }

  function closeSideMenu() {
    side_menu.classList.remove('active')
    side_menu.querySelectorAll('.side_menu__sub-open.active').forEach(function (b) {
      b.classList.remove('active');
    });
    unlockBody();
  }

  document.addEventListener('keyup', function (e) {
    if (e.key === 'Escape')
      closeSideMenu();
  })
  document.querySelector('.side_menu_burger').addEventListener('click', function () {
    if (side_menu.classList.contains('active'))
      closeSideMenu();
    else
      openSideMenu();
  });
  document.querySelectorAll('.side_menu_close').forEach(function (close) {
    close.addEventListener('click', closeSideMenu);
  });


  const open_buttons = side_menu.querySelectorAll('.side_menu__sub-open');
  const close_buttons = side_menu.querySelectorAll('.side_menu__sub-close');
  open_buttons.forEach(function (button) {
    button.addEventListener('click', function () {
      button.classList.add('active');
    });
  })
  close_buttons.forEach(function (button) {
    button.addEventListener('click', function () {
      button.closest('.has-submenu').querySelector('.side_menu__sub-open').classList.remove('active');
    });
  })
  side_menu.querySelectorAll('.side_menu__submenu').forEach(function (submenu) {
    submenu.addEventListener('click', function () {
      submenu.closest('.has-submenu').querySelector('.side_menu__sub-open').classList.remove('active');
    });
    submenu.querySelector('ul').addEventListener('click', function (e) {
      e.stopPropagation();
    })
  })
}

function initFancybox() {
  Fancybox.bind('[data-fancybox]');
}
