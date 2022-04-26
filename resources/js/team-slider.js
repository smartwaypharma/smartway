import Glide from '@glidejs/glide'

if (window.innerWidth <= 1024) {
    $('#teamModal').addClass('hidden')

    $('.js-team-modal-open').on('click', function () {
        $('#' + $(this).data('modal')).removeClass('hidden')
    })

    $('.js-modal-close').on('click', function () {
        $(this).closest('.js-team-modal').addClass('hidden')
    })
} else {
    var init = false

    $('.js-team-modal-open').on('click', function () {
        $('#teamModal').removeClass('hidden')

        if (!init) {
            window.slider = new Glide('.team-slider', {
                type: 'slider',
                focusAt: 'center',
                perView: 1.15,
                breakpoints: {
                    640: {
                        perView: 1
                    }
                },
                gap: 40,
                draggable: true
            }).mount()

            init = true
        }

        window.slider.go(`=${$(this).data('slide')}`)
    })

    $('#teamModalClose').on('click', function () {
        $('#teamModal').addClass('hidden')
    })
}
