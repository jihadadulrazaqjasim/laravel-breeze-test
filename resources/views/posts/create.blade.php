<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    {{-- Form create example --}}

    {{-- <form method="POST">
        @method('PUT')
        @csrf
        <div class="grid grid-cols-2 gap-6">
            <div class="grid grid-rows-2 gap-6">
                <div>
                    <x-label for="name" :value="__('Name')" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                        value="{{ auth()->user()->name }}" autofocus />
                </div>
                <div>
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                        value="{{ auth()->user()->email }}" autofocus />
                </div>
            </div>
            <div class="grid grid-rows-2 gap-6">
                <div>
                    <x-label for="new_password" :value="__('New password')" />
                    <x-input id="new_password" class="block mt-1 w-full" type="password" name="password"
                        autocomplete="new-password" />
                </div>
                <div>
                    <x-label for="confirm_password" :value="__('Confirm password')" />
                    <x-input id="confirm_password" class="block mt-1 w-full" type="password" name="password_confirmation"
                        autocomplete="confirm-password" />
                </div>
            </div>
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-button class="ml-3">
                {{ __('Update') }}
            </x-button>
        </div>
    </form> --}}


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
