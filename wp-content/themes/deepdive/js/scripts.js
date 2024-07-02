(function($){
    jQuery(document).ready(function () {
      console.log('Loaded ...');
      //   careerasAnimation();
    });
    accordeon();
    mobileNavigation();

    function accordeon() {
      jQuery('.accordeon-item').on('click', function () {
        if (jQuery(this).hasClass('active')) {
          jQuery('.content', this).css({ maxHeight: 0 });
        } else {
          var scrollHeight = jQuery('.content', this).prop('scrollHeight');
          jQuery('.content', this).css({ maxHeight: scrollHeight + 24 });
        }

        jQuery(this).toggleClass('active');
      });
    }

    function mobileNavigation(){
      jQuery('.burger-btn').on('click', function(){
        jQuery('.mobile-navigation').toggleClass('active');
        jQuery(this).toggleClass('active');
        jQuery('body').toggleClass('hidden');
      })
    }

})(jQuery)