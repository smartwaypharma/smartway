<div>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Edit Category
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
        <form wire:submit.prevent="save">
          <div class="my-3">
            <label for="categoryName" class="block font-medium text-sm text-gray-700">Name</label>
            <input type="text" wire:model="model.name" wire:change="slugify" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="name">
            @error('model.name') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
          </div>

          <div class="my-3">
            <label for="categorySlug" class="block font-medium text-sm text-gray-700">Slug</label>
            <input type="text" wire:model="model.slug" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full " id="slug">
            @error('model.slug') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
          </div>

          <div class="my-3">
            <label for="access" class="block font-medium text-sm text-gray-700">Access for unauthorized users</label>
            <select type="text" wire:model="model.access_for_unauthorized" class="border border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full p-2" id="access">
              <option value="full">full</option>
              <option value="partial">partial</option>
              <option value="without access">without access</option>
            </select>
            @error('model.access_for_unauthorized') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
          </div>

          <a class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition" href="{{ route('admin.category') }}">Cancel</a>
          <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" type="submit">Create</button>
        </form>
      </div>
    </div>
  </div>
</div>
