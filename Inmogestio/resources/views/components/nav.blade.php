@props(['url', 'title'])
<nav class="mx-8 mt-3 lg:px-16 px-6 bg-white shadow-md flex flex-wrap items-center lg:py-0 py-2">
  <div class="flex-1 flex justify-between items-center">
    <a href="/inici" class="flex text-lg font-semibold">
      <img src="{{ asset('img/logo_web_pisos.png') }}" width="65" height="65" alt="Logo" class="ml-[-2rem]" />

      <div class="mt-5 text-indigo-900 text-2xl">
        <h1>Panel de gestió inmobiliaria</h1>
      </div>
    </a>
  </div>
  <label for="menu-toggle" class="cursor-pointer lg:hidden block">
    <svg
      class="fill-current text-gray-900"
      xmlns="http://www.w3.org/2000/svg"
      width="20"
      height="20"
      viewBox="0 0 20 20">
      <title>menu</title>
      <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
    </svg>
  </label>
  <input class="hidden" type="checkbox" id="menu-toggle" />
  <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
    <nav>
      <ul class="text-xl text-center items-center gap-x-5 pt-4 md:gap-x-4 lg:text-lg lg:flex  lg:pt-0">

        <li class="py-2 lg:py-2 ">

          <a href=" {{ $url }}" title="{{ $title }}">
            {{ svg('zondicon-add-solid', ['class' => 'w-6 h-6']) }}
            </a->

        </li>
        <li class="py-2 lg:py-0 ">
          <a
            class="text-purple-600 hover:pb-4 hover:border-b-4 hover:border-purple-400 hover:text-black"
            href="{{ route('pisos.index') }}">
            Pisos
          </a>

        </li>
        <li class="py-2 lg:py-0 ">
          <a
            class="text-purple-600 hover:pb-4 hover:border-b-4 hover:border-purple-400 hover:text-black"
            href="{{ route('clients.index') }}">
            Clients
          </a>
        </li>
        <li class="py-2 lg:py-0 ">
          <a
            class="text-purple-600 hover:pb-4 hover:border-b-4 hover:border-purple-400 hover:text-black"
            href="{{ route('reservas.index') }}">
            Reserves
          </a>
        </li>
        <li class="py-2 lg:py-0 ">
          <a
            class="text-purple-600 font-semibold hover:pb-4 hover:border-b-4 hover:border-purple-400 hover:text-black"
            href="/inici">
            Inici
          </a>
        </li>
      </ul>
    </nav>
  </div>
</nav>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    toggle.addEventListener('change', function() {
      if (toggle.checked) {
        menu.classList.remove('hidden');
      } else {
        menu.classList.add('hidden');
      }
    });
  });
</script>