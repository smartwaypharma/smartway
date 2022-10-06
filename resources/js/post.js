$('#postButton').on('click', function () {
  $('#formModal').removeClass('hidden')
})
$('#postButtonMb').on('click', function () {
  $('#formModal').removeClass('hidden')
})

$('.js-modal-close').on('click', function () {
  $(this).closest('.js-modal').addClass('hidden')
})

$('#postSubmit').on('click', function (e) {
  e.preventDefault()

  var form = $('#postForm')

  $('.js-errors').addClass('hidden')

  axios.post(form.attr('action'), form.serialize())
    .then(function (response) {
      $('#formModal').addClass('hidden')
      $('#messageModal').removeClass('hidden')
    })
    .catch(function (error) {
      $('.js-errors').removeClass('hidden')
      Object.entries(error.response.data.errors).forEach(entry => {
        const [key, value] = entry;
        $('.js-error-' + key).text(value)
      });
    });
})

$('.js-modal-close').on('click', function () {
  window.location.reload()
})


