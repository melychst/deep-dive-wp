(function($){
    jQuery(document).ready(function () {
      console.log('Loaded ...');
      //   careerasAnimation();
    });
    accordeon();
    mobileNavigation();
    termTabs();

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

    function termTabs(){
      jQuery('[data-tab-name-id]').on('click', function(){
        var tabId = jQuery(this).data('tab-name-id');
        jQuery('[data-tab-name-id]').removeClass('active');
        jQuery(this).addClass('active');
        console.log(tabId);

        jQuery('[data-tab-contant-id]').removeClass('active');
        jQuery('[data-tab-contant-id='+ tabId +']').addClass('active');

      });
    }
})(jQuery)