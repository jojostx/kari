@if (!Cookie::get('cookieAlertSeen') && !(\Request::routeIs('cookie')))
<x-alert-toast>
  <p>
    We are using Cookies, read our 
    <span>
      <a href="{{ route('cookie') }}" class="inline font-medium underline hover:text-gray-200">Cookie Policy</a>
    </span>
  </p>
  
  <script>
    let input = document.getElementById('footertoast')
    let url = "{{ route('cookie.accept') }}"

    input.addEventListener('change', async (e) => {
      await axios.post(url, {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': '{{ csrf_token() }}',
        }
      });
    });
  </script>
</x-alert-toast>
@endif