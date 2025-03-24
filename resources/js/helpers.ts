export function outsideClick(el: Element, callback: () => void, exclude: HTMLElement = null) {
  document.addEventListener('click', function(event) {
    if(el && !el.contains(event.target as Element) && event.target !== exclude)
      callback();
  }, true);
}

