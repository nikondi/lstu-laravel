function initBanners() {
  const main_banners = document.querySelector('.main_banners');
  if(!main_banners)
    return;
  new Swiper(main_banners, {
    pagination: {
      el: main_banners.querySelector('.swiper-pagination'),
      clickable: true,
    },
    loop: true,
    autoplay: {
      delay: 4000
    },
  });
}

function initAnnouncement() {
  const announcement = document.querySelector('.events');
  if(!announcement)
    return;
  new Swiper(announcement, {
    pagination: {
      el: announcement.querySelector('.swiper-pagination'),
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    loop: true,
  });
}

function initFaks() {
  const faks = document.querySelector('.fak-slider');
  if(!faks)
    return;

  const media = window.matchMedia("(max-width: 767px)");

  let slider = null;

  const controlSlider = () => {
    if(media.matches) {
      slider = new Swiper(faks, {
        pagination: {
          el: faks.querySelector('.swiper-pagination'),
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },
        loop: true,
      });
    } else if(slider) {
      console.log(slider);
      slider.destroy();
    }
  }

  controlSlider();
  media.addEventListener('change', controlSlider);

}

document.addEventListener('DOMContentLoaded', function() {
  initBanners();
  initAnnouncement();
  initFaks();
});
