import $ from 'jquery'

$(document).ready(function () {
  // var headerHeight = $('.mainHeader').outerHeight() // Target your header navigation here
  $('a').click(function (e) {
    var targetHref = $(this).attr('href')

    targetHref = targetHref.substring(targetHref.indexOf('#'))

    $('html, body').animate({
      scrollTop: $(targetHref).offset().top - 111 // Add it to the calculation here
    }, 500)

    e.preventDefault()
  })
})

$(document).ready(function () {
  var d = new Date()
  if (d.getHours() >= 7 && d.getHours() <= 15) {
    $('.current-time--open').hide()
    $('.current-time--closed').show()
  } else {
    $('.current-time--open').show()
    $('.current-time--closed').hide()
  }
})
