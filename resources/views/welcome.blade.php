<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.bunny.net">
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  
</head>
<body class="p-5">
    <x-test-modal>
       
    </x-test-modal>

    <button x-data x-on:click="$dispatch('open-test-modal')" 
    class="px-3 py-1 bg-teal-500 text-white rounded">Open Modal</button>
</body>
</html>