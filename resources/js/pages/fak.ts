import {outsideClick} from "@/helpers";
import {accordion} from "@/accordion";
import Swiper from "swiper";
import {Navigation} from "swiper/modules";
import {openPopup} from "@/components/popup";

export default function fakPage() {
  initPartners();
  initMenu();
  initDirections();
  initGraduates();

  initStaff();
}

function initMenu() {
  const openMenu = (submenu: Element) => submenu.classList.add('opened');
  const closeMenu = (submenu: Element) => submenu.classList.remove('opened');
  document.querySelectorAll('.fak-submenu').forEach(function (submenu) {
    const parent = submenu.parentNode;
    const button = parent.querySelector('button');
    if (!button)
      return true;
    button.addEventListener('click', function () {
      if (submenu.classList.contains('opened'))
        closeMenu(submenu);
      else
        openMenu(submenu);
    });
    outsideClick(submenu, () => closeMenu(submenu), button)
  })
}

function initDirections() {
  document.querySelectorAll('.direction').forEach(function (direction) {
    const button = direction.querySelector('.direction__heading') as HTMLElement;
    const content = direction.querySelector('.direction__content') as HTMLElement;

    if (!button || !content)
      return true;

    const _accordion = accordion(direction, button, content);
    button.addEventListener('click', _accordion.toggle);
  });
}

function initPartners() {
  const elem = document.querySelector('.fak-partners-slider') as HTMLElement;
  if (!elem)
    return;

  new Swiper(elem, {
    slidesPerView: 'auto',
    spaceBetween: 20
  });
}

function initGraduates() {
  const elem = document.querySelector('.fak-graduates-slider') as HTMLElement;
  if (!elem)
    return;

  const prev_button = elem.querySelector('.swiper-button-prev') as HTMLElement;
  const next_button = elem.querySelector('.swiper-button-next') as HTMLElement;

  new Swiper(elem, {
    modules: [Navigation],
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
      nextEl: next_button,
      prevEl: prev_button,
    },
    breakpoints: {
      1024: {
        slidesPerView: 5,
      },
      768: {
        slidesPerView: 4
      },
      576: {
        slidesPerView: 3
      }
    }
  });
}

interface IEmployee {
  image: string
  position: string
  name: string
  description: string
}

function initStaff() {
  const popup = document.getElementById('employee-popup');
  const popup_content_wrapper = document.getElementById('employee-popup-content');
  if (popup) {
    document.querySelectorAll<HTMLButtonElement>('.employee-card__button').forEach(function (button) {
      button.addEventListener('click', function () {
        const employee = JSON.parse(button.dataset.employee) as IEmployee;
        if (!employee)
          return;

        const image_html = employee.image.trim() ? `<div class="employee-popup__image"><img src="${employee.image.trim()}" alt=""></div>` : '';
        const html = `<div class="employee-popup__head">
                    ${image_html}
                    <div class="employee-popup__info">
                        <div class="employee-popup__position">${employee.position}</div>
                        <div class="employee-popup__name">${employee.name}</div>
                    </div>
                </div>
                <div class="employee-popup__description">${employee.description}</div>`;


        popup_content_wrapper.innerHTML = html;
        openPopup(popup);
      });
    });
  }

  document.querySelectorAll<HTMLElement>('.staff-slider').forEach((container) => {
    new Swiper(container.querySelector<HTMLElement>('.swiper'), {
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 15,
      modules: [Navigation],
      navigation: {
        prevEl: container.querySelector<HTMLElement>('.swiper-button-prev'),
        nextEl: container.querySelector<HTMLElement>('.swiper-button-next'),
      },
      breakpoints: {
        1401: {
          slidesPerView: 6,
          slidesPerGroup: 6,
        },
        1201: {
          slidesPerView: 5,
          slidesPerGroup: 5,
        },
        992: {
          slidesPerView: 4,
          slidesPerGroup: 4,
        },
        768: {
          slidesPerView: 3,
          slidesPerGroup: 3,
        },
        576: {
          slidesPerView: 2,
          slidesPerGroup: 2,
        }
      }
    });
  })
}
