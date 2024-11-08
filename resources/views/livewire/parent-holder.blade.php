<div class="text-center space-y-4">
<button 
        wire:click="renderBlogsCard" 
        class="{{ $componentToRender === 'blog-cards' ? 'inline-block rounded-md bg-white px-4 py-2 text-sm text-blue-500 shadow-sm focus:relative dark:bg-blue-900' : 'inline-block rounded-md px-4 py-2 text-sm text-gray-500 hover:text-gray-700 focus:relative dark:text-gray-400 dark:hover:text-gray-200' }} transition delay-300 duration-300 ease-in-out "
    >
        Render Blogs
    </button>

    <button 
        wire:click="renderUserTable"
        class="{{ $componentToRender === 'usertable' ? 'inline-block rounded-md bg-white px-4 py-2 text-sm text-green-500 shadow-sm focus:relative dark:bg-green-900' : 'inline-block rounded-md px-4 py-2 text-sm text-gray-500 hover:text-gray-700 focus:relative dark:text-gray-400 dark:hover:text-gray-200' }} transition delay-300 duration-300 ease-in-out "
    >
        Render User Table
    </button>

    <button 
        wire:click="renderAddUserForm"
        class="{{ $componentToRender === 'add-user' ? 'inline-block rounded-md bg-white px-4 py-2 text-sm text-blue-500 shadow-sm focus:relative dark:bg-blue-900' : 'inline-block rounded-md px-4 py-2 text-sm text-gray-500 hover:text-gray-700 focus:relative dark:text-gray-400 dark:hover:text-gray-200' }} transition delay-300 duration-300 ease-in-out "
    >
        Render Add student
    </button>
</button>

<!-- Conditional rendering of components -->
    <div class="mt-8">
        @if ($componentToRender === 'blog-cards')
            @livewire('blog-cards')
        @elseif ($componentToRender === 'usertable')
            @livewire('usertable')
        @elseif ($componentToRender === 'add-user')
            @livewire('add-user')
        @else
            <p>Select an option to display a component.</p>
        @endif
    </div>
</div>
