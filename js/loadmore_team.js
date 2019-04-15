jQuery(function($){
  $(document).on('click', '.members_team_more', function(event){
    var button = $(this),
        data = {
      'action': 'loadmore_team',
      'query': loadmore_params_team.posts,
      'page' : loadmore_params_team.current_page,
    };
 
    $.ajax({
      url: loadmore_params_team.ajaxurl,
      data: data,
      type: 'POST',
      beforeSend : function ( xhr ) {
        button.text('Загружаем...');
      },
      success : function( data ){
        if( data ) { 
          loadmore_params_team.current_page++;
          $('#Team .member-list .col-md-4:last-of-type').after(data);
          button.remove();
        }
      }
    });
  });
});