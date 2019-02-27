$(function () {
  //### Security Token ###
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

  //### Events Handling ###
  $('.selectpicker').selectpicker();

  //### Events Handling ###
  $('#btnSubmit').on('click', function (e){
      // public\vendors\glint\js\main.js, line 338
      var sLoader = $('.submit-loader');

      /*
      $.post( "/rsvp/update", {
          "data": $(form).serialize()
        }, function(rx) {
          if(rx){
            console.log(rx)
          }
      });
      */

      /*
      $.ajax({
          type: "POST",
          url: "rsvp/update",
          data: "yesy",
          beforeSend: function() {

              sLoader.slideDown("slow");

          },
          success: function(msg) {

              // Message was sent
              if (msg == 'OK') {
                  sLoader.slideUp("slow");
                  $('.message-warning').fadeOut();
                  $('#contactForm').fadeOut();
                  $('.message-success').fadeIn();
              }
              // There was an error
              else {
                  sLoader.slideUp("slow");
                  $('.message-warning').html(msg);
                  $('.message-warning').slideDown("slow");
              }

          },
          error: function() {

              sLoader.slideUp("slow");
              $('.message-warning').html("Something went wrong. Please try again.");
              $('.message-warning').slideDown("slow");

          }

      });
      */
  });

  // view report
  $('#dtReport').DataTable( {
      ajax: {
           type: 'GET',
           url: '/report/view',
           dataSrc: function (data) {
               return data;
           }
       },
       bPaginate: true,
       destroy: true,
       bFilter: true,
       columns: [
           { title: 'Guest Name', data: 'name' },
           { title: 'Email', data: 'email' },
           { title: 'Contact No', data: 'contact' },
           { title: 'No of Pax', data: 'pax' },
           { title: 'Baby Chair', data: 'babyChair' },
           { title: 'Halal Food', data: 'halalFood' },
           { title: 'Message/ Wishes', data: 'message' },
       ],
  });

});
