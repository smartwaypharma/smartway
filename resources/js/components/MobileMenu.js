export default class MobileMenu {
    constructor (selectors, classes) {
        this.openTrigger = document.querySelector(selectors.openTrigger)
        this.closeTrigger = document.querySelector(selectors.closeTrigger)
        this.menuBlock = document.querySelector(selectors.menu)
        this.contactLink = document.querySelectorAll(selectors.contactLink)
        this.classes = classes
    }

    open () {
        document.body.classList.add('overflow-y-hidden')
        this.menuBlock.classList.remove(...this.classes)
    }

    close () {
        document.body.classList.remove('overflow-y-hidden')
        this.menuBlock.classList.add(...this.classes)
    }

    hiddenAllDropdownMenu() {
        this.menuBlock.querySelectorAll('.dropdown').forEach((dropdown) => {
            dropdown.querySelector('span').classList.remove('border-persian-green', 'border-b', 'border-b-5px')
            dropdown.querySelector('.dropdown-menu').classList.add('hidden')
        });
    }

    init () {
        this.openTrigger.addEventListener('click', () => {
            this.open()
        })

        this.closeTrigger.addEventListener('click', () => {
            this.close()
        })

        this.contactLink.forEach((link) => {
            link.addEventListener('click', () => {
                this.closeTrigger.click()
                window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' })
            })
        })

        this.menuBlock.querySelectorAll('.dropdown').forEach((dropdown) => {
            dropdown.addEventListener('click', () => {
                var isHidden = dropdown.querySelector('.dropdown-menu').classList.contains('hidden')

                this.hiddenAllDropdownMenu()

                if (isHidden) {
                    dropdown.querySelector('span').classList.add('border-persian-green', 'border-b', 'border-b-5px')
                    dropdown.querySelector('.dropdown-menu').classList.remove('hidden')
                } else {
                    dropdown.querySelector('span').classList.remove('border-persian-green', 'border-b', 'border-b-5px')
                    dropdown.querySelector('.dropdown-menu').classList.contains('hidden')
                }
            })
        })
    }
}
