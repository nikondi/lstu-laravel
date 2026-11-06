function getScrollbarWidth(): number {
  const outer = document.createElement('div');
  outer.style.visibility = 'hidden';
  outer.style.overflow = 'scroll';
  // @ts-ignore
  outer.style.msOverflowStyle = 'scrollbar';
  document.body.appendChild(outer);

  const inner = document.createElement('div');
  outer.appendChild(inner);

  const scrollbarWidth = outer.offsetWidth - inner.offsetWidth;
  outer.parentNode?.removeChild(outer);

  return scrollbarWidth;
}

const scrollbar_width = getScrollbarWidth();

let body_scrollTop = 0;
let is_locked_body = false;

export function lockBody() {
  if (is_locked_body) return;

  // Сохраняем текущий скролл кроссбраузерно
  body_scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  document.body.style.marginRight = `${scrollbar_width}px`;
  document.body.style.top = `-${body_scrollTop}px`;
  document.body.classList.add('ohidden');

  is_locked_body = true;
}

export function unlockBody() {
  if (!is_locked_body) return;

  document.body.classList.remove('ohidden');
  document.body.style.top = '';
  document.body.style.marginRight = '';

  // Переносим восстановление позиции в следующий тик рендеринга
  requestAnimationFrame(() => {
    window.scrollTo({
      top: body_scrollTop,
      behavior: 'instant' // Отключаем плавную прокрутку принудительно
    });
  });

  is_locked_body = false;
}

window.onbeforeunload = function () {
  unlockBody();
};


export function initPopup(popup: HTMLElement) {
  if (popup.classList.contains('inited'))
    return;

  const close = () => {
    popup.classList.remove('active');
    unlockBody();
  };
  popup.querySelectorAll('.popup-close, .popup-background').forEach(function (el) {
    el.addEventListener('click', function () {
      close();
    });
  })

  popup.classList.add('inited');
}

export function openPopup(el: Element) {
  lockBody();
  el.classList.add('active');
}

export function initPopups() {
  document.querySelectorAll<HTMLElement>('.popup').forEach((popup) => {
    initPopup(popup);
  });
}
