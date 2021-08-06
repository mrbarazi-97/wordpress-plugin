(function ($) {
  $('#baraz_rating').bind('rated', function () {
    $(this).rateit('readonly', true);

    var form = {
      action: 'r_rate_baraz',
      rid: $(this).data('rid'),
      rating: $(this).rateit('value'),
    };

    $.post(baraz_obj.ajax_url, form, function (data) {});
  });
})(jQuery);
