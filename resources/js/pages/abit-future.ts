export default function abitFuturePage() {
  initTabs();
}

function initTabs() {
  const wrapper = document.querySelector('.abit-future-tabs');
  if(!wrapper)
    return;

  const triggers = wrapper.querySelectorAll('.abit-future-tabs-trigger');
  const tabs = wrapper.querySelectorAll('.abit-future-tab');

  triggers.forEach(function (trigger, i) {
    trigger.addEventListener('click', function () {
      if(!tabs[i])
        return;

      tabs.forEach(function(tab, tab_i) {
        if(i == tab_i)
          tab.classList.add('active')
        else
          tab.classList.remove('active');
      });
      triggers.forEach(function (trig, trig_i) {
        if(trig_i == i)
          trig.classList.add('active');
        else
          trig.classList.remove('active');
      })
    });
  })
}
