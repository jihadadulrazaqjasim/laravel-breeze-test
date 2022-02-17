<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show') }}
        </h2>
    </x-slot>

{{-- @json($post) --}}
@can('view',$post)
    <p>This is show page</p>
@endcan



</x-app-layout>