@if (Session::has('error'))
  <p class="bg-danger">{{ Session::get('error') }}</p>
@endif