type AccordionElement = Partial<HTMLElement & {
  accordion: {
    open: () => void
    close: () => void
    toggle: () => void
    el: AccordionElement
    content: HTMLElement
    trigger: HTMLElement
  }
}>
export function accordion(element: AccordionElement, trigger: HTMLElement, content: HTMLElement) {
  if (!content || !trigger || !element)
    return;

  const setContentHeight = () => {
    content.style.overflow = 'hidden';
    content.style.maxHeight = content.scrollHeight+'px'
  };
  const resetStyles = () => {
    content.style.maxHeight = null;
    content.style.overflow = null;
  }
  const handleTransitionEnd = (e: TransitionEvent) => {
    if(!e || e.target !== content || e.propertyName !== 'max-height')
      return;
    resetStyles();
  };
  const open = () => {
    if(!element || element.classList.contains('opened'))
      return;

    setContentHeight();
    element.classList.add('opened');
    content.addEventListener('transitionend', handleTransitionEnd);
  };
  const close = () => {
    if(!element || !element.classList.contains('opened'))
      return;

    setContentHeight();
    content.removeEventListener('transitionend', handleTransitionEnd);
    setTimeout(function() {
      element.classList.remove('opened');
      resetStyles();
    });
  };
  const toggle = () => element.classList.contains('opened')?close():open();


  element.accordion = {
    open,
    close,
    toggle,
    trigger,
    content,
    el: element
  }

  return element.accordion;
}


export function initAccordions() {
  document.querySelectorAll('.accordion').forEach(function(elem) {
    const trigger = elem.querySelector('.accordion-trigger') as HTMLElement;
    const _accordion = accordion(elem, trigger, elem.querySelector('.accordion-content'));
    trigger.addEventListener('click', _accordion.toggle);
  });
}
