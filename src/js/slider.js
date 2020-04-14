import Flickity from 'flickity'

try {
    new Flickity('.slider ul', {
        wrapAround: true,
        autoPlay: true
    })

    var slider = document.querySelector('.spare ul');
    new Flickity(slider, {
        wrapAround: true,
        autoPlay: true
    });
} catch{ }
