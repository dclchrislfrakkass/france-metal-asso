jQuery(document).ready(function($) {

    $('#vote_metal_display').on('change', function() {

        if(this.value==3){
            $('#vote_metal_display_pages').css('display', 'block');
        }
        else{
            $('#vote_metal_display_pages').css('display', 'none');
        }

    });
 
});