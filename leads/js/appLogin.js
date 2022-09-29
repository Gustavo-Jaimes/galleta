

// jQuery Scripts

$(function () {
  $('form button[type="submit"]').on('click', function () {
    $('.hide-show span').text('Show').addClass('show');
    $('.hide-show').parent().find('input[name="password"]').attr('type', 'password');
  });
});

// Script for Ripple Effect
$("html").on("click", ".btn", function (evt) {
  var btn = $(evt.currentTarget);
  var x = evt.pageX - btn.offset().left;
  var y = evt.pageY - btn.offset().top;

  $("<span/>").appendTo(btn).css({
    left: x,
    top: y
  });
});

// Script for focus underline inputs
$('input').focus(function() {
  $(this).parents('.form-group').addClass('focused');
});

$('input').blur(function() {
  var inputValue = $(this).val();
  if (inputValue == "") {
      $(this).removeClass('filled');
      $(this).parents('.form-group').removeClass('focused');
  } else {
      $(this).addClass('filled');
  }
})


