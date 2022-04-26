<div>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      SmartNotes Form Data
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-x-auto shadow-xl sm:rounded-lg">
        <table class="table-auto items-center bg-transparent w-full border-collapse ">
          <thead>
          <tr class="border border-solid text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
            <td class="px-6 py-3">#</td>
            <td class="px-6 py-3">First Name</td>
            <td class="px-6 py-3">Last Name</td>
            <td class="px-6 py-3">Business Email</td>
            <td class="px-6 py-3">Company</td>
            <td class="px-6 py-3">Created at</td>
          </tr>
          </thead>

          <tbody>
          @foreach ($records as $record)
            <tr>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs p-4">{{ $record->id }}</td>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs p-4">{{ $record->firstname }}</td>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs p-4">{{ $record->lastname }}</td>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs p-4">{{ $record->email }}</td>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs p-4">{{ $record->company }}</td>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ $record->created_at }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
        @if($records->count() == 0)
          <p class="text-center p-4">No records found</p>
        @endif

        <div class="p-4">
          {{ $records->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
