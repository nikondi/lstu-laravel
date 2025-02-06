import Swiper from "swiper";
import {Navigation, Pagination} from "swiper/modules";

function initBanners() {
  const main_banners = document.querySelector('.main_banners') as HTMLElement;
  if(!main_banners)
    return;
  new Swiper(main_banners, {
    modules: [Pagination],
    pagination: {
      el: main_banners.querySelector('.swiper-pagination') as HTMLElement,
      clickable: true,
    },
    loop: true,
    autoplay: {
      delay: 4000
    },
  });
}

function initAnnouncement() {
  const announcement = document.querySelector('.events') as HTMLElement;
  if(!announcement)
    return;
  new Swiper(announcement, {
    modules: [Pagination, Navigation],
    pagination: {
      el: announcement.querySelector('.swiper-pagination') as HTMLElement,
      clickable: true,
    },
    navigation: {
      nextEl: announcement.querySelector('.swiper-button-next') as HTMLElement,
      prevEl: announcement.querySelector('.swiper-button-prev') as HTMLElement
    },
    loop: true,
  });
}

function initFaks() {
  const faks = document.querySelector('.fak-slider') as HTMLElement;
  if(!faks)
    return;

  const media = window.matchMedia("(max-width: 767px)");

  let slider: Swiper = null;

  const controlSlider = () => {
    if(media.matches) {
      slider = new Swiper(faks, {
        modules: [Pagination],
        pagination: {
          el: faks.querySelector('.swiper-pagination') as HTMLElement,
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },
        loop: true,
      });
    } else if(slider) {
      slider.destroy();
    }
  }

  controlSlider();
  media.addEventListener('change', controlSlider);
}

export default function mainPage() {
  initBanners();
  initAnnouncement();
  initFaks();
}
