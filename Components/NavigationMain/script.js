import $ from 'jquery'

class NavigationMain extends window.HTMLElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.resolveElements()
    this.bindFunctions()
    this.bindEvents()
  }

  resolveElements () {
    this.$window = $(window)
    this.$container = $('.container', this)
    this.$nav = $('.menu-item', this)
    this.$logologo = $('.logologo-image', this)
    this.$language = $('.language-switcher', this)
  }

  bindFunctions () {
    this.offsetNav = this.offsetNav.bind(this)
  }

  bindEvents () {
    this.$window.on('scroll', this.offsetNav)
  }

  offsetNav (e) {
    const $scroll = this.$window.scrollTop()

    if ($scroll > 0) {
      this.$nav.slideUp()
      this.$logologo.slideUp()
      this.$language.hide()
      this.$container.css('paddingBottom', '5px')
    } else {
      this.$nav.slideDown()
      this.$logologo.slideDown()
      this.$language.show()
      this.$container.css('paddingBottom', '20px')
    }
  }
}

window.customElements.define('flynt-navigation-main', NavigationMain, { extends: 'nav' })
