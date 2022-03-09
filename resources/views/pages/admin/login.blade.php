@extends('layouts.admin.app')

@section('contents')
<div class="flex items-center justify-center min-h-screen text-gray-900 bg-gray-100">
  <div class="w-screen max-w-md p-2 space-y-8">

    <div class="flex items-center justify-center">
      <a href="/" target="_blank" rel="noopener noreferrer">
        <x-application-logo class="w-12 h-12 text-gray-500 fill-current" />
      </a>
    </div>
    
    @livewire('admin.auth.login')
  </div>
</div>
@endsection