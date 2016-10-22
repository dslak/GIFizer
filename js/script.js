
function readURL(parent,input) {

var n=0;

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(parent.target).parent().css('background-image','url('+e.target.result+')');
      
	    $('.upload-box').each(function( index ) {
	      if($( this ).css('background-image').substr(-16,14)!='img/upload.svg'){n++;}
	    });
	    
	    if(n>3){$('#divAction').show();}
      
        }
        reader.readAsDataURL(input.files[0]);
    }
    
}


$('.upload-box').find("input").on('change',
    function(evt) {
      evt.stopPropagation();
      evt.preventDefault();
      readURL(evt,this);
    }
);



$('#delay').on('change', function(){
    $('#delayValue').val($('#delay').val());
});

$('#delayValue').on('keyup', function(){
    $('#delay').val($('#delayValue').val());
});