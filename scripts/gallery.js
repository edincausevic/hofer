
function xhr(callback) {

  var data = [
    {
        id        : 1,
        smallImg  :"img/gal1.jpg",
        largeImg  :"img/gal1-big.jpg",
        text      :"",
        imageNumber: 1
    },
    {
        id        : 2,
        smallImg  :"img/gal2.jpg",
        largeImg  :"img/gal2-big.jpg",
        text      :"",
        imageNumber: 2
    },
    {
        id        : 3,
        smallImg  :"img/gal3.jpg",
        largeImg  :"img/gal3-big.jpg",
        text      :"",
        imageNumber: 3
    },
    {
        id        : 4,
        smallImg  :"img/gal4.jpg",
        largeImg  :"img/gal4-big.jpg",
        text      :"",
        imageNumber: 4
    },
    {
        id        : 5,
        smallImg  :"img/gal5.jpg",
        largeImg  :"img/gal5-big.jpg",
        text      :"",
        imageNumber: 5
    },
    {
        id        : 6,
        smallImg  :"img/gal6.jpg",
        largeImg  :"img/gal6-big.jpg",
        text      :"",
        imageNumber: 6
    }
]


callback(data);
}


// load images in gallery section
function loadImages(data) {

    // select gallery container
    var gallery = $('.img-gallery');

    // create image li items with json info and append it to gallery
    $.each(data, function(name, obj) {

        // create li item
        var li = '<li>' +
                    '<img src="' +obj.smallImg+ '" id="' +obj.id+ '" alt="Image"/>' +
                    '<div><i class="fa fa-plus-circle" aria-hidden="true"></i></div>' +
                 '</li>';
        gallery.append(li);
    });
}

xhr(loadImages);


// gallery functions
function gallery(data) {

    var galleryContainer = $('#show-image');

    // show image on click
    $(document).on('click', '.img-gallery li', function(){

        var imgContainer = $('#big-image');
        var id = parseInt( $(this).find('img').attr('id') );

        $.each(data, function(name, obj){
            if ( obj.id === id ) {
                $('#big-image').attr('src', obj.largeImg);
                $('#image-info').html(obj.text);
                $('#image-number').html(obj.imageNumber + '/6');
            }
        });

        $('#show-image').fadeIn(300);
    });

    // hide gallery with click on dark background
    galleryContainer.on('click', function(e) {
        if (e.target === this ) {
            $(this).fadeOut(300);
        }
    });
    // hide gallery with click on x icon
    $('#close-image').on('click', function(){ galleryContainer.fadeOut(300)});

    // change image on right
    $('#right').on('click', function(){
        // save number of image
        var id = parseInt($(this).closest('#image-container')
                                 .find('#image-number')
                                 .html().slice(0,1));
        var counter = id;
        if ( counter == 6 ) counter = 0;
        counter++;

        changeImage(counter)
    });

    // change image on right
    $('#left').on('click', function(){
        // save number of image
        var id = parseInt($(this).closest('#image-container')
                          .find('#image-number')
                          .html().slice(0,1));
        var counter = id;
        if ( counter == 1 ) counter = 7;
        counter--;

        changeImage(counter)
    });

    function changeImage(counter) {
        $.each(data, function(name, obj){
            if ( obj.id === counter ) {
                $('#big-image').attr('src', obj.largeImg);
                $('#image-info').html(obj.text);
                $('#image-number').html(obj.id + '/6');
            }
        });
    }
}
xhr(gallery);


// ACUTUELLES GALLERY
$(document).on('click', ".actuelles-image", function(){

    var $this = $(this);
    var $gal = $('.aktuelles-gal');
    var $galImg = $('.akt-image-big');

    $gal.fadeIn(300);
    var src = $this.attr('src');
    $galImg.attr('src', src);

    $gal.on('click', function(e){ $(this).fadeOut(300); });
});