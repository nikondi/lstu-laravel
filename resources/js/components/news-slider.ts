import Swiper from "swiper";
import {Navigation} from "swiper/modules";

export default function initNewsSliders() {
  document.querySelectorAll('.news-slider').forEach((slider) => {
    const prev_button = slider.querySelector('.swiper-button-prev') as HTMLElement;
    const next_button = slider.querySelector('.swiper-button-next') as HTMLElement;

    new Swiper(slider as HTMLElement, {
      slidesPerView: 1,
      modules: [Navigation],
      spaceBetween: 20,
      navigation: {
        nextEl: next_button,
        prevEl: prev_button,
      },
      breakpoints: {
        1024: {
          slidesPerView: 3,
        },
        576: {
          slidesPerView: 2,
        },
      }
    })
  });
}
