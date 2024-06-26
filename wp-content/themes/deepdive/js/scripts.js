(function($){
    jQuery(document).ready(function () {
      console.log('Loaded ...');
      //   careerasAnimation();
    });
    accordeon();

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

})(jQuery)