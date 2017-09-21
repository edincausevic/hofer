var images = new Array();

function preload() {
    for (i = 0; i < preload.arguments.length; i++) {
        images[i] = new Image();
        images[i].src = preload.arguments[i];
    }
}

preload('img/gal1-big.jpg', 'img/gal2-big.jpg', 'img/gal3-big.jpg', 'img/gal4-big.jpg', 
	    'img/gal5-big.jpg', 'img/gal6-big.jpg', 'img/offer1.jpg',
	    'img/offer2.jpg', 'img/offer3.jpg', 'img/offer4.jpg', 'img/offer5.jpg');