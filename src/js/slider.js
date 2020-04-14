import Flickity from 'flickity'

try {
    document.querySelectorAll('[slider]').forEach(item => {
        new Flickity(item, {
            wrapAround: true,
            autoPlay: true
        })
    })
} catch{ }
