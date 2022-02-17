<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>


    <x-form-create-validation :errors="$errors" />


    <form action="{{ URL::to('post') }}" method="POST">
        @method('post')
        @csrf
        <br>
        {{-- Title --}}
        <div>
            <x-label for="title" :value="_('Title')" />
            <x-input type="text" placeholder="enter title" class="block mt-1 w-full" name="title" id="title" />
        </div>

        {{-- Body --}}
        <div>
            <x-label for="body" :value="_('Body')" />
            <x-input type="text" placeholder="enter body" class="block mt-1 w-full" name="body" id="body" />
        </div>
        <br>
        {{-- Button --}}
        <div>
            <x-button class="text-green-400 hover:text-green-600 ml-3">
                {{ __('Create Post') }}
            </x-button>
        </div>
    </form>

</x-app-layout>
