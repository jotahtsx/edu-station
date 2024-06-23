$(function () {

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('form[name="login"]').submit(function(event) {
    event.preventDefault();

    const form = $(this);
    const action = form.attr('action');
    const email = form.find('input[name="email"]').val();
    const password = form.find('input[name="password"]').val();

    $.post(action, { email: email, password: password }, function(response) {
      console.log(response);

      if(response.message) {
        ajaxMessage(response.message, 7);
      }

      if(response.redirect) {
        window.location.href = response.redirect;
      }

    }, 'json');
  });

  // AJAX RESPONSE
  var ajaxResponseBaseTime = 3;

  function ajaxMessage(message, time) {
      // Remove a duplicidade de cada mensagem ao fazer cada requisição
      $(".ajax_response .message").remove();

      var ajaxMessage = $(message);

      ajaxMessage.append("<div class='message_time'></div>");
      ajaxMessage.find(".message_time").animate({ "width": "100%" }, time * 1000, function () {
          $(this).parents(".message").fadeOut(200, function() {
              $(this).remove();
          });
      });

      // Remove mensagem ao clicar em qualquer lugar da página
      $(document).on('click', function() {
          ajaxMessage.fadeOut(200, function() {
              $(this).remove();
          });
      });

      $(".ajax_response").append(ajaxMessage);
  }

  $(".ajax_response .message").each(function (e, m) {
      ajaxMessage(m, ajaxResponseBaseTime += 1);
  });
});
