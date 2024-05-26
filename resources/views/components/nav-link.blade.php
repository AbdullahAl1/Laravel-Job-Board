{{-- <a {{ $attributes }} class="abc">{{ $slot }}</a> --}}

{{-- ->merge(['class' => 'jjjjj']) just merge some other clasees to the given classes --}}

@php
    // do what ever you want
@endphp

@props(['active' => false, 'type' => 'a'])
{{-- epesod 5 --}}

{{-- <{{ $type }} {{ $attributes }} 
class="{{ $active ? 'bg-gray-900 text-white' :
 'text-gray-300 hover:bg-gray-700 hover:text-white' }}
    rounded-md px-3 py-2 text-sm font-medium" 
    aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</{{ $type }}> --}}
{{-- attributes are html tages classes id styles href ...  --}}
{{-- promt is somthing else  --}}

@if ($type == 'a')
    <a {{ $attributes }}
        class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}
    rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : 'false' }}">
        {{ $slot }}
    </a>
@else
    <button {{ $attributes }}
        class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}
    rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : 'false' }}">
        {{ $slot }}
    </button>
@endif
