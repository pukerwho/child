jQuery(function($){
  $(document).on('click', '.members_rada_more', function(event){
    var button = $(this),
        data = {
      'action': 'loadmore_rada',
      'query': loadmore_params_rada.posts,
      'page' : loadmore_params_rada.current_page,
    };
 
    $.ajax({
      url: loadmore_params_rada.ajaxurl,
      data: data,
      type: 'POST',
      beforeSend : function ( xhr ) {
        button.text('Загружаем...');
      },
      success : function( data ){
        if( data ) { 
          loadmore_params_rada.current_page++;
          $('#Rada .member-list .col-md-4:last-of-type').after(data);
          button.remove();
        }
      }
    });
  });
});