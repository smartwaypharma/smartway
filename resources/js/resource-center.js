$('.js-modal-open').on('click', function () {
  $('#filterModal').removeClass('hidden')
})

$('.js-modal-close').on('click', function () {
  $('#filterModal').addClass('hidden')
})

$('.js-filter-checkbox').on('click', function () {
  var filterButton = $(this).closest('.js-filter-button')
  var id = filterButton.data('id')
  var loadData = filterButton.hasClass('filter-button-desktop')
  filterButton = $('.js-filter-button[data-id="' + id + '"]')

  if ($(this).prop('checked')) {
    filterButton.find('input').prop('checked', true)
    filterButton.addClass('selected')
  } else {
    filterButton.find('input').prop('checked', false)
    filterButton.removeClass('selected')
  }

  if (loadData) {
    getData(true)
  }

  checkCountSelectedFilters()
})

$('.js-clear-filters').on('click', function () {
  if ($('.js-filter-button.selected').length !== 0) {
    $('.js-filter-button').removeClass('selected')
    $('.js-filter-button').find('input').prop('checked', false)

    checkCountSelectedFilters()

    getData(true)
  }
})

$('.js-apply-filter-button').on('click', function (e) {
  e.preventDefault()

  getData(true)

  $('#filterModal').addClass('hidden')
})

$('#loadMoreButton').on('click', function () {
  getData(false)
})

function getData(clearData) {
  const formData = new FormData()
  formData.append('per_page', $('#loadMoreButton').data('per-page'))
  formData.append('page', clearData ? 1 : $('#loadMoreButton').data('page'))
  var filters = [];
  var categories = [];

  $('#filterForm .js-filter-checkbox:checked').each(function () {
    filters.push(this.value)
  });

  formData.append('filters', filters);
  
  $('#filterForm .js-category-filter-checkbox:checked').each(function () {
    categories.push(this.value);
  });
  formData.append('categories', categories);

  axios.post('/who-we-are/media-and-resource-centre/filter', formData)
    .then(function (response) {
      if (response.data.current_page !== response.data.last_page) {
        $('#loadMoreButton').data('per-page', response.data.posts.per_page)
        $('#loadMoreButton').data('page', response.data.posts.current_page + 1)
        $('#loadMoreButton').parent().removeClass('hidden')
      } else {
        $('#loadMoreButton').parent().addClass('hidden')
      }

      if (clearData) {
        $('.js-posts').empty()
      }

      $('.js-posts').append(response.data.html)
    })
    .catch(function (error) {
      console.log(error)
    });
}

function checkCountSelectedFilters() {
  if ($('.js-filter-button.selected').length === 0) {
    $('.js-clear-filters').addClass('opacity-50')
  } else {
    $('.js-clear-filters').removeClass('opacity-50')
  }
}

// catgory filter
$('.js-category-modal-open').on('click', function () {
  $('#categoryFilterModal').removeClass('hidden')
})

$('.js-category-modal-close').on('click', function () {
  $('#categoryFilterModal').addClass('hidden')
})


$('.js-category-filter-checkbox').on('click',function() {
  var filterButton = $(this).closest('.js-category-filter-button');
  var id = filterButton.data('id');
  var loadData = filterButton.hasClass('filter-button-desktop');
  filterButton = $('.js-category-filter-button[data-id="' + id + '"]');

  if ($(this).prop('checked')) {
    filterButton.find('input').prop('checked', true)
    filterButton.addClass('selected')
  } else {
    filterButton.find('input').prop('checked', false)
    filterButton.removeClass('selected')
  }

  if (loadData) {
    getData(true)
  }
  
  checkCountSelectedCatagoryFilters();
});

$('.js-clear-category-filters').on('click', function () {
  if ($('.js-category-filter-button.selected').length !== 0) {
    $('.js-category-filter-button').removeClass('selected')
    $('.js-category-filter-button').find('input').prop('checked', false)

    checkCountSelectedCatagoryFilters();

    getData(true)
  }
})

$('.js-category-apply-filter-button').on('click', function (e) {
  e.preventDefault();

  getData(true);

  $('#categoryFilterModal').addClass('hidden');
})

function checkCountSelectedCatagoryFilters() {
  if ($('.js-category-filter-button.selected').length === 0) {
    $('.js-clear-category-filters').addClass('opacity-50')
  } else {
    $('.js-clear-category-filters').removeClass('opacity-50')
  }
}