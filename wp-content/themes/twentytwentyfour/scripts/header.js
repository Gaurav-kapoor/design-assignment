
let tabs = $('#tabs-two-column .tabs p');

  
  $(tabs).hover(function(){
    let ind = $(this).index();
    //$(this).addClass('show').siblings().removeClass('show');
    $('#tabs-two-column .tabs-wrapper .show-tabs').eq(ind).addClass('show').siblings().removeClass('show');
  })



let a = 0;
$(window).scroll(function() {

  let oTop = $('#success-story').offset().top - window.innerHeight;
  
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('#success-story .counter').each(function() {
        let $this = $(this);
        jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
            duration: 8000,
            easing: 'swing',
            step: function () {
                $this.text(Math.ceil(this.Counter));
            }
        });
    });
    a = 1;
  }
});



