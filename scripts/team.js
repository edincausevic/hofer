

$('.team-box').on('click', function(e){
    
    if ( $('.person-info').is(':hidden') ) {

        var info = $(this).find('.person-info');
        var allInfo = $('.person-info');
        
        allInfo.hide();
        info.fadeIn(300);
    }
    
    // hide all info divs by click on section(background)
    $('section').on('click', function(e){
        if ( e.target == this ) { 
            if (allInfo.is(':visible')) {
                e.stopPropagation();
                allInfo.hide();
            }
            
        }
    });
});

// donwload cv
$('#lebenslauf').on('click', function(e){
    

    if ( $('.person-info').is(':visible') ) { 
       
        setTimeout(function(){
            $('.person-info').hide(300);
        },500);
    }

    $('.hofer-tras-back').fadeIn(300);
    
});

$('.hofer-tras-back, .diploma-big-trans').on('click', function(e){

    if ( e.target == this ) {
        $(this).fadeOut(300);
    }
});

$('#close-cv').on('click', function(){ $('.hofer-tras-back').fadeOut(300)});


$('.diploma').on('click', function(){

    $('.hofer-tras-back').fadeOut(300);
    $('.diploma-big-trans').fadeIn(300);
});


$('#close-cv-big').on('click', function(){ $('.diploma-big-trans').fadeOut(300); });

