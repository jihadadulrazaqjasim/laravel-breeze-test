<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Posts') }}
            </h2>
            <form action="{{ route('post.create') }}" method="GET">
                <x-button class="bg-red-600">New Post</x-button>
            </form>
        </div>
    </x-slot>
    <br>
    @if (session('status') == 'success')
        <div class="alert p-2 bg-green-300 min-w-full">
            {{ session('message') }}
        </div>
    @elseif (session('status') == 'error')
        <div class="alert p-2 bg-red-300 min-w-full">
            {{ session('message') }}
        </div>
    @endif
    {{-- @json($posts) --}}



    {{-- <h1 class="font-bold">
        {{ $post->title }}
    </h1>
    <p class="text-justify max-w-3xl">{{ $post->body }}</p>
    <br> --}}

    @foreach ($posts as $post)
        {{-- @can('view-post', $post) --}}
        <x-posts class="h-auto" :value="__('hii')">

            <x-slot name="title">
                <h1 class="text-gray-700 text-lg font-bold">{{ $post->title }}</h1>
            </x-slot>

            <x-slot name="body">
                {{ $post->body }}
            </x-slot>

            <x-slot name="delete">
                <form action="{{ URL::to('post', $post->id) }}" method="POST">
                    @csrf
                    @method('delete')

                    <x-button type="submit" class="delete rounded-full bg-red-500 hover:bg-red-700 focus:bg-red-700">Delete</x-button>

                </form>
            </x-slot>
        </x-posts>
        {{-- @endcan --}}
    @endforeach

</x-app-layout>
