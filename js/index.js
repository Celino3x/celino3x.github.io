function ativaScrollSuave(selector){
  $(selector).click(function(event){
    event.preventDefault();
    var target = $(this).attr('href');

    $('html, body').animate({
      scrollTop: $(target).offset().top
    }, 1000)
  });
}

ativaScrollSuave('a[href*=index]');
ativaScrollSuave('a[href*=sobre]');
ativaScrollSuave('a[href*=servicos]');
ativaScrollSuave('a[href*=contato]');
