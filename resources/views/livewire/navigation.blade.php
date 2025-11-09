<nav x-data="{ open: false, dropdown: false }" class="bg-gray-800 text-white relative">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">

      <!-- Botón menú móvil -->
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <button @click="open = !open" type="button"
          class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none">
          <span class="sr-only">Abrir menú principal</span>

          <!-- Icono menú -->
          <svg x-show="!open" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>

          <!-- Icono cerrar -->
          <svg x-show="open" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!-- Logo y menú -->
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex shrink-0 items-center">
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Logo"
            class="h-8 w-auto" />
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
          </div>
        </div>
      </div>

      <!-- Perfil y notificaciones -->
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

        <!-- Notificaciones -->
        <button type="button"
          class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
          <span class="sr-only">Ver notificaciones</span>
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 17h5l-1.405-1.405M19 13V9a7 7 0 10-14 0v4l-1.405 1.595M5 17h5m-3 0v1a3 3 0 006 0v-1m-6 0h6" />
          </svg>
        </button>

        <!-- Dropdown perfil -->
        <div class="relative ml-3" x-data="{ dropdown: false }">
          <button @click="dropdown = !dropdown" class="flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-white">
            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&w=256&h=256&q=80" alt="Usuario">
          </button>

          <div x-show="dropdown" @click.away="dropdown = false"
            x-transition
            class="absolute right-0 mt-2 w-48 origin-top-right rounded-md bg-gray-700 py-1 shadow-lg ring-1 ring-black ring-opacity-5">
            <a href="#" class="block px-4 py-2 text-sm text-gray-200 hover:bg-gray-600">Perfil</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-200 hover:bg-gray-600">Configuración</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-200 hover:bg-gray-600">Salir</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Menú móvil -->
  <div x-show="open" class="sm:hidden" x-transition>
    <div class="space-y-1 px-2 pb-3 pt-2">
      <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>
      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>
      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>
      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
    </div>
  </div>
</nav>
