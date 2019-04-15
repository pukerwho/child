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
          console.log(loadmore_params_team.total);
          console.log(data);
          $('#Team .member-list .col-md-4:last-of-type').after(data);
          button.remove();
        }
      }
    });
  });
});