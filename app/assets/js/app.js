


jQuery.noConflict();
(function( $ ) {
  $(function() {



$( '.js-filter' ).on( 'click', function() {
  
  var $color = $(this).attr('data-color');
  
  if ( $color == 'all' ) {
    $( '.js-filterable' ).removeClass( 'is-hidden' );    
  } else {
    $( '.js-filterable' ).addClass( 'is-hidden' );
    $( '.js-filterable[data-color=' + $color + ']' ).removeClass( 'is-hidden' );
  }
  
});



    // More code using $ as alias to jQuery
  });
})(jQuery);

jQuery(document).ready(function(){
    jQuery('.tab-heading-01').click(function(event){
        //remove all pre-existing active classes
        jQuery('.active-tab').removeClass('active-tab');

        //add the active class to the link we clicked
        jQuery(this).addClass('active-tab');

        //Load the content
        //e.g.
        //load the page that the link was pointing to
        //$('#content').load($(this).find(a).attr('href'));      

        event.preventDefault();
    });
});

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

console.log("It is working up to this point.");