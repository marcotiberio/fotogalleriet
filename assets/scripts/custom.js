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
  var dayOfWeek = d.getDay()
  var hour = d.getHours()

  if (dayOfWeek === 6 || dayOfWeek === 0 || hour >= 9 || hour <= 17) {
    $('.current-time--open').show()
    $('.current-time--closed').hide()
  } else {
    $('.current-time--open').hide()
    $('.current-time--closed').show()
  }
})
