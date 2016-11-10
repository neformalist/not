'use strict';

(function($) {
  $.fn.phAnim = function( options ) {

    // Set default option
    var settings = $.extend({}, options),
    		label,
  			ph;
    
    // get label elem
    function getLabel(input) {
      return $(input).parent().find('label');
    }
    
    // generate an id
    function makeid() {
      var text = "";
      var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
      for( var i=0; i < 5; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));
      return text;
    }
    
    return this.each( function() {
			
      // check if the input has id or create one
      if( $(this).attr('id') == undefined ) {
        $(this).attr('id', makeid());
      }

      // check if elem has label or create one
      if( getLabel($(this)).length == 0 ) {
        
        // check if elem has placeholder
        if( $(this).attr('placeholder') != undefined ) {
          ph = $(this).attr('placeholder');
          $(this).attr('placeholder', '');
          // create a label with placeholder text
          $(this).parent().prepend('<label for='+ $(this).attr('id') +'>'+ ph +'</label>');
        }
      } else {
        
        // if elem has label remove placeholder
        $(this).attr('placeholder', '');
        // check label for attr or set it
        if(getLabel($(this)).attr('for') == undefined ) {
          getLabel($(this)).attr('for', $(this).attr('id'));
         
        }
      }

      $(this).on('focus', function() {
        label = getLabel($(this));
        label.addClass('active focusIn');
        if($(this).prop("tagName") === "TEXTAREA") $(this).addClass('textAreaHeight');
      }).on('focusout', function() {
        if( $(this).val() == '' ) {
          label.removeClass('active');
        }
        label.removeClass('focusIn');
        if($(this).prop("tagName") === "TEXTAREA") $(this).removeClass('textAreaHeight');;
      });
    });
  };
}(jQuery));

$(document).ready(function() {
	$('.custom-input input, textarea').phAnim();
});


