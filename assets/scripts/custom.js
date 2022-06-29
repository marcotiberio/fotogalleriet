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

// $(document).ready(function () {
//   var d = new Date()
//   var dayOfWeek = d.getDay()
//   var hour = d.getHours()

//   if (dayOfWeek === 6 || dayOfWeek === 0 || hour >= 11 || hour <= 17) {
//     $('.current-time--open').show()
//     $('.current-time--closed').hide()
//   } else {
//     $('.current-time--open').hide()
//     $('.current-time--closed').show()
//   }
// })

$(document).ready(function () {
  var start = new Date()
  var end = new Date()
  var time = new Date().getTime()
  var day = new Date().getDay()

  if (time > start.setHours(12) && time < end.setHours(17) && (day === 1)) {
    $('.current-time--open').hide()
    $('.current-time--closed').show()
  } else {
    $('.current-time--open').show()
    $('.current-time--closed').hide()
  }

  if (time > start.setHours(12) && time < end.setHours(17) && (day === 2)) {
    $('.current-time--open').hide()
    $('.current-time--closed').show()
  } else {
    $('.current-time--open').show()
    $('.current-time--closed').hide()
  }
})
