import Swiper from "swiper";
import {Pagination} from "swiper/modules";

export default function servicePage() {
  const el = document.querySelector(".service-staff") as HTMLElement;
  if (!el)
    return;

  const paginationEl = el.querySelector(".swiper-pagination") as HTMLElement;

  let swiper: Swiper = null;
  const initSwiper = () => {
    swiper = new Swiper(el, {
      slidesPerView: 1,
      spaceBetween: 15,
      modules: [Pagination],
      pagination: {
        enabled: true,
        el: paginationEl,
        clickable: true, dynamicBullets: true
      },
      breakpoints: {
        576: {
          slidesPerView: 2
        }
      }
    })
  };
  const destroySwiper = () => swiper == null ? void 0 : swiper.destroy();

  const media = window.matchMedia("(max-width: 1100px)");
  const checkMedia = () => {
    if(media.matches)
     initSwiper();
    else
      destroySwiper();
  };

  checkMedia();
  media.addEventListener("change", checkMedia)
}
