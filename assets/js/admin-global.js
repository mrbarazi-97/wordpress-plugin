(function ($) {
  $(document).on(
    'click',
    '#r-baraz-pending-notice .notice-dismiss',
    function (e) {
      e.preventDefault();

      $.post(ajaxurl, {
        action: 'r_dismiss_pending_baraz_notice',
      });
    }
  );
})(jQuery);
