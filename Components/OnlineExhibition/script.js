import $ from 'jquery'
import 'core-js/es/number'
// import fullpage from 'fullpage.js'

class OnlineExhibition extends window.HTMLDivElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.props = this.getInitialProps()
    this.resolveElements()
  }

  getInitialProps () {
    let data = {}
    try {
      data = JSON.parse($('script[type="application/json"]', this).text())
    } catch (e) {}
    return data
  }

  resolveElements () {
    this.$slider = $('[data-slider]', this)
    this.$buttonNext = $('[data-slider-button="next"]', this)
    this.$buttonPrev = $('[data-slider-button="prev"]', this)
  }

  connectedCallback () {
    this.initSlider()
  }

  initSlider () {
    const { options } = this.props
    const config = {
      navigation: {
        nextEl: this.$buttonNext.get(0),
        prevEl: this.$buttonPrev.get(0)
      },
      a11y: options.a11y
    }
    if (options.autoplay && options.autoplaySpeed) {
      config.autoplay = {
        delay: options.autoplaySpeed
      }
    }
  }
}

window.customElements.define('flynt-online-exhibition', OnlineExhibition, { extends: 'div' })
