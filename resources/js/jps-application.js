const Uppy = require('@uppy/core')
const DragDrop = require('@uppy/drag-drop')
const ProgressBar = require('@uppy/progress-bar')
const XHRUpload = require('@uppy/xhr-upload')

const csrf = document.querySelector('meta[name="csrf-token"]').content
const files = []
const contactForm = document.getElementById('contactForm')

const onUploadSuccess = (elForUploadedFiles) =>
(file, response) => {
  const url = '/storage/' + response.uploadURL
  const fileName = file.name

  files.push(url)

  const li = document.createElement('li')
  const a = document.createElement('a')

  a.href = url
  a.target = '_blank'
  a.appendChild(document.createTextNode(fileName))

  li.appendChild(a)

  document.querySelector(elForUploadedFiles).appendChild(li)

  document.querySelector('#cv').value = response.uploadURL

  document.querySelector('.js-error-message[data-field=\'cv\']').classList.add('hidden')
}

const uppyOne = new Uppy({
      debug: true,
      autoProceed: true,
      restrictions: {
        maxNumberOfFiles: 1,
      },
      onBeforeUpload: (files) => checkUpload(files)
})
uppyOne
    .use(DragDrop, {target: '.uppy-files'})
    .use(ProgressBar, {target: '.uppy-progress-bar', hideAfterFinish: true})
    .use(XHRUpload, {
      limit: 1,
      endpoint: '/who-we-are/jps-upload-file',
      formData: true,
      fieldName: 'file',
      headers: {
        'X-CSRF-TOKEN': csrf
      },
    })
    .on('upload-success', onUploadSuccess('.uploaded-files ol'))

function checkUpload(files) {
  var uploaderError = document.querySelectorAll('.uploader')
  for (let i = 0; i < uploaderError.length; i++) {
    uploaderError[i].remove()
  }

  const maxFileSize = 5242880, //bytes
      extensions = [
        'pdf',
        'doc',
        'docx',
      ]

  var error = document.querySelector('.js-error-message[data-field=\'cv\']')

  for (key in files) {
    if (maxFileSize < files[key].size) {
      error.innerHTML = 'Max. file size: 5 MB'
      error.classList.remove('hidden')

      return Promise.reject()
    }
  }

  for (key in files) {
    if (extensions.indexOf(files[key].extension) === -1) {
      error.innerHTML = 'The cv must be a file of type: .pdf, .doc or .docx'
      error.classList.remove('hidden')

      return Promise.reject()
    }
  }
}

contactForm.addEventListener('submit', function (e) {
  e.preventDefault()
  var errorMsg = document.querySelectorAll('.js-error-message')
  var fields = document.querySelectorAll('.js-field')

  for (let i = 0; i < errorMsg.length; i++) {
    errorMsg[i].classList.add('hidden')
  }

  for (let i = 0; i < fields.length; i++) {
    fields[i].classList.remove('border-red-500')
    fields[i].classList.add('border-dove-gray')
  }

  axios.post(contactForm.action, new FormData(contactForm))
      .then((response) => {
    document.querySelector('.js-success-modal').classList.remove('hidden')
})
    .catch((error) => {
  console.log(error)
  console.log(error.response.data.errors)
  var errors = error.response.data.errors

  for (const [key, value] of Object.entries(errors)) {
  var err = document.querySelector(".js-error-message[data-field='" + key + "']")
  var input = document.querySelector("[name='" + key + "']")

  if (key !== 'policy') {
    err.innerHTML = value
  }

  err.classList.remove('hidden')

  if (input) {
    input.classList.add('border-red-500')
    input.classList.remove('border-dove-gray')
  }
}
})
})

$('.js-modal-close').on('click', function () {
  window.location.reload()
})
