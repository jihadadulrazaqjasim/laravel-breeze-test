<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    {{-- @json($posts) --}}



    {{-- <h1 class="font-bold">
        {{ $post->title }}
    </h1>
    <p class="text-justify max-w-3xl">{{ $post->body }}</p>
    <br> --}}

    @foreach ($posts as $post)
        {{-- @can('view-post', $post) --}}
            <x-posts class="h-20" :value="__('hii')">

                <x-slot name="title">
                    <h1 class="text-gray-700 text-lg font-bold">{{ $post->title }}</h1>
                </x-slot>

                <x-slot name="body">
                    {{ $post->body }}
                </x-slot>

                <x-slot name="delete">
                    <form action="{{ URL::to('post',$post->id) }}" method="POST">
                        @csrf
                        @method('delete')

                        <button type="submit" class="rounded-full">
                            Delete
                        </button>
                    </form>
                </x-slot>
            </x-posts>
        {{-- @endcan --}}
    @endforeach

</x-app-layout>
