export function initNewsArchive() {
  const wrapper = document.querySelector('.news-archives');
  const head = wrapper?.querySelector('.news-archives__head');
  head?.addEventListener('click', function() {
    if(wrapper.classList.contains('active'))
      wrapper.classList.remove('active')
    else
      wrapper.classList.add('active')
  });
}
