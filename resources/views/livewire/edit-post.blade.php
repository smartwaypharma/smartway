<div>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Edit Post
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
        <form wire:submit.prevent="save">
          <div class="my-3">
            <label for="postTitle" class="block font-medium text-sm text-gray-700">Title</label>
            <input type="text" wire:model="model.title" wire:change="slugify"
                   class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                   id="postTitle">
            @error('model.title') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
          </div>

          <div class="my-3">
            <label for="postSlug" class="block font-medium text-sm text-gray-700">Slug</label>
            <input type="text" wire:model="model.slug"
                   class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full "
                   id="postSlug">
            @error('model.slug') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
          </div>

          <div class="my-3">
            <label for="category" class="block font-medium text-sm text-gray-700">Category</label>
            <select wire:model="model.category_id"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full "
                    id="category">
              <option></option>
              @foreach($categories as $category)
                <option value="{{$category->id}}">{{ $category->name }}</option>
              @endforeach
            </select>
            @error('model.category_id') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
          </div>

          <div class="my-3">
            <div wire:ignore>
              <label for="tags" class="block font-medium text-sm text-gray-700">Tags</label>
              <select id="tags"
                      class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                      multiple="multiple">
                @foreach ($filters as $tag)
                  <option value="{{$tag->id}}">{{ $tag->name }}</option>
                @endforeach
              </select>
            </div>
            @error('tags') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
          </div>

          <div class="my-3">
            <label for="heroImageForDesktop" class="block font-medium text-sm text-gray-700">Hero image for
              desktop</label>
            <input type="file" wire:model="heroImageForDesktop"
                   class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full "
                   name="heroImageForDesktop"
                   id="heroImageForDesktop">
            @error('heroImageForDesktop') <span
                class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
            <div>
              <small class="form-text text-muted">Accepted formats: png, gif, bmp, svg, jpg, jpeg, webp<br>
                Max file size: 5Mb</small>
            </div>

            @if ($model->hero_image_for_desktop || $heroImageForDesktop)
              <div class="mt-3 w-1/2">
                <h4>Preview:</h4>
                @if ($model->hero_image_for_desktop && !$heroImageForDesktop)
                  <img src="{{ Illuminate\Support\Facades\Storage::url($model->hero_image_for_desktop) }}">
                @else
                  <img src="{{ $heroImageForDesktop->temporaryUrl() }}">
                @endif
              </div>
            @endif
          </div>

          <div class="my-3">
            <label for="heroImageForMobile" class="block font-medium text-sm text-gray-700">Hero image for
              mobile</label>
            <input type="file" wire:model="heroImageForMobile"
                   class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full "
                   name="heroImageForMobile"
                   id="heroImageForMobile">
            @error('heroImageForMobile') <span
                class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
            <div>
              <small class="form-text text-muted">Accepted formats: png, gif, bmp, svg, jpg, jpeg, webp<br>
                Max file size: 5Mb</small>
            </div>

            @if ($model->hero_image_for_mobile || $heroImageForMobile)
              <div class="mt-3 w-1/2">
                <h4>Preview:</h4>
                @if ($model->hero_image_for_mobile && !$heroImageForMobile)
                  <img src="{{ Illuminate\Support\Facades\Storage::url($model->hero_image_for_mobile) }}">
                @else
                  <img src="{{ $heroImageForMobile->temporaryUrl() }}">
                @endif
              </div>
            @endif
          </div>

          <div class="my-3">
            <div wire:ignore>
              <label class="block font-medium text-sm text-gray-700">Post body</label>
              <textarea class="form-control" id="post_body"
                         wire:model="post_body" name="post_body">{{$post_body}}</textarea>
            </div>
            @error('post_body') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
          </div>

          <div class="my-3">
            <label for="pdf" class="block font-medium text-sm text-gray-700">SmartNote PDF</label>
            <input type="file" wire:model="pdf"
                   class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full "
                   name="pdf"
                   id="pdf">
            @error('pdf') <span
                class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
            <div>
              <small class="form-text text-muted">Accepted formats: pdf<br>
                Max file size: 2Mb</small>
            </div>
          </div>

          <div class="my-3">
            <div wire:ignore>
              <label class="block font-medium text-sm text-gray-700">Text under PDF</label>
              <textarea class="form-control" id="text-under-pdf"
                        wire:model="text_under_pdf" name="text_under_pdf">{{$text_under_pdf}}</textarea>
            </div>
            @error('text_under_pdf') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
          </div>

          <div class="my-3">
            <label for="postTitle" class="block font-medium text-sm text-gray-700">Webinar Link</label>
            <input type="text" wire:model="model.webinar_link"
                   class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                   id="postTitle">
            @error('model.webinar_link') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
          </div>

          <div class="my-6 flex">
            <div class="w-1/2 mr-2">
              <div class="my-3">
                <label for="firstTeamMemberImage" class="block font-medium text-sm text-gray-700">Team member
                  image</label>
                <input type="file" wire:model="firstTeamMemberImage"
                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full "
                       name="firstTeamMemberImage"
                       id="firstTeamMemberImage">
                @error('firstTeamMemberImage') <span
                    class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
                <div>
                  <small class="form-text text-muted">Accepted formats: png, gif, bmp, svg, jpg, jpeg, webp<br>
                    Max file size: 5Mb</small>
                </div>

                @if ($model->first_team_member_image || $firstTeamMemberImage)
                  <div class="mt-3 w-1/2">
                    <h4>Preview:</h4>
                    <button id="setFirstTeamMemberImageNull" class="d-none" wire:click.prevent="setFirstTeamMemberImageNull"></button>
                    @if ($model->first_team_member_image && !$firstTeamMemberImage)
                      <span class="image-area pip">
                        <img src="{{ Illuminate\Support\Facades\Storage::url($model->first_team_member_image) }}">
                        <span class="firstTeamRemove remove-image" style="display: inline;">&#215;</span>
                      </span>
                    @else
                      <span class="image-area pip">
                        <img src="{{ $firstTeamMemberImage->temporaryUrl() }}">
                        <span  class="firstTeamRemove remove-image" style="display: inline;">&#215;</span>
                      </span>
                    @endif
                  </div>
                @endif
              </div>
              <div class="my-3">
                <label for="first_team_member_name" class="block font-medium text-sm text-gray-700">Team member
                  name</label>
                <input type="text" wire:model="model.first_team_member_name"
                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                       id="first_team_member_name">
                @error('model.first_team_member_name') <span
                    class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
              </div>
              <div class="my-3">
                <label for="first_team_member_position" class="block font-medium text-sm text-gray-700">Team member
                  position</label>
                <input type="text" wire:model="model.first_team_member_position"
                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                       id="first_team_member_position">
                @error('model.first_team_member_position') <span
                    class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
              </div>
              <div class="my-3">
                  <label class="block font-medium text-sm text-gray-700">Team member text</label>
                  <textarea wire:model="model.first_team_member_text"
                            class="form-control w-full"
                            id="first-team-member-text"></textarea>
                @error('model.first_team_member_text') <span
                    class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
              </div>
            </div>
            <div class="w-1/2 ml-2">
              <div class="my-3">
                <label for="secondTeamMemberImage" class="block font-medium text-sm text-gray-700">Team member
                  image</label>
                <input type="file" wire:model="secondTeamMemberImage"
                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full "
                       name="secondTeamMemberImage"
                       id="secondTeamMemberImage">
                @error('secondTeamMemberImage') <span
                    class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
                <div>
                  <small class="form-text text-muted">Accepted formats: png, gif, bmp, svg, jpg, jpeg, webp<br>
                    Max file size: 5Mb</small>
                </div>

                @if ($model->second_team_member_image || $secondTeamMemberImage)
                  <div class="mt-3 w-1/2">
                    <h4>Preview:</h4>
                    <button id="setSecondTeamMemberImageNull" class="d-none" wire:click.prevent="setSecondTeamMemberImageNull"></button>
                    @if ($model->second_team_member_image && !$secondTeamMemberImage)
                      <span class="image-area pip">
                        <img src="{{ Illuminate\Support\Facades\Storage::url($model->second_team_member_image) }}">
                        <span class="secondTeamRemove remove-image" style="display: inline;">&#215;</span>
                      </span>
                    @else
                      <span class="image-area pip">
                        <img src="{{ $secondTeamMemberImage->temporaryUrl() }}">
                        <span class="secondTeamRemove remove-image" style="display: inline;">&#215;</span>
                      </span>
                    @endif
                  </div>
                @endif
              </div>
              <div class="my-3">
                <label for="second_team_member_name" class="block font-medium text-sm text-gray-700">Team member
                  name</label>
                <input type="text" wire:model="model.second_team_member_name"
                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                       id="second_team_member_name">
                @error('model.second_team_member_name') <span
                    class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
              </div>
              <div class="my-3">
                <label for="second_team_member_position" class="block font-medium text-sm text-gray-700">Team member
                  position</label>
                <input type="text" wire:model="model.second_team_member_position"
                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                       id="second_team_member_position">
                @error('model.second_team_member_position') <span
                    class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
              </div>
              <div class="my-3">
                <label class="block font-medium text-sm text-gray-700">Team member text</label>
                <textarea wire:model="model.second_team_member_text"
                          class="form-control w-full"
                          id="second-team-member-text"></textarea>
                @error('model.second_team_member_text') <span
                    class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
              </div>
            </div>
          </div>
          <div class="my-3">
            <label class="cursor-pointer"><input type="checkbox" wire:model="model.contactus_popup"
                                                 class="border-gray-300 cursor-pointer"
                                                 id="contactUsPopup" value="1"> Do you want to capture contact details for this post?</label>
            @error('model.contactus_popup') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
          </div>
            <div class="my-3">
                <label for="buttonTitle" class="block font-medium text-sm text-gray-700">Button Title</label>
                <input type="text" wire:model="model.buttonTitle"
                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                       id="buttonTitle">
                @error('model.buttonTitle') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
            </div>
          <div class="my-3">
            <div wire:ignore>
              <label for="moreArticles" class="block font-medium text-sm text-gray-700">More articles</label>
              <select id="moreArticles"
                      class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                      multiple="multiple">
                @if($articlesData)
                  @foreach($articlesData as $item)
                    <option value="{{$item['id']}}">{{$item['text']}}</option>
                  @endforeach
                @endif
              </select>
            </div>
            @error('moreArticles') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
          </div>
            <div class="my-3">
                <label for="metaTitle" class="block font-medium text-sm text-gray-700">Meta Title</label>
                <input type="text" wire:model="model.metaTitle"
                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                       id="metaTitle">
                @error('model.metaTitle') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
            </div>
            <div class="my-3">
                <label for="metaDescription" class="block font-medium text-sm text-gray-700">Meta Description</label>
                <input type="text" wire:model="model.metaDescription"
                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                       id="metaDescription">
                @error('model.metaDescription') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
            </div>
            <div class="my-3">
                <label for="metaKeyword" class="block font-medium text-sm text-gray-700">Meta Keywords</label>
                <input type="text" wire:model="model.metaKeyword"
                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                       id="metaKeyword">
                @error('model.metaKeyword') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
            </div>

          <a class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition"
             href="{{ route('admin.post') }}">Cancel</a>
          <button
              class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
              type="submit">Save
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

@push('styles')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
  <script>
  const editor = CKEDITOR.replace('post_body');
  editor.on('change', function(event){
    console.log(event.editor.getData())
            @this.set('post_body', event.editor.getData());
  })

  const editorPdf = CKEDITOR.replace('text_under_pdf');
  editorPdf.on('change', function(event){
    console.log(event.editor.getData())
            @this.set('text_under_pdf', event.editor.getData());
  })

   /* ClassicEditor.create(document.getElementById("post-body"))
      .then((editor) => {
        editor.model.document.on("change:data", (e, data) => {
        @this.set('model.post_body', editor.getData())
        });
      })
      .catch((error) => {
        console.error(error);
      });
*/
   /* ClassicEditor.create(document.getElementById("text-under-pdf"))
      .then((editor) => {
        editor.model.document.on("change:data", (e, data) => {
        @this.set('model.text_under_pdf', editor.getData())
        });
      })
      .catch((error) => {
        console.error(error);
      });*/

    $(document).ready(function () {
      var tags = '<?php echo json_encode($tags) ;?>'
      tags = JSON.parse(tags)

      $('#tags').select2();
      $('#tags').val(tags);
      $('#tags').trigger('change');

      var moreArticles = '<?php echo json_encode($moreArticles) ;?>'
      moreArticles = JSON.parse(moreArticles)

      $('#moreArticles').select2({
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
      $('#moreArticles').val(moreArticles);
      $('#moreArticles').trigger('change');

      $('#tags').on('change', function (e) {
        var data = $('#tags').select2("val");
        @this.set('tags', data);
      });

      $('#moreArticles').on('change', function (e) {
        var data = $('#moreArticles').select2("data");
        @this.set('articlesData', data);
        var data = $('#moreArticles').select2("val");
        @this.set('moreArticles', data);
      });

      $(document).on('click','.firstTeamRemove',function() {
        $('#firstTeamMemberImage').val(null);
        $('#setFirstTeamMemberImageNull').click();
      });
      $(document).on('click','.secondTeamRemove',function() {
        $('#secondTeamMemberImage').val(null);
        $('#setSecondTeamMemberImageNull').click();
      });
    });
  </script>
@endpush
