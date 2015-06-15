$(document).ready(function(){

    $('.user_display').html('Prem Rajah');

    $('#values_list li').hover(function(){
     $('#values_list li').removeClass('active');
        var item = $(this);
          item.addClass('active');
          $('#user_title').html(item.attr('data-title'));
          $('#user_value').html(item.attr('data-value'));
          
          if(item.attr('data-caps')){
            $('#user_value').css({'text-transform': 'lowercase'});
          } else {
            $('#user_value').css({'text-transform': 'capitalize'});
          }
    });

    

    /* SpillHover Gallery */
    
    $(function() {
      $('.demo').sliphover({
          
          height: '100%'

      });
    })





});





