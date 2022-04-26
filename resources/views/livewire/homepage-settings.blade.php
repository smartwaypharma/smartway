<div class="p-4">
  <h2 class="font-semibold">Homepage Settings</h2>
  <form wire:submit.prevent="save">
    <div class="my-3">
      <div wire:ignore>
        <label for="homepageArticles" class="block font-medium text-sm text-gray-700">Articles</label>
        <select id="homepageArticles"
                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                multiple="multiple">
          @if($data)
            @foreach($data as $item)
              <option value="{{$item['id']}}">{{$item['text']}}</option>
            @endforeach
          @endif
        </select>
      </div>
      @error('articles') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
    </div>

    <button
        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
        type="submit">Save
    </button>
  </form>
</div>

@push('styles')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
@endpush

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script>
    $(document).ready(function () {
      var moreArticles = '<?php echo json_encode($articles);?>'
      moreArticles = JSON.parse(moreArticles)

      $('#homepageArticles').select2({
        ajax: {
          transport: function (params, success, failure) {
            axios.post('/admin/post-search', params)
              .then(function (response) {
                success(response);
              })
              .catch(function (error) {
                console.log(error);
              });
          },
          processResults: function (data) {
            var processedArray = [];
            data.data.posts.forEach(function (item) {
              processedArray.push({id: item.id, text: item.title});
            });

            return {
              results: processedArray
            };
          }
        },
        minimumInputLength: 2,
        allowClear: true
      });
      $('#homepageArticles').val(moreArticles);
      $('#homepageArticles').trigger('change');

      $('#homepageArticles').on('change', function (e) {
        var data = $('#homepageArticles').select2("data");
        @this.set('data', data);
        var data = $('#homepageArticles').select2("val");
        @this.set('articles', data);
      });
    });
  </script>
@endpush
