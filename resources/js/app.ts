import './bootstrap';

import "swiper/css";

import {initNewsArchive} from "@/pages/news";
import {initAccordions} from "@/accordion";
import fakPage from "@/pages/fak";
import mainPage from "@/pages/main";

document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.tabs').forEach(function(wrapper) {
    const triggers = wrapper.querySelectorAll('.tabs-header > div');
    const content = wrapper.querySelectorAll('.tabs-contents > div');

    triggers.forEach(function(trigger, i) {
      trigger.addEventListener('click', function() {
        content.forEach(function(inner) {
          inner.classList.remove('active')
        })
        triggers.forEach(function(tr) {
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
});


function getScrollbarWidth() {

  // Creating invisible container
  const outer = document.createElement('div');
  outer.style.visibility = 'hidden';
  outer.style.overflow = 'scroll'; // forcing scrollbar to appear
  // @ts-ignore
  outer.style.msOverflowStyle = 'scrollbar'; // needed for WinJS apps
  document.body.appendChild(outer);

  // Creating inner element and placing it in the container
  const inner = document.createElement('div');
  outer.appendChild(inner);

  // Calculating difference between container's full width and the child width
  const scrollbarWidth = (outer.offsetWidth-inner.offsetWidth);

  // Removing temporary elements from the DOM
  outer.parentNode.removeChild(outer);

  return scrollbarWidth;

}

const scrollbar_width = getScrollbarWidth();

let body_scrollTop = 0;
let is_locked_body = false;

function lockBody() {
  if(is_locked_body)
    return;

  document.body.style.marginRight = scrollbar_width+'px';
  body_scrollTop = document.documentElement.scrollTop;
  document.body.style.top = -(body_scrollTop)+'px';
  document.body.classList.add('ohidden');

  is_locked_body = true;
}

function unlockBody() {
  if(!is_locked_body)
    return;

  document.body.classList.remove('ohidden');
  document.documentElement.scrollTo(0, body_scrollTop);

  document.body.style.top = null;
  document.body.style.marginRight = null;
  is_locked_body = false;
}

window.onbeforeunload = function() {
  unlockBody();
};

function initSearch() {
  const search_wrapper = document.querySelector('.search');

  function openSearch() {
    lockBody();
    search_wrapper.classList.add('active');
    setTimeout(function() {
      (search_wrapper.querySelector('.search-form input') as HTMLInputElement).focus();
    }, 200);
  }

  function closeSearch() {
    unlockBody();
    search_wrapper.classList.remove('active');
  }

  document.addEventListener('keyup', function(e) {
    if(e.key === 'Escape')
      closeSearch();
  });
  document.querySelectorAll('.search-open').forEach(function(trigger) {
    trigger.addEventListener('click', openSearch);
  });
  document.querySelectorAll('.search-close').forEach(function(trigger) {
    trigger.addEventListener('click', closeSearch);
  });
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
    side_menu.querySelectorAll('.side_menu__sub-open.active').forEach(function(b) {
      b.classList.remove('active');
    });
    unlockBody();
  }

  document.addEventListener('keyup', function(e) {
    if(e.key === 'Escape')
      closeSideMenu();
  })
  document.querySelector('.side_menu_burger').addEventListener('click', function() {
    if(side_menu.classList.contains('active'))
      closeSideMenu();
    else
      openSideMenu();
  });
  document.querySelectorAll('.side_menu_close').forEach(function(close) {
    close.addEventListener('click', closeSideMenu);
  });


  const open_buttons = side_menu.querySelectorAll('.side_menu__sub-open');
  const close_buttons = side_menu.querySelectorAll('.side_menu__sub-close');
  open_buttons.forEach(function(button) {
    button.addEventListener('click', function() {
      button.classList.add('active');
    });
  })
  close_buttons.forEach(function(button) {
    button.addEventListener('click', function() {
      button.closest('.has-submenu').querySelector('.side_menu__sub-open').classList.remove('active');
    });
  })
  side_menu.querySelectorAll('.side_menu__submenu').forEach(function(submenu) {
    submenu.addEventListener('click', function() {
      submenu.closest('.has-submenu').querySelector('.side_menu__sub-open').classList.remove('active');
    });
    submenu.querySelector('ul').addEventListener('click', function(e) {
      e.stopPropagation();
    })
  })
}

