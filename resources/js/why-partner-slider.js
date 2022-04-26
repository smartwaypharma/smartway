import Glide from '@glidejs/glide'

window.addEventListener('load', function () {
  new Glide('.why-partner-slider', {
    type: 'slider',
    perView: 3,
    breakpoints: {
      1250: {
        perView: 2.6
      },
      1050: {
        perView: 2
      },
      750: {
        perView: 1.5
      },
      550: {
        perView: 1.1
      },
    },
    gap: 20,
    draggable: true
  }).mount()
});
