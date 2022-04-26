<div class="p-4">
  <h2 class="font-semibold">Media & Resource centre Settings</h2>
  <form wire:submit.prevent="save">
    <div class="my-3">
      <label for="latestBlogTitle" class="block font-medium text-sm text-gray-700">Latest blog title</label>
      <input type="text" wire:model="latestBlogTitle.value"
             class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
             id="latestBlogTitle">
      @error('latestBlogTitle.value') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
    </div>
    <div class="my-3">
      <label for="ourLatestBlogLink" class="block font-medium text-sm text-gray-700">Our Latest Blog link</label>
      <input type="text" wire:model="ourLatestBlogLink.value"
             class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
             id="ourLatestBlogLink">
      @error('ourLatestBlogLink.value') <span class="text-sm text-red-600 mt-2">{{ $message }}</span> @enderror
    </div>
    <button
        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
        type="submit">Save
    </button>
  </form>
</div>
