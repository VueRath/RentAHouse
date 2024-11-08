<!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
  <div class="mx-auto max-w-lg text-center">
    <h1 class="text-2xl font-bold sm:text-3xl">Create User</h1>
  </div>

  <form action="#" class="mx-auto mb-0 mt-8 max-w-md space-y-4">
    <div>
      <label for="email" class="sr-only">Name</label>

      <div class="relative p-5">
        <input
          type="text"
          class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
          placeholder="Name"
        />
      </div>
    </div>

    <div>
      <label for="text" class="sr-only">Password</label>

      <div class="relative p-5">
        <input
          type="text"
          class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
          placeholder="Enter email"
        />
      </div>

      <div>
      <label for="password" class="sr-only">Password</label>

      <div class="relative p-5">
        <input
          type="password"
          class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
          placeholder="Enter password"
        />
      </div>

      <div>
      <label for="text" class="sr-only">Password</label>

      <div class="relative p-5">
        <input
          type="text"
          class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
          placeholder="confirm password"
        />
      </div>
      
    </div>

    

    <div class="flex items-center p-5 justify-between">
      <button
        type="submit"
        class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white"
      >
        Add student
      </button>
    </div>
  </form>
</div>
