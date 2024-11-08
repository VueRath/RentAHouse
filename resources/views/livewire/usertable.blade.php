<div class="rounded-lg border border-gray-200">
  <div class="overflow-x-auto rounded-t-lg">
    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
      <thead class="ltr:text-left rtl:text-right">
        <tr>
          <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">ID</th>
          <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Class ID</th>
          <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">House Section ID</th>
          <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
          <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Email</th>
        </tr>
      </thead>

      <tbody class="divide-y divide-gray-200">
        @foreach($users as $user)
        <tr>
          <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $user->id }}</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $user->class_id }}</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $user->house_sections_id }}</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $user->name }}</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $user->email }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- Pagination Controls -->
  <div class="p-4">
  {{ $users->links() }}
  </div>
</div>