<div>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Tags
    </h2>

  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-x-auto shadow-xl sm:rounded-lg">
        {{--        @if (session()->has('message'))--}}
        {{--          <div class="bg-persian-green-100 border-l-4 border-persian-green text-persian-green-700 p-4" role="alert">--}}
        {{--            <p>{{ session('message') }}</p>--}}
        {{--          </div>--}}
        {{--        @endif--}}
        <table class="items-center bg-transparent w-full border-collapse ">
          <thead>
          <tr class="border border-solid text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
            <td class="px-6 py-3">#</td>
            <td class="px-6 py-3">Tag</td>
            <td class="px-6 py-3">Previous route name</td>
            {{--            <td class="px-6 py-3">Actions</td>--}}
          </tr>
          </thead>

          <tbody>
          @foreach ($records as $record)
            <tr>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ $record->id }}</td>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ $record->name }}</td>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ $record->route_name }}</td>
              {{--              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
              {{--                <a href="{{ route('admin.category.edit', $record->id) }}" class="inline-flex items-center py-2 pl-2 pr-1 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">--}}
              {{--                  <i class="fas fa-edit"></i>--}}
              {{--                </a>--}}
              {{--                <button wire:click="delete({{ $record->id }})" class="inline-flex items-center justify-center p-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">--}}
              {{--                  <i class="far fa-trash-alt"></i>--}}
              {{--                </button>--}}
              {{--              </td>--}}
            </tr>
          @endforeach
          </tbody>
        </table>
        @if($records->count() == 0)
          <p class="text-center p-4">No records found</p>
        @endif

          {{ $records->links() }}
      </div>
    </div>
  </div>
</div>
