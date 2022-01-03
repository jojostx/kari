<div class="fixed z-20 w-11/12 max-w-sm bottom-4 md:p-2 right-4 alert-toast md:w-full" id="toast">
  <input type="checkbox" class="hidden" id="footertoast">

  <label class="flex items-start justify-between w-full p-2 text-xs text-white bg-gray-800 rounded shadow-lg cursor-pointer sm:p-4 md:text-sm close" title="close" for="footertoast">
    {{ $slot }}
    <svg class="text-white fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
      <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
    </svg>
  </label>
</div>
