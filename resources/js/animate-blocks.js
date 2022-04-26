import Glide from '@glidejs/glide'

window.addEventListener('load', function () {
    if (window.screen.width <= 1024) {
        new Glide('.blocks-slider', {
            type: 'slider',
            focusAt: 'center',
            perView: 1.2,
            gap: 20,
            draggable: true
        }).mount()
    }
});
