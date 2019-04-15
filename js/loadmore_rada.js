jQuery(function($){
  $(document).on('click', '.members_rada_more', function(event){
    var button = $(this),
        data = {
      'action': 'loadmore_rada',
      'query': loadmore_params_rada.posts, // that's how we get params from wp_localize_script() function
      'page' : loadmore_params_rada.current_page,
    };
 
    $.ajax({
      url: loadmore_params_rada.ajaxurl, // AJAX handler
      data: data,
      type: 'POST',
      beforeSend : function ( xhr ) {
        button.text('Загружаем...'); // change the button text, you can also add a preloader image
      },
      success : function( data ){
        if( data ) { 
          loadmore_params_rada.current_page++;
          console.log(data);
          $('#Rada .member-list .col-md-4:last-of-type').after(data);
          button.remove(); // if no data, remove the button as well
        }
      }
    });
  });
});