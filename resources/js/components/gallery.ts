import Swiper from "swiper";
import {Navigation, Pagination} from "swiper/modules";

export default function gallery() {
  document.querySelectorAll('.gallery').forEach((el) => {
    new Swiper(el as HTMLElement, {
      modules: [Pagination, Navigation],
      pagination: {
        el: el.querySelector('.swiper-pagination') as HTMLElement,
        clickable: true,
      },
      navigation: {
        nextEl: el.querySelector('.swiper-button-next') as HTMLElement,
        prevEl: el.querySelector('.swiper-button-prev') as HTMLElement
      },
      loop: true,
    });

  });
}
