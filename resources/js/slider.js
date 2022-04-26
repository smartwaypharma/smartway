import Glide from '@glidejs/glide'

window.addEventListener('load', function () {
  new Glide('.glide', {
    type: 'slider',
    focusAt: 'center',
    perView: 1.6,
    breakpoints: {
      640: {
        perView: 1
      }
    },
    gap: 40,
    draggable: true
  }).mount()
});
