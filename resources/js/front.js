require('./bootstrap');
import MobileMenu from "./components/MobileMenu";

const menu = new MobileMenu(
    {
        openTrigger: '#mobile-menu-open',
        closeTrigger: '#mobile-menu-close',
        menu: '#mobile-menu',
        contactLink: '.contact-link'
    },
    ['offscreen']
)

menu.init()

var kittingButton = document.getElementById('kittingButton')

if (kittingButton) {
    kittingButton.addEventListener('click', function () {
        if (kittingButton.querySelector('img').classList.contains('rotate-180')) {
            kittingButton.querySelector('img').classList.remove('rotate-180')
            kittingButton.querySelector('span').textContent = 'Read Less'
            document.getElementById('kitting').classList.remove('lg:mb-40', 'mb-20')
            document.getElementById('kittingContent').classList.remove('hidden')
        } else {
            kittingButton.querySelector('img').classList.add('rotate-180')
            kittingButton.querySelector('span').textContent = 'Read more'
            document.getElementById('kitting').classList.add('lg:mb-40', 'mb-20')
            document.getElementById('kittingContent').classList.add('hidden')
        }
    })
}

$('.js-article-button').on('click', function () {
    if ($(this).children('img').hasClass('rotate-180')) {
        $(this).children('img').removeClass('rotate-180')
        $(this).children('span').text('Read Less')
        $(this).closest('.js-article').children('.js-article-content').removeClass('hidden')
    } else {
        $(this).children('img').addClass('rotate-180')
        $(this).children('span').text('Read more')
        $(this).closest('.js-article').children('.js-article-content').addClass('hidden')
    }
})
