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
    this.$nav = $('.menu-item', this)
    this.$logologo = $('.logologo-image', this)
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
    } else {
      this.$nav.slideDown()
      this.$logologo.slideDown()
    }
  }
}

window.customElements.define('flynt-navigation-main', NavigationMain, { extends: 'nav' })
