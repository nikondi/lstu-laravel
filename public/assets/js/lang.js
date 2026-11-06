if (typeof 'initLangButton' == 'undefined') {
  function initLangButton() {
    const button = document.querySelector(".sidebar_button--language");
    const translateEl = document.getElementById('google_translate_element');
    if (!button || !translateEl)
      return;
    const select = translateEl.querySelector('.goog-te-combo');
    button.addEventListener('click', function () {
      const lang = this.dataset.lang;
      select.value = lang;
      if (lang == 'en') {
        this.dataset.lang = 'ru';
        this.innerText = 'RU';
      } else {
        this.dataset.lang = 'en';
        this.innerText = 'EN';
      }

    });

  }
}
/*    $(".sidebar_button--language").click(function(event) {
        console.log(this.dataset.lang, '123');
    });*/

$(function () {
  $(".lstu-lang").click(function (event) {
    event.preventDefault();
    var lang = $(this).attr("href");
    var path = "#google_translate_element .goog-te-combo";
    var opt = path + " option[value=\"" + lang + "\"]";
    if ($(opt).length) {
      $(path).val(lang);
      triggerHtmlEvent($(path).get(0), "change");
    }
    updLang(lang);
  });
  $('body').on('change', '#google_translate_element select.goog-te-combo', function () {
    //var language = google.translate.TranslateElement().e;
    var lang = $("#google_translate_element select.goog-te-combo option:selected").attr("value");
    updLang(lang);
  });


  getCookieLang();
});

if (typeof $ != 'undefined' && $("#mainbody").length > 0) {
  //window.setTimeout(getCookieLang, 1000);
  window.setInterval(getCookieLang, 1000);
}


function getCookieLang() {

  var lang = Cookies.get('googtrans');
  //console.log(Cookies.get('googtrans'));
  var defaultlang = $("#mainbody").attr("data-default-lng");
  if (typeof lang == 'undefined')
    lang = defaultlang;
  else {
    if (lang.substr(0, defaultlang.length + 2) == "/" + defaultlang + "/")
      lang = lang.substr(defaultlang.length + 2);
    else
      lang = defaultlang;
  }
  updLang(lang);
}

function updLang(lang) {

//    console.log(lang);
  var custom_lang = parseInt($("#mainbody").attr("data-lng-custom"), 10);
  var old_lang = $("#mainbody").attr("data-lng");
  if (old_lang != lang && custom_lang)
    window.setTimeout(reloadPage, 1000);
  if (old_lang != lang)
    $("#mainbody").attr("data-lng", lang);
}

function reloadPage() {
  location.reload(true);
}
