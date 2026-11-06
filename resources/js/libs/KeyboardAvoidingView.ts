export class KeyboardAvoidingView {
  private container: HTMLElement;
  private initialHeight: number = window.innerHeight;

  constructor(el: string | HTMLElement) {
    if (typeof el === 'string')
      el = document.querySelector<HTMLElement>(el);

    if (!el) {
      return;
    }
    this.container = el;
    this.initListeners();
  }

  private handleResize = (): void => {
    // visualViewport возвращает актуальную область видимости с учетом клавиатуры
    const currentHeight = window.visualViewport ? window.visualViewport.height : window.innerHeight;
    this.container.style.height = currentHeight + 'px';
  };

  private initListeners(): void {
    if (window.visualViewport) {
      // Событие resize срабатывает при открытии/закрытии клавиатуры
      window.visualViewport.addEventListener('resize', this.handleResize);
      window.visualViewport.addEventListener('scroll', this.handleResize);
    } else {
      // Fallback для старых браузеров
      window.addEventListener('resize', this.handleResize);
    }
  }

  // Очистка слушателей при необходимости (например, в SPA при размонтировании компонента)
  public destroy(): void {
    if (window.visualViewport) {
      window.visualViewport.removeEventListener('resize', this.handleResize);
      window.visualViewport.removeEventListener('scroll', this.handleResize);
    }
  }
}

