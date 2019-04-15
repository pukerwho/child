jQuery(function($){
  $(document).on('click', '.members_team_more', function(event){
    var button = $(this),
        data = {
      'action': 'loadmore_team',
      'query': loadmore_params_team.posts, // that's how we get params from wp_localize_script() function
      'page' : loadmore_params_team.current_page,
    };
 
    $.ajax({
      url: loadmore_params_team.ajaxurl, // AJAX handler
      data: data,
      type: 'POST',
      beforeSend : function ( xhr ) {
        button.text('Загружаем...'); // change the button text, you can also add a preloader image
      },
      success : function( data ){
        if( data ) { 
          button.text( 'Загрузить еще' ).prev().before(data); // insert new posts          
          loadmore_params_team.current_page++;
          console.log(data);
          $('#Team .member-list .col-md-4:last-of-type').after(data);
          if ( (loadmore_params_team.current_page - 1) == loadmore_params_team.max_page ) 
            button.remove(); // if last page, remove the button
 
          // you can also fire the "post-load" event here if you use a plugin that requires it
          // $( document.body ).trigger( 'post-load' );
        } else {
          button.remove(); // if no data, remove the button as well
        }
      }
    });
  });
});