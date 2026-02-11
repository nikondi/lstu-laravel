import Swiper from "swiper";
import {Navigation} from "swiper/modules";

export default function abitFuturePage() {
  initTabs();
  initDates();
}

function initTabs() {
  const wrappers = document.querySelectorAll('.abit-future-tabs');
  wrappers.forEach(function (wrapper) {
    const triggers = wrapper.querySelectorAll('.abit-future-tabs-trigger');
    const tabs = wrapper.querySelectorAll('.abit-future-tab');

    triggers.forEach(function (trigger, i) {
      trigger.addEventListener('click', function () {
        if (!tabs[i])
          return;

        wrappers.forEach(function (wrp) {
          const trgrs = wrp.querySelectorAll('.abit-future-tabs-trigger');
          const tbs = wrp.querySelectorAll('.abit-future-tab');
          tbs.forEach(function (tab, tab_i) {
            if (i == tab_i)
              tab.classList.add('active')
            else
              tab.classList.remove('active');
          });
          trgrs.forEach(function (trig, trig_i) {
            if (trig_i == i)
              trig.classList.add('active');
            else
              trig.classList.remove('active');
          })
        })
      });
    });
  });
}

function initDates() {
  const sliderEl = document.querySelector<HTMLElement>('.abit-future-dates-slider');
  if (!sliderEl)
    return;

  new Swiper(sliderEl, {
    modules: [Navigation],
    spaceBetween: 16,
    slidesPerView: 1,
    navigation: {
      prevEl: sliderEl.querySelector<HTMLElement>('.swiper-button-prev'),
      nextEl: sliderEl.querySelector<HTMLElement>('.swiper-button-next'),
    },
    breakpoints: {
      576: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 3,
      },
      1100: {
        slidesPerView: 5
      }
    }
  })
}
